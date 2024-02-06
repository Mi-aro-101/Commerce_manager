<?php

namespace App\Repository;

use App\Entity\PVUtilisation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PVUtilisation>
 *
 * @method PVUtilisation|null find($id, $lockMode = null, $lockVersion = null)
 * @method PVUtilisation|null findOneBy(array $criteria, array $orderBy = null)
 * @method PVUtilisation[]    findAll()
 * @method PVUtilisation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PVUtilisationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PVUtilisation::class);
    }

//    /**
//     * @return PVUtilisation[] Returns an array of PVUtilisation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PVUtilisation
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
