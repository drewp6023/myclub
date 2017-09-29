<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permissions
 *
 * @ORM\Table(name="permissions")
 * @ORM\Entity
 */
class Permissions
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
     * @var integer
     *
     * @ORM\Column(name="permission_listID", type="integer", nullable=false)
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
     * @return Permissions
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
     * @return Permissions
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
