<?php

namespace App\Repository;

use App\Entity\Matrimoniale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Matrimoniale>
 *
 * @method Matrimoniale|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matrimoniale|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matrimoniale[]    findAll()
 * @method Matrimoniale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatrimonialeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matrimoniale::class);
    }

//    /**
//     * @return Matrimoniale[] Returns an array of Matrimoniale objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Matrimoniale
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
