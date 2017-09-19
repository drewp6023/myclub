<?php

namespace AppBundle\Entity;

/**
 * Ttimesheets
 */
class Ttimesheets
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $employeeid;

    /**
     * @var \DateTime
     */
    private $startdate;

    /**
     * @var \DateTime
     */
    private $enddate;

    /**
     * @var \DateTime
     */
    private $datecreated;

    /**
     * @var \DateTime
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $workhours;

    /**
     * @var string
     */
    private $overtime;

    /**
     * @var string
     */
    private $totalhours;

    /**
     * @var integer
     */
    private $active;

    /**
     * @var integer
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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
     * @return Ttimesheets
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

