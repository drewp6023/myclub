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
     * Set contactid
     *
     * @param integer $contactid
     *
     * @return Logins
     */
    public function setContactid($contactid)
    {
        $this->contactid = $contactid;

        return $this;
    }

    /**
     * Get contactid
     *
     * @return integer
     */
    public function getContactid()
    {
        return $this->contactid;
    }

    /**
     * Set logintime
     *
     * @param \DateTime $logintime
     *
     * @return Logins
     */
    public function setLogintime($logintime)
    {
        $this->logintime = $logintime;

        return $this;
    }

    /**
     * Get logintime
     *
     * @return \DateTime
     */
    public function getLogintime()
    {
        return $this->logintime;
    }

    /**
     * Set logouttime
     *
     * @param \DateTime $logouttime
     *
     * @return Logins
     */
    public function setLogouttime($logouttime)
    {
        $this->logouttime = $logouttime;

        return $this;
    }

    /**
     * Get logouttime
     *
     * @return \DateTime
     */
    public function getLogouttime()
    {
        return $this->logouttime;
    }

    /**
     * Set failedloginattempts
     *
     * @param integer $failedloginattempts
     *
     * @return Logins
     */
    public function setFailedloginattempts($failedloginattempts)
    {
        $this->failedloginattempts = $failedloginattempts;

        return $this;
    }

    /**
     * Get failedloginattempts
     *
     * @return integer
     */
    public function getFailedloginattempts()
    {
        return $this->failedloginattempts;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     *
     * @return Logins
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
}
