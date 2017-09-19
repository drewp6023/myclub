<?php

namespace AppBundle\Entity;

/**
 * Tmemberships
 */
class Tmemberships
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
    private $modifieddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $active;

    /**
     * @var integer
     */
    private $frozen;

    /**
     * @var \DateTime
     */
    private $datecreated;


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
     * @return Tmemberships
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
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     *
     * @return Tmemberships
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

    /**
     * Set active
     *
     * @param integer $active
     *
     * @return Tmemberships
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set frozen
     *
     * @param integer $frozen
     *
     * @return Tmemberships
     */
    public function setFrozen($frozen)
    {
        $this->frozen = $frozen;

        return $this;
    }

    /**
     * Get frozen
     *
     * @return integer
     */
    public function getFrozen()
    {
        return $this->frozen;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     *
     * @return Tmemberships
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    /**
     * Get datecreated
     *
     * @return \DateTime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }
}

