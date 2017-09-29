<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Audittrail
 *
 * @ORM\Table(name="audittrail")
 * @ORM\Entity
 */
class Audittrail
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
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=25, nullable=true)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="columnname", type="string", length=25, nullable=true)
     */
    private $columnname;

    /**
     * @var integer
     *
     * @ORM\Column(name="row", type="integer", nullable=true)
     */
    private $row;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifieddate", type="datetime", nullable=true)
     */
    private $modifieddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="contactID", type="integer", nullable=true)
     */
    private $contactid;

    /**
     * @var string
     *
     * @ORM\Column(name="oldvalue", type="string", length=255, nullable=true)
     */
    private $oldvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="newvalue", type="string", length=255, nullable=true)
     */
    private $newvalue;


}

