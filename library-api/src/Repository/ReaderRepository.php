<?php

namespace App\Repository;

use App\Entity\Reader;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reader>
 */
class ReaderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reader::class);
    }

    public function getDebtors()
    {
        $sql = "
            SELECT DISTINCT
                r.id as reader_id,
                r.full_name,
                r.ticket_number,
                COUNT(l.id) as overdue_books_count
            FROM reader r
            INNER JOIN loan l ON r.id = l.reader_id
            WHERE l.return_date IS NULL 
            AND l.due_date < NOW()  -- срок возврата уже прошел
            GROUP BY r.id
            HAVING overdue_books_count > 0
            ORDER BY overdue_books_count DESC
        ";
        
        $conn = $this->getEntityManager()->getConnection();
        $stmt = $conn->prepare($sql);
        
        return $stmt->executeQuery()->fetchAllAssociative();
    }

    //    /**
    //     * @return Reader[] Returns an array of Reader objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Reader
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
