<?php

namespace App\Repository;

use App\Entity\PosteTwo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;

/**
 * @extends ServiceEntityRepository<PosteTwo>
 */
class PosteTwoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PosteTwo::class);
    }
    public function findOverlappingEvents(DateTime $start, DateTime $end): array
    {
        return $this->createQueryBuilder('e')
        ->where('e.start < :end')
        ->andWhere('e.end > :start')
        ->setParameter('start', $start)
        ->setParameter('end', $end)
        ->getQuery()
        ->getResult();
    }

    public function findRecentAndUpcoming(): array
    {
        $now = new DateTime(); // Date et heure actuelles
        $oneMonthAgo = (clone $now)->modify('-30 days'); // Date il y a 30 jours

        return $this->createQueryBuilder('p')
            ->where('p.start >= :oneMonthAgo') // Événements des 30 derniers jours et à venir
            ->setParameter('oneMonthAgo', $oneMonthAgo)
            ->orderBy('p.start', 'ASC') // Trie par date de début ascendante
            ->getQuery()
            ->getResult();
    }
    //    /**
    //     * @return PosteTwo[] Returns an array of PosteTwo objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?PosteTwo
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
