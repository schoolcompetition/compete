<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votes
 *
 * @ORM\Table(name="votes")
 * @ORM\Entity
 */
class Votes
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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="voters_id", referencedColumnName="id")
     * })
     */
    private $voters;

    /**
     * @var \ArtisticCompetitions
     *
     * @ORM\ManyToOne(targetEntity="ArtisticCompetitions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="competition_id", referencedColumnName="id")
     * })
     */
    private $competition;



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
     * Set voters
     *
     * @param \Compete\ComBundle\Entity\Users $voters
     * @return Votes
     */
    public function setVoters(\Compete\ComBundle\Entity\Users $voters = null)
    {
        $this->voters = $voters;
    
        return $this;
    }

    /**
     * Get voters
     *
     * @return \Compete\ComBundle\Entity\Users 
     */
    public function getVoters()
    {
        return $this->voters;
    }

    /**
     * Set competition
     *
     * @param \Compete\ComBundle\Entity\ArtisticCompetitions $competition
     * @return Votes
     */
    public function setCompetition(\Compete\ComBundle\Entity\ArtisticCompetitions $competition = null)
    {
        $this->competition = $competition;
    
        return $this;
    }

    /**
     * Get competition
     *
     * @return \Compete\ComBundle\Entity\ArtisticCompetitions 
     */
    public function getCompetition()
    {
        return $this->competition;
    }
}