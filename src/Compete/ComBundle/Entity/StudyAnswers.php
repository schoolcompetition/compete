<?php
namespace Compete\ComBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * StudyAnswers
 *
 * @ORM\Table(name="studyanswers")
 * @ORM\Entity
 */
class StudyAnswers {
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
    private $answer;
    
        
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
     * @var \StudyQuestions
     *
     * @ORM\ManyToOne(targetEntity="StudyQuestions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     * })
     */
    private $question;

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
     * Set answer
     *
     * @param string $answer
     * @return StudyAnswers
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    
        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set user
     *
     * @param \Compete\ComBundle\Entity\Users $user
     * @return StudyAnswers
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
     * Set question
     *
     * @param \Compete\ComBundle\Entity\StudyQuestions $question
     * @return StudyAnswers
     */
    public function setQuestion(\Compete\ComBundle\Entity\StudyQuestions $question = null)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return \Compete\ComBundle\Entity\StudyQuestions 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}