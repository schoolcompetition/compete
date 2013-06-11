<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * StudyQuestions
 *
 * @ORM\Table(name="studyquestions")
 * @ORM\Entity
 */

class StudyQuestions {
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
     * 
     * @ORM\Column(name="name", type="string", length=3000, nullable=false)
     */
    private $question;
    
     /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;
    
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
     *   @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
     * })
     */
    private $subject;
    
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt; 

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
     * @return StudyQuestions
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
     * Set user
     *
     * @param \Compete\ComBundle\Entity\Users $user
     * @return StudyQuestions
     */
    public function setUser(\Compete\ComBundle\Entity\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Compete\ComBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set grade
     *
     * @param \Compete\ComBundle\Entity\Grades $grade
     * @return StudyQuestions
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
     * Set subject
     *
     * @param \Compete\ComBundle\Entity\Subjects $subject
     * @return StudyQuestions
     */
    public function setSubject(\Compete\ComBundle\Entity\Subjects $subject = null)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return \Compete\ComBundle\Entity\Subjects 
     */
    public function getSubject()
    {
        return $this->subject;
    }
    
    public function __toString() {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return StudyQuestions
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}