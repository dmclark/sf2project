<?php

namespace JRI\CatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * Constructor
     */
    public function __construct()
    {
        $this->Instruments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
