<?php

namespace Vcert\VeilleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vcert\VeilleBundle\Entity\Classifications
 */
class Classifications
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $classificationTypeId
     */
    private $classificationTypeId;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $longname
     */
    private $longname;


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
     * Set classificationTypeId
     *
     * @param integer $classificationTypeId
     */
    public function setClassificationTypeId($classificationTypeId)
    {
        $this->classificationTypeId = $classificationTypeId;
    }

    /**
     * Get classificationTypeId
     *
     * @return integer 
     */
    public function getClassificationTypeId()
    {
        return $this->classificationTypeId;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set longname
     *
     * @param string $longname
     */
    public function setLongname($longname)
    {
        $this->longname = $longname;
    }

    /**
     * Get longname
     *
     * @return string 
     */
    public function getLongname()
    {
        return $this->longname;
    }
}