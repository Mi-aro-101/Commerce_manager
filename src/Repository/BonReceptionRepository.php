<?php

namespace App\Repository;

use App\Entity\BonReception;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BonReception>
 *
 * @method BonReception|null find($id, $lockMode = null, $lockVersion = null)
 * @method BonReception|null findOneBy(array $criteria, array $orderBy = null)
 * @method BonReception[]    findAll()
 * @method BonReception[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BonReceptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BonReception::class);
    }

//    /**
//     * @return BonReception[] Returns an array of BonReception objects
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

//    public function findOneBySomeField($value): ?BonReception
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
