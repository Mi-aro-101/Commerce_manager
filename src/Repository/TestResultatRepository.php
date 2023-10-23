<?php

namespace App\Repository;

use App\Entity\TestResultat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestResultat>
 *
 * @method TestResultat|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestResultat|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestResultat[]    findAll()
 * @method TestResultat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestResultatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestResultat::class);
    }

//    /**
//     * @return TestResultat[] Returns an array of TestResultat objects
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

//    public function findOneBySomeField($value): ?TestResultat
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
