<?php

namespace JRI\CatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\AsuayCollection;

/**
 * Package
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Package
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycle_length", type="integer", length=3)
     */
    private $cycleLength;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycle_days_open", type="integer", length=3)
     */
    private $cycleDaysOpen;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_events", type="boolean")
     */
    private $hasEvents;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Instrument", mappedBy="Package")
     */
    private $Instruments;

    /**
     * @ORM\OneToMany(targetEntity="Program", mappedBy="package")
     */
    protected $programs;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Programs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Instruments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return Package
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
     * @return Package
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
     * Set cycle_length
     *
     * @param integer $cycleLength
     * @return Package
     */
    public function setCycleLength($cycleLength)
    {
        $this->cycle_length = $cycleLength;
    
        return $this;
    }

    /**
     * Get cycle_length
     *
     * @return integer 
     */
    public function getCycleLength()
    {
        return $this->cycle_length;
    }

    /**
     * Set cycle_days_open
     *
     * @param integer $cycleDaysOpen
     * @return Package
     */
    public function setCycleDaysOpen($cycleDaysOpen)
    {
        $this->cycle_days_open = $cycleDaysOpen;
    
        return $this;
    }

    /**
     * Get cycle_days_open
     *
     * @return integer 
     */
    public function getCycleDaysOpen()
    {
        return $this->cycle_days_open;
    }

    /**
     * Set has_events
     *
     * @param boolean $hasEvents
     * @return Package
     */
    public function setHasEvents($hasEvents)
    {
        $this->has_events = $hasEvents;
    
        return $this;
    }

    /**
     * Get has_events
     *
     * @return boolean 
     */
    public function getHasEvents()
    {
        return $this->has_events;
    }

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
     * Add Instruments
     *
     * @param \JRI\CatsBundle\Entity\Instrument $instruments
     * @return Package
     */
    public function addInstrument(\JRI\CatsBundle\Entity\Instrument $instruments)
    {
        $this->Instruments[] = $instruments;
    
        return $this;
    }

    /**
     * Remove Instruments
     *
     * @param \JRI\CatsBundle\Entity\Instrument $instruments
     */
    public function removeInstrument(\JRI\CatsBundle\Entity\Instrument $instruments)
    {
        $this->Instruments->removeElement($instruments);
    }

    /**
     * Get Instruments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInstruments()
    {
        return $this->Instruments;
    }

    /**
     * Add program
     *
     * @param \JRI\CatsBundle\Entity\Program $program
     * @return Package
     */
    public function addProgram(\JRI\CatsBundle\Entity\Program $program)
    {
        $this->program[] = $program;
    
        return $this;
    }

    /**
     * Remove program
     *
     * @param \JRI\CatsBundle\Entity\Program $program
     */
    public function removeProgram(\JRI\CatsBundle\Entity\Program $program)
    {
        $this->program->removeElement($program);
    }

    /**
     * Get program
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Get programs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrograms()
    {
        return $this->programs;
    }
}