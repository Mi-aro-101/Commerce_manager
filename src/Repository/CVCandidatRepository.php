<?php

namespace App\Repository;

use App\Entity\CVCandidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CVCandidat>
 *
 * @method CVCandidat|null find($id, $lockMode = null, $lockVersion = null)
 * @method CVCandidat|null findOneBy(array $criteria, array $orderBy = null)
 * @method CVCandidat[]    findAll()
 * @method CVCandidat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CVCandidatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CVCandidat::class);
    }

   /**
    * @return CVCandidat[] Returns an array of CVCandidat objects
    */
   public function findByCvRequirements($value): array
   {
       return $this->createQueryBuilder('c')
           ->andWhere('c.cvrequirements = :val')
           ->setParameter('val', $value)
           ->orderBy('c.id', 'ASC')
        //    ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?CVCandidat
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
