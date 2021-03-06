<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departmentemployees
 *
 * @ORM\Table(name="departmentemployees", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Departmentemployees
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
     * @ORM\Column(name="departmentID", type="integer", nullable=false)
     */
    private $departmentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="employeeID", type="integer", nullable=false)
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
     * @return Departmentemployees
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
     * @return Departmentemployees
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
