<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logins
 *
 * @ORM\Table(name="logins")
 * @ORM\Entity
 */
class Logins
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
     * @ORM\Column(name="contactID", type="integer", nullable=true)
     */
    private $contactid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logintime", type="datetime", nullable=true)
     */
    private $logintime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="logouttime", type="datetime", nullable=true)
     */
    private $logouttime;

    /**
     * @var integer
     *
     * @ORM\Column(name="failedloginattempts", type="integer", nullable=true)
     */
    private $failedloginattempts;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modifieddate", type="datetime", nullable=false)
     */
    private $modifieddate = 'CURRENT_TIMESTAMP';


}

