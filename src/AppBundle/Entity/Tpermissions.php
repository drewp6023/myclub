<?php

namespace AppBundle\Entity;

/**
 * Tpermissions
 */
class Tpermissions
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
     * @var integer
     */
    private $permissionListid;


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
     * @return Tpermissions
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
     * Set permissionListid
     *
     * @param integer $permissionListid
     *
     * @return Tpermissions
     */
    public function setPermissionListid($permissionListid)
    {
        $this->permissionListid = $permissionListid;

        return $this;
    }

    /**
     * Get permissionListid
     *
     * @return integer
     */
    public function getPermissionListid()
    {
        return $this->permissionListid;
    }
}

