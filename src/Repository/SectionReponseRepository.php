<?php

namespace App\Repository;

use App\Entity\SectionReponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SectionReponse>
 *
 * @method SectionReponse|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionReponse|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionReponse[]    findAll()
 * @method SectionReponse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionReponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionReponse::class);
    }

//    /**
//     * @return SectionReponse[] Returns an array of SectionReponse objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SectionReponse
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
