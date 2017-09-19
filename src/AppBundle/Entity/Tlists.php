<?php

namespace AppBundle\Entity;

/**
 * Tlists
 */
class Tlists
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $parentListid;


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
     * Set label
     *
     * @param string $label
     *
     * @return Tlists
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Tlists
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set parentListid
     *
     * @param integer $parentListid
     *
     * @return Tlists
     */
    public function setParentListid($parentListid)
    {
        $this->parentListid = $parentListid;

        return $this;
    }

    /**
     * Get parentListid
     *
     * @return integer
     */
    public function getParentListid()
    {
        return $this->parentListid;
    }
}

