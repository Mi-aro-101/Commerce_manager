<?php

namespace App\Repository;

use App\Entity\HeureSuplementaire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HeureSuplementaire>
 *
 * @method HeureSuplementaire|null find($id, $lockMode = null, $lockVersion = null)
 * @method HeureSuplementaire|null findOneBy(array $criteria, array $orderBy = null)
 * @method HeureSuplementaire[]    findAll()
 * @method HeureSuplementaire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeureSuplementaireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HeureSuplementaire::class);
    }

//    /**
//     * @return HeureSuplementaire[] Returns an array of HeureSuplementaire objects
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

//    public function findOneBySomeField($value): ?HeureSuplementaire
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
