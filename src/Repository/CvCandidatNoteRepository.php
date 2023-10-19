<?php

namespace App\Repository;

use App\Entity\CvCandidatNote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CvCandidatNote>
 *
 * @method CvCandidatNote|null find($id, $lockMode = null, $lockVersion = null)
 * @method CvCandidatNote|null findOneBy(array $criteria, array $orderBy = null)
 * @method CvCandidatNote[]    findAll()
 * @method CvCandidatNote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CvCandidatNoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CvCandidatNote::class);
    }

   /**
    * @return CvCandidatNote[] Returns an array of CvCandidatNote objects
    */
   public function findByCvRequirements($value): array
   {
       return $this->createQueryBuilder('c')
           ->andWhere('c.cvrequirements = :val')
           ->setParameter('val', $value)
           ->orderBy('c.Note', 'DESC')
           ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?CvCandidatNote
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
