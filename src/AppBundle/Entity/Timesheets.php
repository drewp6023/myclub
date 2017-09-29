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


}

