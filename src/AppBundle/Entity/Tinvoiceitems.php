<?php

namespace AppBundle\Entity;

/**
 * Tinvoiceitems
 */
class Tinvoiceitems
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
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
     * @return Tinvoiceitems
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

