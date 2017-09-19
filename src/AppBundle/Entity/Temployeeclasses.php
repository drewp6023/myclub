<?php

namespace AppBundle\Entity;

/**
 * Temployeeclasses
 */
class Temployeeclasses
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
     * @var integer
     */
    private $classid;


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
     * @return Temployeeclasses
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
     * Set classid
     *
     * @param integer $classid
     *
     * @return Temployeeclasses
     */
    public function setClassid($classid)
    {
        $this->classid = $classid;

        return $this;
    }

    /**
     * Get classid
     *
     * @return integer
     */
    public function getClassid()
    {
        return $this->classid;
    }
}

