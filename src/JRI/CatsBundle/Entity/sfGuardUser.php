<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * sfGuardUser
 *
 * @ORM\Table(indexes={@ORM\Index(name="is_active_idx", columns={"is_active"})})
 * @ORM\Entity
 */
class sfGuardUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $last_name;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=255, unique=true)
     */
    private $email_address;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=128, unique=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="algorithm", type="string", length=128)
     */
    private $algorithm;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=128)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $is_active;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_super_admin", type="boolean")
     */
    private $is_super_admin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime")
     */
    private $last_login;

    /**
     * @var integer
     *
     * @ORM\Column(name="program_id", type="integer")
     */
    private $program_id;

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
     * @ORM\OneToMany(targetEntity="Program", mappedBy="Staff")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="program_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $Program;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="sfGuardGroup", mappedBy="Users")
     */
    private $Groups;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="sfGuardPermission", mappedBy="Users")
     */
    private $Permissions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Program = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Groups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Permissions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
