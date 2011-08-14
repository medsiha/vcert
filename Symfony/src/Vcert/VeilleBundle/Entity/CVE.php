<?php

namespace Vcert\VeilleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vcert\VeilleBundle\Entity\CVE
 */
class CVE
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
     * @var text $lien
     */
    private $lien;


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
}