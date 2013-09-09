<?php

namespace JRI\CatsBundle\Entity;


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
    

    /**
     * Set client_id
     *
     * @param integer $clientId
     * @return Test
     */
    public function setClientId($clientId)
    {
        $this->client_id = $clientId;
    
        return $this;
    }

    /**
     * Get client_id
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set staff_id
     *
     * @param integer $staffId
     * @return Test
     */
    public function setStaffId($staffId)
    {
        $this->staff_id = $staffId;
    
        return $this;
    }

    /**
     * Get staff_id
     *
     * @return integer 
     */
    public function getStaffId()
    {
        return $this->staff_id;
    }

    /**
     * Set instrument_id
     *
     * @param integer $instrumentId
     * @return Test
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
     * Set administered_on
     *
     * @param \DateTime $administeredOn
     * @return Test
     */
    public function setAdministeredOn($administeredOn)
    {
        $this->administered_on = $administeredOn;
    
        return $this;
    }

    /**
     * Get administered_on
     *
     * @return \DateTime 
     */
    public function getAdministeredOn()
    {
        return $this->administered_on;
    }

    /**
     * Set lock_date
     *
     * @param \DateTime $lockDate
     * @return Test
     */
    public function setLockDate($lockDate)
    {
        $this->lock_date = $lockDate;
    
        return $this;
    }

    /**
     * Get lock_date
     *
     * @return \DateTime 
     */
    public function getLockDate()
    {
        return $this->lock_date;
    }

    /**
     * Set quarter
     *
     * @param integer $quarter
     * @return Test
     */
    public function setQuarter($quarter)
    {
        $this->quarter = $quarter;
    
        return $this;
    }

    /**
     * Get quarter
     *
     * @return integer 
     */
    public function getQuarter()
    {
        return $this->quarter;
    }

    /**
     * Set num_required_completed
     *
     * @param integer $numRequiredCompleted
     * @return Test
     */
    public function setNumRequiredCompleted($numRequiredCompleted)
    {
        $this->num_required_completed = $numRequiredCompleted;
    
        return $this;
    }

    /**
     * Get num_required_completed
     *
     * @return integer 
     */
    public function getNumRequiredCompleted()
    {
        return $this->num_required_completed;
    }

    /**
     * Set is_complete
     *
     * @param boolean $isComplete
     * @return Test
     */
    public function setIsComplete($isComplete)
    {
        $this->is_complete = $isComplete;
    
        return $this;
    }

    /**
     * Get is_complete
     *
     * @return boolean 
     */
    public function getIsComplete()
    {
        return $this->is_complete;
    }

    /**
     * Set completion_status
     *
     * @param integer $completionStatus
     * @return Test
     */
    public function setCompletionStatus($completionStatus)
    {
        $this->completion_status = $completionStatus;
    
        return $this;
    }

    /**
     * Get completion_status
     *
     * @return integer 
     */
    public function getCompletionStatus()
    {
        return $this->completion_status;
    }

    /**
     * Set completion_explanation
     *
     * @param string $completionExplanation
     * @return Test
     */
    public function setCompletionExplanation($completionExplanation)
    {
        $this->completion_explanation = $completionExplanation;
    
        return $this;
    }

    /**
     * Get completion_explanation
     *
     * @return string 
     */
    public function getCompletionExplanation()
    {
        return $this->completion_explanation;
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
     * Add Instrument
     *
     * @param \JRI\CatsBundle\Entity\Instrument $instrument
     * @return Test
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

    /**
     * Add Staff
     *
     * @param \JRI\CatsBundle\Entity\sfGuardUser $staff
     * @return Test
     */
    public function addStaff(\JRI\CatsBundle\Entity\sfGuardUser $staff)
    {
        $this->Staff[] = $staff;
    
        return $this;
    }

    /**
     * Remove Staff
     *
     * @param \JRI\CatsBundle\Entity\sfGuardUser $staff
     */
    public function removeStaff(\JRI\CatsBundle\Entity\sfGuardUser $staff)
    {
        $this->Staff->removeElement($staff);
    }

    /**
     * Get Staff
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStaff()
    {
        return $this->Staff;
    }

    /**
     * Add Client
     *
     * @param \JRI\CatsBundle\Entity\Client $client
     * @return Test
     */
    public function addClient(\JRI\CatsBundle\Entity\Client $client)
    {
        $this->Client[] = $client;
    
        return $this;
    }

    /**
     * Remove Client
     *
     * @param \JRI\CatsBundle\Entity\Client $client
     */
    public function removeClient(\JRI\CatsBundle\Entity\Client $client)
    {
        $this->Client->removeElement($client);
    }

    /**
     * Get Client
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClient()
    {
        return $this->Client;
    }
}