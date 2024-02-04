<?php

namespace App\Repository;

use App\Entity\ImmobilisationDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImmobilisationDetails>
 *
 * @method ImmobilisationDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImmobilisationDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImmobilisationDetails[]    findAll()
 * @method ImmobilisationDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImmobilisationDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImmobilisationDetails::class);
    }

//    /**
//     * @return ImmobilisationDetails[] Returns an array of ImmobilisationDetails objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImmobilisationDetails
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
