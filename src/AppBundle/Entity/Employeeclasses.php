<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employeeclasses
 *
 * @ORM\Table(name="employeeclasses", uniqueConstraints={@ORM\UniqueConstraint(name="ID", columns={"ID"})})
 * @ORM\Entity
 */
class Employeeclasses
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
     * @ORM\Column(name="employeeID", type="integer", nullable=true)
     */
    private $employeeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="classID", type="integer", nullable=true)
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
     * @return Employeeclasses
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
     * @return Employeeclasses
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
