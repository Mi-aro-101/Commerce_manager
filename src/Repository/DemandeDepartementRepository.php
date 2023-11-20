<?php

namespace App\Repository;

use App\Entity\DemandeDepartement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandeDepartement>
 *
 * @method DemandeDepartement|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandeDepartement|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandeDepartement[]    findAll()
 * @method DemandeDepartement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandeDepartementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandeDepartement::class);
    }

//    /**
//     * @return DemandeDepartement[] Returns an array of DemandeDepartement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DemandeDepartement
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
