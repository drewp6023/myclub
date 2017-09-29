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


}

