<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RightAnswers
 *
 * @ORM\Table(name="right_answers")
 * @ORM\Entity
 */
class RightAnswers
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
     * @var integer
     *
     * @ORM\Column(name="approved", type="integer", nullable=true)
     */
    private $approved;

    /**
     * @var \TournamentQuestions
     *
     * @ORM\ManyToOne(targetEntity="TournamentQuestions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="q_id", referencedColumnName="id")
     * })
     */
    private $q;

    /**
     * @var \Answers
     *
     * @ORM\ManyToOne(targetEntity="Answers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ans_id", referencedColumnName="id")
     * })
     */
    private $ans;



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
     * Set approved
     *
     * @param integer $approved
     * @return RightAnswers
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
     * Set q
     *
     * @param \Compete\ComBundle\Entity\TournamentQuestions $q
     * @return RightAnswers
     */
    public function setQ(\Compete\ComBundle\Entity\TournamentQuestions $q = null)
    {
        $this->q = $q;
    
        return $this;
    }

    /**
     * Get q
     *
     * @return \Compete\ComBundle\Entity\TournamentQuestions 
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * Set ans
     *
     * @param \Compete\ComBundle\Entity\Answers $ans
     * @return RightAnswers
     */
    public function setAns(\Compete\ComBundle\Entity\Answers $ans = null)
    {
        $this->ans = $ans;
    
        return $this;
    }

    /**
     * Get ans
     *
     * @return \Compete\ComBundle\Entity\Answers 
     */
    public function getAns()
    {
        return $this->ans;
    }
}