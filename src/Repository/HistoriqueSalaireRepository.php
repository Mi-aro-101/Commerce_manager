<?php

namespace App\Repository;

use App\Entity\HistoriqueSalaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HistoriqueSalaire>
 *
 * @method HistoriqueSalaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method HistoriqueSalaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method HistoriqueSalaire[]    findAll()
 * @method HistoriqueSalaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoriqueSalaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HistoriqueSalaire::class);
    }

//    /**
//     * @return HistoriqueSalaire[] Returns an array of HistoriqueSalaire objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HistoriqueSalaire
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
