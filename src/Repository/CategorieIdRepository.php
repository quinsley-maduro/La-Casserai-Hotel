<?php

namespace App\Repository;

use App\Entity\CategorieId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategorieId|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieId|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieId[]    findAll()
 * @method CategorieId[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieIdRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieId::class);
    }

    // /**
    //  * @return CategorieId[] Returns an array of CategorieId objects
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
    public function findOneBySomeField($value): ?CategorieId
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
