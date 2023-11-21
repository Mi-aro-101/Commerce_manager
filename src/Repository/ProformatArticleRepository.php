<?php

namespace App\Repository;

use App\Entity\ProformatArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProformatArticle>
 *
 * @method ProformatArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProformatArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProformatArticle[]    findAll()
 * @method ProformatArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProformatArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProformatArticle::class);
    }

//    /**
//     * @return ProformatArticle[] Returns an array of ProformatArticle objects
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

//    public function findOneBySomeField($value): ?ProformatArticle
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
