<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competitions
 *
 * @ORM\Table(name="competitions")
 * @ORM\Entity
 */
class Competitions
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
     * @var \DateTime
     *
     * @ORM\Column(name="st_date", type="datetime", nullable=false)
     */
    private $stDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="winner", type="integer", nullable=false)
     */
    private $winner;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set stDate
     *
     * @param \DateTime $stDate
     * @return Competitions
     */
    public function setStDate($stDate)
    {
        $this->stDate = $stDate;
    
        return $this;
    }

    /**
     * Get stDate
     *
     * @return \DateTime 
     */
    public function getStDate()
    {
        return $this->stDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Competitions
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set winner
     *
     * @param integer $winner
     * @return Competitions
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    
        return $this;
    }

    /**
     * Get winner
     *
     * @return integer 
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set grade
     *
     * @param \Compete\ComBundle\Entity\Grades $grade
     * @return Competitions
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
}