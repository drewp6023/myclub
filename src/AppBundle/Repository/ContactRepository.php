<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ContactRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT c FROM AppBundle:Contacts c ORDER BY c.firstname ASC'
            )
            ->getResult();
    }

    public function getNextIdOnStack()
    {
        $result = $this->getEntityManager()
            ->createQuery(
                'SELECT c.id FROM AppBundle:Contacts c ORDER BY c.id DESC'
            )
            ->setMaxResults(1)
            ->getResult();

        return !empty($result) ? $result[0]['id'] : false;
    }
}