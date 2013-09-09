<?php

namespace JRI\CatsBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity
 */

class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="instrument_id", type="integer")
     */
    private $instrument_id;

    /**
     * @var string
     *
     * @ORM\Column(name="item_number", type="string", length=10)
     */
    private $item_number;

    /**
     * @var float
     *
     * @ORM\Column(name="sort_key", type="float")
     */
    private $sort_key;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldset", type="string", length=10)
     */
    private $fieldset;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_required", type="boolean")
     */
    private $is_required;

    /**
     * @var string
     *
     * @ORM\Column(name="choice", type="string", length=30)
     */
    private $choice;

    /**
     * @var string
     *
     * @ORM\Column(name="choice_array", type="text")
     */
    private $choice_array;

    /**
     * @var string
     *
     * @ORM\Column(name="choice_keys", type="text")
     */
    private $choice_keys;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_item_number_printed", type="boolean")
     */
    private $is_item_number_printed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_name_printed", type="boolean")
     */
    private $is_name_printed;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_depth", type="integer")
     */
    private $question_depth;

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
     * @ORM\OneToMany(targetEntity="Instrument", mappedBy="Questions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instrument_id", referencedColumnName="id")
     * })
     */
    private $Instrument;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Instrument = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set name
     *
     * @param string $name
     * @return Question
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
     * Set type
     *
     * @param string $type
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set instrument_id
     *
     * @param integer $instrumentId
     * @return Question
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
     * Set item_number
     *
     * @param string $itemNumber
     * @return Question
     */
    public function setItemNumber($itemNumber)
    {
        $this->item_number = $itemNumber;
    
        return $this;
    }

    /**
     * Get item_number
     *
     * @return string 
     */
    public function getItemNumber()
    {
        return $this->item_number;
    }

    /**
     * Set sort_key
     *
     * @param float $sortKey
     * @return Question
     */
    public function setSortKey($sortKey)
    {
        $this->sort_key = $sortKey;
    
        return $this;
    }

    /**
     * Get sort_key
     *
     * @return float 
     */
    public function getSortKey()
    {
        return $this->sort_key;
    }

    /**
     * Set fieldset
     *
     * @param string $fieldset
     * @return Question
     */
    public function setFieldset($fieldset)
    {
        $this->fieldset = $fieldset;
    
        return $this;
    }

    /**
     * Get fieldset
     *
     * @return string 
     */
    public function getFieldset()
    {
        return $this->fieldset;
    }

    /**
     * Set is_required
     *
     * @param boolean $isRequired
     * @return Question
     */
    public function setIsRequired($isRequired)
    {
        $this->is_required = $isRequired;
    
        return $this;
    }

    /**
     * Get is_required
     *
     * @return boolean 
     */
    public function getIsRequired()
    {
        return $this->is_required;
    }

    /**
     * Set choice
     *
     * @param string $choice
     * @return Question
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;
    
        return $this;
    }

    /**
     * Get choice
     *
     * @return string 
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * Set choice_array
     *
     * @param string $choiceArray
     * @return Question
     */
    public function setChoiceArray($choiceArray)
    {
        $this->choice_array = $choiceArray;
    
        return $this;
    }

    /**
     * Get choice_array
     *
     * @return string 
     */
    public function getChoiceArray()
    {
        return $this->choice_array;
    }

    /**
     * Set choice_keys
     *
     * @param string $choiceKeys
     * @return Question
     */
    public function setChoiceKeys($choiceKeys)
    {
        $this->choice_keys = $choiceKeys;
    
        return $this;
    }

    /**
     * Get choice_keys
     *
     * @return string 
     */
    public function getChoiceKeys()
    {
        return $this->choice_keys;
    }

    /**
     * Set is_item_number_printed
     *
     * @param boolean $isItemNumberPrinted
     * @return Question
     */
    public function setIsItemNumberPrinted($isItemNumberPrinted)
    {
        $this->is_item_number_printed = $isItemNumberPrinted;
    
        return $this;
    }

    /**
     * Get is_item_number_printed
     *
     * @return boolean 
     */
    public function getIsItemNumberPrinted()
    {
        return $this->is_item_number_printed;
    }

    /**
     * Set is_name_printed
     *
     * @param boolean $isNamePrinted
     * @return Question
     */
    public function setIsNamePrinted($isNamePrinted)
    {
        $this->is_name_printed = $isNamePrinted;
    
        return $this;
    }

    /**
     * Get is_name_printed
     *
     * @return boolean 
     */
    public function getIsNamePrinted()
    {
        return $this->is_name_printed;
    }

    /**
     * Set question_depth
     *
     * @param integer $questionDepth
     * @return Question
     */
    public function setQuestionDepth($questionDepth)
    {
        $this->question_depth = $questionDepth;
    
        return $this;
    }

    /**
     * Get question_depth
     *
     * @return integer 
     */
    public function getQuestionDepth()
    {
        return $this->question_depth;
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
     * @return Question
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