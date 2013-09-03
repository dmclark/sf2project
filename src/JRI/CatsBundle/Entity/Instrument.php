<?php



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
    
}
