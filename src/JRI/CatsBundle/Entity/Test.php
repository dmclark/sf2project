<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="client_id", type="integer")
     */
    private $client_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="staff_id", type="integer")
     */
    private $staff_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="instrument_id", type="integer")
     */
    private $instrument_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="administered_on", type="date")
     */
    private $administered_on;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lock_date", type="date")
     */
    private $lock_date;

    /**
     * @var integer
     *
     * @ORM\Column(name="quarter", type="integer")
     */
    private $quarter;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_required_completed", type="integer")
     */
    private $num_required_completed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_complete", type="boolean")
     */
    private $is_complete;

    /**
     * @var integer
     *
     * @ORM\Column(name="completion_status", type="integer")
     */
    private $completion_status;

    /**
     * @var string
     *
     * @ORM\Column(name="completion_explanation", type="text")
     */
    private $completion_explanation;

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
     * @ORM\OneToMany(targetEntity="Instrument", mappedBy="Tests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instrument_id", referencedColumnName="id")
     * })
     */
    private $Instrument;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="sfGuardUser", mappedBy="Tests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="staff_id", referencedColumnName="id")
     * })
     */
    private $Staff;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Client", mappedBy="Tests")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $Client;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Instrument = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Staff = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Client = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
