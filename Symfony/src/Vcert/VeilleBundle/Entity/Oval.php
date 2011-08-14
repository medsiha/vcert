<?php

namespace Vcert\VeilleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vcert\VeilleBundle\Entity\Oval
 */
class Oval
{
    /**
     * @var string $id
     */
    private $id;

    /**
     * @var text $titre
     */
    private $titre;

    /**
     * @var text $description
     */
    private $description;

    /**
     * @var datetime $pubdate
     */
    private $pubdate;

    /**
     * @var text $lien
     */
    private $lien;

    /**
     * @var text $category
     */
    private $category;

    /**
     * @var text $guid
     */
    private $guid;


    /**
     * Set id
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param text $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return text 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set pubdate
     *
     * @param datetime $pubdate
     */
    public function setPubdate($pubdate)
    {
        $this->pubdate = $pubdate;
    }

    /**
     * Get pubdate
     *
     * @return datetime 
     */
    public function getPubdate()
    {
        return $this->pubdate;
    }

    /**
     * Set lien
     *
     * @param text $lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    }

    /**
     * Get lien
     *
     * @return text 
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * Set category
     *
     * @param text $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return text 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set guid
     *
     * @param text $guid
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
    }

    /**
     * Get guid
     *
     * @return text 
     */
    public function getGuid()
    {
        return $this->guid;
    }
}