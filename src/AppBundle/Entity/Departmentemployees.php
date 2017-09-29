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


}

