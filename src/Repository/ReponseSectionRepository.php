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

   /**
    * @return ReponseSection[] Returns an array of ReponseSection objects
    */
   public function findBySection($value): array
   {
       return $this->createQueryBuilder('r')
           ->andWhere('r.section = :val')
           ->setParameter('val', $value)
           ->orderBy('r.id', '')
           ->setMaxResults(10)
           ->getQuery()
           ->getResult()
       ;
   }

   public function findReponseTrueBySection($section): ?ReponseSection
   {
        $truth = 't';
       return $this->createQueryBuilder('r')
           ->andWhere('r.section = :val')
           ->setParameter('val', $section)
           ->getQuery()
           ->getOneOrNullResult()
       ;
   }
}
