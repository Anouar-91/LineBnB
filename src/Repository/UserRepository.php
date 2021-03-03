<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function findBestUsers($limit = 3){
        return $this->createQueryBuilder('u')
                    ->join('u.ads', 'a')
                    ->join('a.comments', 'c')
                    ->select('u as user, AVG(c.rating) as avgRatings')
                    ->groupBy('u')
                    ->orderBy('avgRatings', 'DESC')
                    ->setMaxResults($limit)
                    ->getQuery()
                    ->getResult();

    }
    /**
     * @return CountUser[]
     */
    public function countUser()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT count(u) 
            from App\Entity\User u'
        );

        // returns an array of Product objects
        return $query->getSingleScalarResult();
    }


    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}