<?php

namespace JRI\CatsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Answer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="test_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $testId;

    /**
     * @var integer
     *
     * @ORM\Column(name="question_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionId;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="string")
     */
    private $response;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Test", mappedBy="Answers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="test_id", referencedColumnName="id")
     * })
     */
    private $Test;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Question", mappedBy="Answers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     * })
     */
    private $Question;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Test = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Question = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
