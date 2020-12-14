<?php

namespace App\Repository;

use App\Entity\Moviles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Moviles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moviles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moviles[]    findAll()
 * @method Moviles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MovilesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moviles::class);
    }

    // /**
    //  * @return Moviles[] Returns an array of Moviles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Moviles
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
