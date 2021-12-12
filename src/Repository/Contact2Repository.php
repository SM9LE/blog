<?php

namespace App\Repository;

use App\Entity\Contact2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Contact2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contact2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contact2[]    findAll()
 * @method Contact2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Contact2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contact2::class);
    }

    // /**
    //  * @return Contact2[] Returns an array of Contact2 objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Contact2
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
