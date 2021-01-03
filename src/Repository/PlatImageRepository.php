<?php

namespace App\Repository;

use App\Entity\PlatImage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlatImage|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlatImage|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlatImage[]    findAll()
 * @method PlatImage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlatImageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlatImage::class);
    }

    // /**
    //  * @return PlatImage[] Returns an array of PlatImage objects
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
    public function findOneBySomeField($value): ?PlatImage
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
