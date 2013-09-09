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
    

    /**
     * Set testId
     *
     * @param integer $testId
     * @return Answer
     */
    public function setTestId($testId)
    {
        $this->testId = $testId;
    
        return $this;
    }

    /**
     * Get testId
     *
     * @return integer 
     */
    public function getTestId()
    {
        return $this->testId;
    }

    /**
     * Set questionId
     *
     * @param integer $questionId
     * @return Answer
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;
    
        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer 
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set response
     *
     * @param string $response
     * @return Answer
     */
    public function setResponse($response)
    {
        $this->response = $response;
    
        return $this;
    }

    /**
     * Get response
     *
     * @return string 
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Add Test
     *
     * @param \JRI\CatsBundle\Entity\Test $test
     * @return Answer
     */
    public function addTest(\JRI\CatsBundle\Entity\Test $test)
    {
        $this->Test[] = $test;
    
        return $this;
    }

    /**
     * Remove Test
     *
     * @param \JRI\CatsBundle\Entity\Test $test
     */
    public function removeTest(\JRI\CatsBundle\Entity\Test $test)
    {
        $this->Test->removeElement($test);
    }

    /**
     * Get Test
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTest()
    {
        return $this->Test;
    }

    /**
     * Add Question
     *
     * @param \JRI\CatsBundle\Entity\Question $question
     * @return Answer
     */
    public function addQuestion(\JRI\CatsBundle\Entity\Question $question)
    {
        $this->Question[] = $question;
    
        return $this;
    }

    /**
     * Remove Question
     *
     * @param \JRI\CatsBundle\Entity\Question $question
     */
    public function removeQuestion(\JRI\CatsBundle\Entity\Question $question)
    {
        $this->Question->removeElement($question);
    }

    /**
     * Get Question
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestion()
    {
        return $this->Question;
    }
}