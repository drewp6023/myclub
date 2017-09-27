<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ContactRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM AppBundle:Tcontacts c ORDER BY c.firstname ASC'
            )
            ->getResult();
    }
}