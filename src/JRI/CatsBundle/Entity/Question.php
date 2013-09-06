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
    
}
