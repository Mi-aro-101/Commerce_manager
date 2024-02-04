<?php

namespace App\Repository;

use App\Entity\BonCommance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BonCommance>
 *
 * @method BonCommance|null find($id, $lockMode = null, $lockVersion = null)
 * @method BonCommance|null findOneBy(array $criteria, array $orderBy = null)
 * @method BonCommance[]    findAll()
 * @method BonCommance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BonCommanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BonCommance::class);
    }

//    /**
//     * @return BonCommance[] Returns an array of BonCommance objects
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

//    public function findOneBySomeField($value): ?BonCommance
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
