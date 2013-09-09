<?php

namespace JRI\CatsBundle\Entity;


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
    private $programId;

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
    private $clinicianId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gender_id", type="integer", length=1)
     */
    private $genderId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="admission_date", type="date")
     */
    private $admissionDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="initiate_date", type="date")
     */
    private $initiateDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="discharge_date", type="date")
     */
    private $dischargeDate;

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
    }
    

    /**
     * Set programId
     *
     * @param integer $programId
     * @return Client
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;
    
        return $this;
    }

    /**
     * Get programId
     *
     * @return integer 
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * Set fname
     *
     * @param string $fname
     * @return Client
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
    
        return $this;
    }

    /**
     * Get fname
     *
     * @return string 
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return Client
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
    
        return $this;
    }

    /**
     * Get lname
     *
     * @return string 
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return Client
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    
        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set clinicianId
     *
     * @param integer $clinicianId
     * @return Client
     */
    public function setClinicianId($clinicianId)
    {
        $this->clinicianId = $clinicianId;
    
        return $this;
    }

    /**
     * Get clinicianId
     *
     * @return integer 
     */
    public function getClinicianId()
    {
        return $this->clinicianId;
    }

    /**
     * Set genderId
     *
     * @param integer $genderId
     * @return Client
     */
    public function setGenderId($genderId)
    {
        $this->genderId = $genderId;
    
        return $this;
    }

    /**
     * Get genderId
     *
     * @return integer 
     */
    public function getGenderId()
    {
        return $this->genderId;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Client
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set admissionDate
     *
     * @param \DateTime $admissionDate
     * @return Client
     */
    public function setAdmissionDate($admissionDate)
    {
        $this->admissionDate = $admissionDate;
    
        return $this;
    }

    /**
     * Get admissionDate
     *
     * @return \DateTime 
     */
    public function getAdmissionDate()
    {
        return $this->admissionDate;
    }

    /**
     * Set initiateDate
     *
     * @param \DateTime $initiateDate
     * @return Client
     */
    public function setInitiateDate($initiateDate)
    {
        $this->initiateDate = $initiateDate;
    
        return $this;
    }

    /**
     * Get initiateDate
     *
     * @return \DateTime 
     */
    public function getInitiateDate()
    {
        return $this->initiateDate;
    }

    /**
     * Set dischargeDate
     *
     * @param \DateTime $dischargeDate
     * @return Client
     */
    public function setDischargeDate($dischargeDate)
    {
        $this->dischargeDate = $dischargeDate;
    
        return $this;
    }

    /**
     * Get dischargeDate
     *
     * @return \DateTime 
     */
    public function getDischargeDate()
    {
        return $this->dischargeDate;
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
     * Add Program
     *
     * @param \JRI\CatsBundle\Entity\Program $program
     * @return Client
     */
    public function addProgram(\JRI\CatsBundle\Entity\Program $program)
    {
        $this->Program[] = $program;
    
        return $this;
    }

    /**
     * Remove Program
     *
     * @param \JRI\CatsBundle\Entity\Program $program
     */
    public function removeProgram(\JRI\CatsBundle\Entity\Program $program)
    {
        $this->Program->removeElement($program);
    }

    /**
     * Get Program
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProgram()
    {
        return $this->Program;
    }

    /**
     * Add Clinician
     *
     * @param \JRI\CatsBundle\Entity\sfGuardUser $clinician
     * @return Client
     */
    public function addClinician(\JRI\CatsBundle\Entity\sfGuardUser $clinician)
    {
        $this->Clinician[] = $clinician;
    
        return $this;
    }

    /**
     * Remove Clinician
     *
     * @param \JRI\CatsBundle\Entity\sfGuardUser $clinician
     */
    public function removeClinician(\JRI\CatsBundle\Entity\sfGuardUser $clinician)
    {
        $this->Clinician->removeElement($clinician);
    }

    /**
     * Get Clinician
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClinician()
    {
        return $this->Clinician;
    }

    /**
     * Add EditedBy
     *
     * @param \JRI\CatsBundle\Entity\sfGuardUser $editedBy
     * @return Client
     */
    public function addEditedBy(\JRI\CatsBundle\Entity\sfGuardUser $editedBy)
    {
        $this->EditedBy[] = $editedBy;
    
        return $this;
    }

    /**
     * Remove EditedBy
     *
     * @param \JRI\CatsBundle\Entity\sfGuardUser $editedBy
     */
    public function removeEditedBy(\JRI\CatsBundle\Entity\sfGuardUser $editedBy)
    {
        $this->EditedBy->removeElement($editedBy);
    }

    /**
     * Get EditedBy
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEditedBy()
    {
        return $this->EditedBy;
    }
}