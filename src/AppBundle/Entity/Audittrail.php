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
     * @return Audittrail
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
     * @return Audittrail
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
     * @return Audittrail
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
     * @return Audittrail
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
     * @return Audittrail
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
     * @return Audittrail
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
     * @return Audittrail
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
