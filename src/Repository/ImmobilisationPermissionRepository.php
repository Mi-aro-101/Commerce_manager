<?php

namespace App\Repository;

use App\Entity\ImmobilisationPermission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImmobilisationPermission>
 *
 * @method ImmobilisationPermission|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImmobilisationPermission|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImmobilisationPermission[]    findAll()
 * @method ImmobilisationPermission[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImmobilisationPermissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImmobilisationPermission::class);
    }

//    /**
//     * @return ImmobilisationPermission[] Returns an array of ImmobilisationPermission objects
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

//    public function findOneBySomeField($value): ?ImmobilisationPermission
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
