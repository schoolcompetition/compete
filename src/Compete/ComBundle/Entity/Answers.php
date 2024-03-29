<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answers
 *
 * @ORM\Table(name="answers")
 * @ORM\Entity
 */
class Answers
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
     * @ORM\Column(name="approvedright", type="integer")
     * 
     * 
     */
    private $approvedright;
    /**
     * @var integer
     *
     * @ORM\Column(name="is_right", type="integer")
     * 
     * 
     */
    private $isright;
    /**
     * @var boolean
     *
     */
    private $rightanswer;

    /**
     * @var string
     *
     * @ORM\Column(name="choice", type="string", length=100, nullable=false)
     */
    private $choice;

    /**
     * @var \TournamentQuestions
     *
     * @ORM\ManyToOne(targetEntity="TournamentQuestions",inversedBy="answers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="q_id", referencedColumnName="id")
     * })
     */
    private $q;



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
     * Set choice
     *
     * @param string $choice
     * @return Answers
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
     * Set q
     *
     * @param \Compete\ComBundle\Entity\TournamentQuestions $q
     * @return Answers
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
     * Set approvedright
     *
     * @param integer $approvedright
     * @return Answers
     */
    public function setApprovedright($approvedright)
    {
        $this->approvedright = $approvedright;
    
        return $this;
    }

    /**
     * Get approvedright
     *
     * @return integer 
     */
    public function getApprovedright()
    {
        return $this->approvedright;
    }
  /**
     * Get rightanswer
     *
     * @return boolean 
     */
    public function getRightanswer()
    {
        return $this->rightanswer;
    }
     public function setRightAnswer($rightanswer)
    {
        $this->rightanswer= $rightanswer;
    
        return $this;
    }
    public function __toString(){
        return $this->choice;
    }

    /**
     * Set isright
     *
     * @param integer $isright
     * @return Answers
     */
    public function setIsright($isright)
    {
        $this->isright = $isright;
    
        return $this;
    }

    /**
     * Get isright
     *
     * @return integer 
     */
    public function getIsright()
    {
        return $this->isright;
    }
}