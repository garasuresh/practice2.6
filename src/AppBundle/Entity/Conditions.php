<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conditions
 */
class Conditions
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;


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
     * @return Conditions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set description
     *
     * @param string $description
     * @return Conditions
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $symptom;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->symptom = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add symptom
     *
     * @param \AppBundle\Entity\Symptom $symptom
     * @return Conditions
     */
    public function addSymptom(\AppBundle\Entity\Symptom $symptom)
    {
        $this->symptom[] = $symptom;

        return $this;
    }

    /**
     * Remove symptom
     *
     * @param \AppBundle\Entity\Symptom $symptom
     */
    public function removeSymptom(\AppBundle\Entity\Symptom $symptom)
    {
        $this->symptom->removeElement($symptom);
    }

    /**
     * Get symptom
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSymptom()
    {
        return $this->symptom;
    }

    /**
     * Textual representation of the object while selecting
     * @return type
     */
    public function __toString()
    {
        return $this->name;
    }
}
