<?php

namespace JRI\CatsBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Instrument
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Instrument
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
     * @ORM\Column(name="short_name", type="string", length=15, unique=true)
     */
    private $short_name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_completed", type="integer", length=3)
     */
    private $min_completed;

    /**
     * @var integer
     *
     * @ORM\Column(name="graph_min", type="integer", length=3)
     */
    private $graph_min;

    /**
     * @var integer
     *
     * @ORM\Column(name="graph_max", type="integer", length=3)
     */
    private $graph_max;

    /**
     * @var integer
     *
     * @ORM\Column(name="graph_threshold", type="integer", length=3)
     */
    private $graph_threshold;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_static", type="integer")
     */
    private $is_static;

    /**
     * @var string
     *
     * @ORM\Column(name="header", type="text")
     */
    private $header;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="text")
     */
    private $copyright;

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
     * @ORM\ManyToMany(targetEntity="PackageInstrument", mappedBy="Instrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="instrument_id")
     * })
     */
    private $Instruments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Instruments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return Instrument
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
     * Set short_name
     *
     * @param string $shortName
     * @return Instrument
     */
    public function setShortName($shortName)
    {
        $this->short_name = $shortName;
    
        return $this;
    }

    /**
     * Get short_name
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Instrument
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
     * Set role
     *
     * @param string $role
     * @return Instrument
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set min_completed
     *
     * @param integer $minCompleted
     * @return Instrument
     */
    public function setMinCompleted($minCompleted)
    {
        $this->min_completed = $minCompleted;
    
        return $this;
    }

    /**
     * Get min_completed
     *
     * @return integer 
     */
    public function getMinCompleted()
    {
        return $this->min_completed;
    }

    /**
     * Set graph_min
     *
     * @param integer $graphMin
     * @return Instrument
     */
    public function setGraphMin($graphMin)
    {
        $this->graph_min = $graphMin;
    
        return $this;
    }

    /**
     * Get graph_min
     *
     * @return integer 
     */
    public function getGraphMin()
    {
        return $this->graph_min;
    }

    /**
     * Set graph_max
     *
     * @param integer $graphMax
     * @return Instrument
     */
    public function setGraphMax($graphMax)
    {
        $this->graph_max = $graphMax;
    
        return $this;
    }

    /**
     * Get graph_max
     *
     * @return integer 
     */
    public function getGraphMax()
    {
        return $this->graph_max;
    }

    /**
     * Set graph_threshold
     *
     * @param integer $graphThreshold
     * @return Instrument
     */
    public function setGraphThreshold($graphThreshold)
    {
        $this->graph_threshold = $graphThreshold;
    
        return $this;
    }

    /**
     * Get graph_threshold
     *
     * @return integer 
     */
    public function getGraphThreshold()
    {
        return $this->graph_threshold;
    }

    /**
     * Set is_static
     *
     * @param integer $isStatic
     * @return Instrument
     */
    public function setIsStatic($isStatic)
    {
        $this->is_static = $isStatic;
    
        return $this;
    }

    /**
     * Get is_static
     *
     * @return integer 
     */
    public function getIsStatic()
    {
        return $this->is_static;
    }

    /**
     * Set header
     *
     * @param string $header
     * @return Instrument
     */
    public function setHeader($header)
    {
        $this->header = $header;
    
        return $this;
    }

    /**
     * Get header
     *
     * @return string 
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     * @return Instrument
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    
        return $this;
    }

    /**
     * Get copyright
     *
     * @return string 
     */
    public function getCopyright()
    {
        return $this->copyright;
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
     * @param \JRI\CatsBundle\Entity\PackageInstrument $instruments
     * @return Instrument
     */
    public function addInstrument(\JRI\CatsBundle\Entity\PackageInstrument $instruments)
    {
        $this->Instruments[] = $instruments;
    
        return $this;
    }

    /**
     * Remove Instruments
     *
     * @param \JRI\CatsBundle\Entity\PackageInstrument $instruments
     */
    public function removeInstrument(\JRI\CatsBundle\Entity\PackageInstrument $instruments)
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
}