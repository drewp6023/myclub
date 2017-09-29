<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoices
 *
 * @ORM\Table(name="invoices")
 * @ORM\Entity
 */
class Invoices
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="contactID", type="integer", nullable=true)
     */
    private $contactid;

    /**
     * @var integer
     *
     * @ORM\Column(name="employeeID", type="integer", nullable=true)
     */
    private $employeeid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="invoicedate", type="datetime", nullable=true)
     */
    private $invoicedate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enddate", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="pricetotalgrand", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $pricetotalgrand;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifieddate", type="datetime", nullable=false)
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="clubID", type="integer", nullable=true)
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
     * @return Invoices
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
     * @return Invoices
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
     * @return Invoices
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
     * @return Invoices
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
     * @return Invoices
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
     * @return Invoices
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
     * @return Invoices
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
     * @return Invoices
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
