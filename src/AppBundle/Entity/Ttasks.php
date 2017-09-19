<?php

namespace AppBundle\Entity;

/**
 * Ttasks
 */
class Ttasks
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $projectid;

    /**
     * @var integer
     */
    private $employeeid;

    /**
     * @var integer
     */
    private $reporterEmployeeid;

    /**
     * @var \DateTime
     */
    private $datecreated;

    /**
     * @var \DateTime
     */
    private $starttime;

    /**
     * @var \DateTime
     */
    private $endtime;

    /**
     * @var \DateTime
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $taskstatusListid;

    /**
     * @var integer
     */
    private $priority;


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
     * Set name
     *
     * @param string $name
     *
     * @return Ttasks
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ttasks
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set projectid
     *
     * @param integer $projectid
     *
     * @return Ttasks
     */
    public function setProjectid($projectid)
    {
        $this->projectid = $projectid;

        return $this;
    }

    /**
     * Get projectid
     *
     * @return integer
     */
    public function getProjectid()
    {
        return $this->projectid;
    }

    /**
     * Set employeeid
     *
     * @param integer $employeeid
     *
     * @return Ttasks
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
     * Set reporterEmployeeid
     *
     * @param integer $reporterEmployeeid
     *
     * @return Ttasks
     */
    public function setReporterEmployeeid($reporterEmployeeid)
    {
        $this->reporterEmployeeid = $reporterEmployeeid;

        return $this;
    }

    /**
     * Get reporterEmployeeid
     *
     * @return integer
     */
    public function getReporterEmployeeid()
    {
        return $this->reporterEmployeeid;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     *
     * @return Ttasks
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
     * Set starttime
     *
     * @param \DateTime $starttime
     *
     * @return Ttasks
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     *
     * @return Ttasks
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     *
     * @return Ttasks
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
     * Set taskstatusListid
     *
     * @param integer $taskstatusListid
     *
     * @return Ttasks
     */
    public function setTaskstatusListid($taskstatusListid)
    {
        $this->taskstatusListid = $taskstatusListid;

        return $this;
    }

    /**
     * Get taskstatusListid
     *
     * @return integer
     */
    public function getTaskstatusListid()
    {
        return $this->taskstatusListid;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return Ttasks
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }
}

