<?php



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
     * @ORM\OneToMany(targetEntity="Instuument", mappedBy="PackageInstrument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instuument", referencedColumnName="id")
     * })
     */
    private $Instuument;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Package = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Instuument = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
