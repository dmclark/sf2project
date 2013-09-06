<?php

namespace JRI\CatsBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * PackageInstrument
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PackageInstrument
{
    /**
     * @var integer
     *
     * @ORM\Column(name="package_id", type="integer")
     */
    private $package_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="instrument_id", type="integer")
     */
    private $instrument_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="min_age", type="integer", length=2)
     */
    private $min_age;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_age", type="integer", length=2)
     */
    private $max_age;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_autocreate", type="boolean")
     */
    private $is_autocreate;

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
     * @ORM\OneToMany(targetEntity="Package", mappedBy="PackageInstrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="package", referencedColumnName="id")
     * })
     */
    private $Package;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Instrument", mappedBy="PackageInstrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instrument", referencedColumnName="id")
     * })
     */
    private $Instrument;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Package = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Instrument = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set package_id
     *
     * @param integer $packageId
     * @return PackageInstrument
     */
    public function setPackageId($packageId)
    {
        $this->package_id = $packageId;
    
        return $this;
    }

    /**
     * Get package_id
     *
     * @return integer 
     */
    public function getPackageId()
    {
        return $this->package_id;
    }

    /**
     * Set instrument_id
     *
     * @param integer $instrumentId
     * @return PackageInstrument
     */
    public function setInstrumentId($instrumentId)
    {
        $this->instrument_id = $instrumentId;
    
        return $this;
    }

    /**
     * Get instrument_id
     *
     * @return integer 
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     * Set min_age
     *
     * @param integer $minAge
     * @return PackageInstrument
     */
    public function setMinAge($minAge)
    {
        $this->min_age = $minAge;
    
        return $this;
    }

    /**
     * Get min_age
     *
     * @return integer 
     */
    public function getMinAge()
    {
        return $this->min_age;
    }

    /**
     * Set max_age
     *
     * @param integer $maxAge
     * @return PackageInstrument
     */
    public function setMaxAge($maxAge)
    {
        $this->max_age = $maxAge;
    
        return $this;
    }

    /**
     * Get max_age
     *
     * @return integer 
     */
    public function getMaxAge()
    {
        return $this->max_age;
    }

    /**
     * Set is_autocreate
     *
     * @param boolean $isAutocreate
     * @return PackageInstrument
     */
    public function setIsAutocreate($isAutocreate)
    {
        $this->is_autocreate = $isAutocreate;
    
        return $this;
    }

    /**
     * Get is_autocreate
     *
     * @return boolean 
     */
    public function getIsAutocreate()
    {
        return $this->is_autocreate;
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
     * Add Package
     *
     * @param \JRI\CatsBundle\Entity\Package $package
     * @return PackageInstrument
     */
    public function addPackage(\JRI\CatsBundle\Entity\Package $package)
    {
        $this->Package[] = $package;
    
        return $this;
    }

    /**
     * Remove Package
     *
     * @param \JRI\CatsBundle\Entity\Package $package
     */
    public function removePackage(\JRI\CatsBundle\Entity\Package $package)
    {
        $this->Package->removeElement($package);
    }

    /**
     * Get Package
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPackage()
    {
        return $this->Package;
    }

    /**
     * Add Instrument
     *
     * @param \JRI\CatsBundle\Entity\Instrument $instrument
     * @return PackageInstrument
     */
    public function addInstrument(\JRI\CatsBundle\Entity\Instrument $instrument)
    {
        $this->Instrument[] = $instrument;
    
        return $this;
    }

    /**
     * Remove Instrument
     *
     * @param \JRI\CatsBundle\Entity\Instrument $instrument
     */
    public function removeInstrument(\JRI\CatsBundle\Entity\Instrument $instrument)
    {
        $this->Instrument->removeElement($instrument);
    }

    /**
     * Get Instrument
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInstrument()
    {
        return $this->Instrument;
    }
}