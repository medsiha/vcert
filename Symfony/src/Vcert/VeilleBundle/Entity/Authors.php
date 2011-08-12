<?php

namespace Vcert\VeilleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vcert\VeilleBundle\Entity\Authors
 */
class Authors
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $company
     */
    private $company;

    /**
     * @var string $companyUrl
     */
    private $companyUrl;


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
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set company
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set companyUrl
     *
     * @param string $companyUrl
     */
    public function setCompanyUrl($companyUrl)
    {
        $this->companyUrl = $companyUrl;
    }

    /**
     * Get companyUrl
     *
     * @return string 
     */
    public function getCompanyUrl()
    {
        return $this->companyUrl;
    }
}