<?php

namespace App\Repository;

use App\Entity\Pcs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Pcs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pcs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pcs[]    findAll()
 * @method Pcs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PcsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pcs::class);
    }

    // /**
    //  * @return Pcs[] Returns an array of Pcs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pcs
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
