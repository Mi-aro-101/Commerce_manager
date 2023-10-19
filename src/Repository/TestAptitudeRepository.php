<?php

namespace App\Repository;

use App\Entity\TestAptitude;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestAptitude>
 *
 * @method TestAptitude|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestAptitude|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestAptitude[]    findAll()
 * @method TestAptitude[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestAptitudeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestAptitude::class);
    }

//    /**
//     * @return TestAptitude[] Returns an array of TestAptitude objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

   public function findOneByCvRequirements($value): ?TestAptitude
   {
       return $this->createQueryBuilder('t')
           ->andWhere('t.cv_requirements = :val')
           ->setParameter('val', $value)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }
}
