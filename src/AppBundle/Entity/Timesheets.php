<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Timesheets
 *
 * @ORM\Table(name="timesheets")
 * @ORM\Entity
 */
class Timesheets
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
     * @ORM\Column(name="employeeID", type="integer", nullable=true)
     */
    private $employeeid;

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
     * @var \DateTime
     *
     * @ORM\Column(name="datecreated", type="datetime", nullable=true)
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifieddate", type="datetime", nullable=false)
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="workhours", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $workhours;

    /**
     * @var string
     *
     * @ORM\Column(name="overtime", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $overtime;

    /**
     * @var string
     *
     * @ORM\Column(name="totalhours", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $totalhours;

    /**
     * @var integer
     *
     * @ORM\Column(name="active", type="smallint", nullable=true)
     */
    private $active;

    /**
     * @var integer
     *
     * @ORM\Column(name="approved", type="smallint", nullable=true)
     */
    private $approved;



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
     * Set employeeid
     *
     * @param integer $employeeid
     *
     * @return Timesheets
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Timesheets
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
     * @return Timesheets
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
     * Set datecreated
     *
     * @param \DateTime $datecreated
     *
     * @return Timesheets
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    /**
     * Get datecreated
     *
     * @return \DateTime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     *
     * @return Timesheets
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
     * Set workhours
     *
     * @param string $workhours
     *
     * @return Timesheets
     */
    public function setWorkhours($workhours)
    {
        $this->workhours = $workhours;

        return $this;
    }

    /**
     * Get workhours
     *
     * @return string
     */
    public function getWorkhours()
    {
        return $this->workhours;
    }

    /**
     * Set overtime
     *
     * @param string $overtime
     *
     * @return Timesheets
     */
    public function setOvertime($overtime)
    {
        $this->overtime = $overtime;

        return $this;
    }

    /**
     * Get overtime
     *
     * @return string
     */
    public function getOvertime()
    {
        return $this->overtime;
    }

    /**
     * Set totalhours
     *
     * @param string $totalhours
     *
     * @return Timesheets
     */
    public function setTotalhours($totalhours)
    {
        $this->totalhours = $totalhours;

        return $this;
    }

    /**
     * Get totalhours
     *
     * @return string
     */
    public function getTotalhours()
    {
        return $this->totalhours;
    }

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return Timesheets
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set approved
     *
     * @param integer $approved
     *
     * @return Timesheets
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved
     *
     * @return integer
     */
    public function getApproved()
    {
        return $this->approved;
    }
}
