<?php

namespace App\Repository;

use App\Entity\EtatReception;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EtatReception>
 *
 * @method EtatReception|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtatReception|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtatReception[]    findAll()
 * @method EtatReception[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtatReceptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtatReception::class);
    }

//    /**
//     * @return EtatReception[] Returns an array of EtatReception objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EtatReception
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
