<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoiceitems
 *
 * @ORM\Table(name="invoiceitems", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Invoiceitems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="invoiceID", type="integer", nullable=true)
     */
    private $invoiceid;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invoiceid
     *
     * @param integer $invoiceid
     *
     * @return Invoiceitems
     */
    public function setInvoiceid($invoiceid)
    {
        $this->invoiceid = $invoiceid;

        return $this;
    }

    /**
     * Get invoiceid
     *
     * @return integer
     */
    public function getInvoiceid()
    {
        return $this->invoiceid;
    }
}
