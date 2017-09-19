<?php

namespace AppBundle\Entity;

/**
 * Taudittrail
 */
class Taudittrail
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tablename;

    /**
     * @var string
     */
    private $columnname;

    /**
     * @var integer
     */
    private $row;

    /**
     * @var \DateTime
     */
    private $modifieddate;

    /**
     * @var integer
     */
    private $contactid;

    /**
     * @var string
     */
    private $oldvalue;

    /**
     * @var string
     */
    private $newvalue;


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
     * Set tablename
     *
     * @param string $tablename
     *
     * @return Taudittrail
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set columnname
     *
     * @param string $columnname
     *
     * @return Taudittrail
     */
    public function setColumnname($columnname)
    {
        $this->columnname = $columnname;

        return $this;
    }

    /**
     * Get columnname
     *
     * @return string
     */
    public function getColumnname()
    {
        return $this->columnname;
    }

    /**
     * Set row
     *
     * @param integer $row
     *
     * @return Taudittrail
     */
    public function setRow($row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row
     *
     * @return integer
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set modifieddate
     *
     * @param \DateTime $modifieddate
     *
     * @return Taudittrail
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
     * Set contactid
     *
     * @param integer $contactid
     *
     * @return Taudittrail
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
     * Set oldvalue
     *
     * @param string $oldvalue
     *
     * @return Taudittrail
     */
    public function setOldvalue($oldvalue)
    {
        $this->oldvalue = $oldvalue;

        return $this;
    }

    /**
     * Get oldvalue
     *
     * @return string
     */
    public function getOldvalue()
    {
        return $this->oldvalue;
    }

    /**
     * Set newvalue
     *
     * @param string $newvalue
     *
     * @return Taudittrail
     */
    public function setNewvalue($newvalue)
    {
        $this->newvalue = $newvalue;

        return $this;
    }

    /**
     * Get newvalue
     *
     * @return string
     */
    public function getNewvalue()
    {
        return $this->newvalue;
    }
}

