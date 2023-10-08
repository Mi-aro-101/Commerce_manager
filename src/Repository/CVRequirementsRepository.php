<?php

namespace App\Repository;

use App\Entity\CVRequirements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CVRequirements>
 *
 * @method CVRequirements|null find($id, $lockMode = null, $lockVersion = null)
 * @method CVRequirements|null findOneBy(array $criteria, array $orderBy = null)
 * @method CVRequirements[]    findAll()
 * @method CVRequirements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CVRequirementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CVRequirements::class);
    }

//    /**
//     * @return CVRequirements[] Returns an array of CVRequirements objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CVRequirements
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
