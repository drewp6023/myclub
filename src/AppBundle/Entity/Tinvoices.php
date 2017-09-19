<?php

namespace AppBundle\Entity;

/**
 * Tinvoices
 */
class Tinvoices
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $contactid;

    /**
     * @var integer
     */
    private $employeeid;

    /**
     * @var \DateTime
     */
    private $invoicedate;

    /**
     * @var \DateTime
     */
    private $startdate;

    /**
     * @var \DateTime
     */
    private $enddate;

    /**
     * @var string
     */
    private $pricetotalgrand;

    /**
     * @var \DateTime
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $clubid;


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
     * Set contactid
     *
     * @param integer $contactid
     *
     * @return Tinvoices
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return integer
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set employeeid
     *
     * @param integer $employeeid
     *
     * @return Tinvoices
     */
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;

        return $this;
    }

    /**
     * Get employeeid
     *
     * @return integer
     */
    public function getEmployeeid()
    {
        return $this->employeeid;
    }

    /**
     * Set invoicedate
     *
     * @param \DateTime $invoicedate
     *
     * @return Tinvoices
     */
    public function setInvoicedate($invoicedate)
    {
        $this->invoicedate = $invoicedate;

        return $this;
    }

    /**
     * Get invoicedate
     *
     * @return \DateTime
     */
    public function getInvoicedate()
    {
        return $this->invoicedate;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Tinvoices
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Tinvoices
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set pricetotalgrand
     *
     * @param string $pricetotalgrand
     *
     * @return Tinvoices
     */
    public function setPricetotalgrand($pricetotalgrand)
    {
        $this->pricetotalgrand = $pricetotalgrand;

        return $this;
    }

    /**
     * Get pricetotalgrand
     *
     * @return string
     */
    public function getPricetotalgrand()
    {
        return $this->pricetotalgrand;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     *
     * @return Tinvoices
     */
    public function setModifieddate($modifieddate)
    {
        $this->modifieddate = $modifieddate;

        return $this;
    }

    /**
     * Get modifieddate
     *
     * @return \DateTime
     */
    public function getModifieddate()
    {
        return $this->modifieddate;
    }

    /**
     * Set clubid
     *
     * @param integer $clubid
     *
     * @return Tinvoices
     */
    public function setClubid($clubid)
    {
        $this->clubid = $clubid;

        return $this;
    }

    /**
     * Get clubid
     *
     * @return integer
     */
    public function getClubid()
    {
        return $this->clubid;
    }
}

