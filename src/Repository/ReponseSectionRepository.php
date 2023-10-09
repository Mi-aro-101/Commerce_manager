<?php

namespace App\Repository;

use App\Entity\ReponseSection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReponseSection>
 *
 * @method ReponseSection|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReponseSection|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReponseSection[]    findAll()
 * @method ReponseSection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReponseSectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReponseSection::class);
    }

//    /**
//     * @return ReponseSection[] Returns an array of ReponseSection objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReponseSection
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
