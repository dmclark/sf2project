<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="program_id", type="integer")
     */
    private $program_id;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=25)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=25)
     */
    private $lname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="date")
     */
    private $dob;

    /**
     * @var integer
     *
     * @ORM\Column(name="clinician_id", type="integer")
     */
    private $clinician_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender_id", type="integer", length=1)
     */
    private $gender_id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="admission_date", type="date")
     */
    private $admission_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="initiate_date", type="date")
     */
    private $initiate_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="discharge_date", type="date")
     */
    private $discharge_date;

    /**
     * @var integer
     *
     * @ORM\Column(name="edited_by", type="integer")
     */
    private $edited_by;

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
     * @ORM\OneToMany(targetEntity="Program", mappedBy="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="program_id", referencedColumnName="id")
     * })
     */
    private $Program;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="sfGuardUser", mappedBy="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clinician_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $Clinician;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="sfGuardUser", mappedBy="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="edited_by", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $EditedBy;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Program = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Clinician = new \Doctrine\Common\Collections\ArrayCollection();
        $this->EditedBy = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
