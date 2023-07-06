<?php

namespace App\Repository;

use App\Entity\Voiture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class VoitureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Voiture::class);
    }

    // Méthodes génériques pour la persistance et la suppression

    public function save(Voiture $voiture, bool $flush = false): void
    {
        $this->getEntityManager()->persist($voiture);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Voiture $voiture, bool $flush = false): void
    {
        $this->getEntityManager()->remove($voiture);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }



    
}
