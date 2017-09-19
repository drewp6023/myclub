<?php

namespace AppBundle\Entity;

/**
 * Tlogins
 */
class Tlogins
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $contactid;

    /**
     * @var \DateTime
     */
    private $logintime;

    /**
     * @var \DateTime
     */
    private $logouttime;

    /**
     * @var integer
     */
    private $failedloginattempts;

    /**
     * @var \DateTime
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
     * @return Tlogins
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
     * @return Tlogins
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
     * @return Tlogins
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
     * @return Tlogins
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
     * @return Tlogins
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

