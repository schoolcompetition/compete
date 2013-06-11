<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TournamentQuestions
 *
 * @ORM\Table(name="tournament_questions")
 * @ORM\Entity
 */
class TournamentQuestions
{
   
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=300, nullable=true)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="approved", type="integer", nullable=true)
     */
    private $approved;

    /**
     * @var string
     *
     * @ORM\Column(name="is_active", type="string", length=1, nullable=true)
     */
    private $isActive;

    /**
     * @var \Grades
     *
     * @ORM\ManyToOne(targetEntity="Grades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grade_id", referencedColumnName="id")
     * })
     */
    private $grade;

    /**
     * @var \Subjects
     *
     * @ORM\ManyToOne(targetEntity="Subjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subj_id", referencedColumnName="id")
     * })
     */
    private $subj;

    
    /**
     *
     * @ORM\OneToMany(targetEntity="\Compete\ComBundle\Entity\Answers", mappedBy="q",cascade={"persist"})
     */
    private $answers;
    
    public function __construct()
    {
        $this->answers = new ArrayCollection();
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
     * Set question
     *
     * @param string $question
     * @return TournamentQuestions
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TournamentQuestions
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
     * Set approved
     *
     * @param integer $approved
     * @return TournamentQuestions
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;
    
        return $this;
    }

    /**
     * Get approved
     *
     * @return integer 
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set isActive
     *
     * @param string $isActive
     * @return TournamentQuestions
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return string 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set grade
     *
     * @param \Compete\ComBundle\Entity\Grades $grade
     * @return TournamentQuestions
     */
    public function setGrade(\Compete\ComBundle\Entity\Grades $grade = null)
    {
        $this->grade = $grade;
    
        return $this;
    }

    /**
     * Get grade
     *
     * @return \Compete\ComBundle\Entity\Grades 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set subj
     *
     * @param \Compete\ComBundle\Entity\Subjects $subj
     * @return TournamentQuestions
     */
    public function setSubj(\Compete\ComBundle\Entity\Subjects $subj = null)
    {
        $this->subj = $subj;
    
        return $this;
    }

    /**
     * Get subj
     *
     * @return \Compete\ComBundle\Entity\Subjects 
     */
    public function getSubj()
    {
        return $this->subj;
    }

    /**
     * Add answers
     *
     * @param \Compete\ComBundle\Entity\Answers $answers
     * @return TournamentQuestions
     */
    public function addAnswer(\Compete\ComBundle\Entity\Answers $answers)
    {
        $this->answers[] = $answers;
    
        return $this;
    }

    /**
     * Remove answers
     *
     * @param \Compete\ComBundle\Entity\Answers $answers
     */
    public function removeAnswer(\Compete\ComBundle\Entity\Answers $answers)
    {
        $this->answers->removeElement($answers);
    }

    /**
     * Get answers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}