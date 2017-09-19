<?php

namespace AppBundle\Entity;

/**
 * Tdepartmentemployees
 */
class Tdepartmentemployees
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $departmentid;

    /**
     * @var integer
     */
    private $employeeid;


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
     * Set departmentid
     *
     * @param integer $departmentid
     *
     * @return Tdepartmentemployees
     */
    public function setDepartmentid($departmentid)
    {
        $this->departmentid = $departmentid;

        return $this;
    }

    /**
     * Get departmentid
     *
     * @return integer
     */
    public function getDepartmentid()
    {
        return $this->departmentid;
    }

    /**
     * Set employeeid
     *
     * @param integer $employeeid
     *
     * @return Tdepartmentemployees
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
}

