<?php

namespace App\Repository;

use App\Entity\TestCandidatNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestCandidatNote>
 *
 * @method TestCandidatNote|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestCandidatNote|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestCandidatNote[]    findAll()
 * @method TestCandidatNote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestCandidatNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestCandidatNote::class);
    }

//    /**
//     * @return TestCandidatNote[] Returns an array of TestCandidatNote objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TestCandidatNote
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
