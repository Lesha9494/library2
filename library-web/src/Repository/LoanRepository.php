<?php

namespace App\Repository;

use App\Entity\Loan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Loan>
 */
class LoanRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loan::class);
    }

    public function countActiveLoans(): int
    {
        return $this->createQueryBuilder('l')
            ->select('COUNT(l.id)')
            ->where('l.returnDate IS NULL')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findOverdueLoans(): array
    {
        $today = new \DateTime();

        return $this->createQueryBuilder('l')
            ->join('l.reader', 'r')
            ->join('l.bookCopy', 'bc')
            ->join('bc.book', 'b')
            ->where('l.returnDate IS NULL')
            ->andWhere('l.dueDate < :today')
            ->setParameter('today', $today->format('Y-m-d'))
            ->orderBy('l.dueDate', 'ASC')
            ->getQuery()
            ->getResult();
    }
    //    /**
    //     * @return Loan[] Returns an array of Loan objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Loan
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
