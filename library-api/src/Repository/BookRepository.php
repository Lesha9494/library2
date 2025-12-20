<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    public function getMostPopularBooks(int $limit = 10): array
    {
        $sql = "
        SELECT 
            b.id as book_id,
            b.title,
            a.full_name as author,
            COUNT(l.id) as times_borrowed
        FROM book b
        LEFT JOIN author a ON b.author_id = a.id
        LEFT JOIN book_copy bc ON b.id = bc.book_id
        LEFT JOIN loan l ON bc.id = l.book_copy_id
        GROUP BY b.id
        ORDER BY times_borrowed DESC
        LIMIT ?
        ";

        $conn = $this->getEntityManager()->getConnection();

        return $conn->executeQuery($sql, [$limit], [\Doctrine\DBAL\ParameterType::INTEGER])
            ->fetchAllAssociative();
    }

    //    /**
    //     * @return Book[] Returns an array of Book objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Book
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
