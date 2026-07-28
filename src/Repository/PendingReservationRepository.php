<?php

namespace App\Repository;

use App\Entity\PendingReservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PendingReservation>
 */
class PendingReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PendingReservation::class);
    }

    public function findByToken(string $token): ?PendingReservation
    {
        return $this->findOneBy(['token' => $token]);
    }

    public function deleteExpired(): int
    {
        return $this->createQueryBuilder('p')
            ->delete()
            ->where('p.expiresAt < :now')
            ->setParameter('now', new \DateTimeImmutable())
            ->getQuery()
            ->execute();
    }
}
