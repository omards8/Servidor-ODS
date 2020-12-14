<?php

namespace App\Repository;

use App\Entity\Tablets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tablets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tablets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tablets[]    findAll()
 * @method Tablets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TabletsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tablets::class);
    }

    // /**
    //  * @return Tablets[] Returns an array of Tablets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tablets
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
