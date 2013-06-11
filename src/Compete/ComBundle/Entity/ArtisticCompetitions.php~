<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArtisticCompetitions
 *
 * @ORM\Table(name="artistic_competitions")
 * @ORM\Entity
 */
class ArtisticCompetitions
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
     * @ORM\Column(name="pathes", type="string", length=100, nullable=true)
     */
    private $pathes;

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
     * @var \Competitions
     *
     * @ORM\ManyToOne(targetEntity="Competitions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compte_id", referencedColumnName="id")
     * })
     */
    private $compte;



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
     * Set pathes
     *
     * @param string $pathes
     * @return ArtisticCompetitions
     */
    public function setPathes($pathes)
    {
        $this->pathes = $pathes;
    
        return $this;
    }

    /**
     * Get pathes
     *
     * @return string 
     */
    public function getPathes()
    {
        return $this->pathes;
    }

    /**
     * Set user
     *
     * @param \Compete\ComBundle\Entity\Users $user
     * @return ArtisticCompetitions
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
     * Set compte
     *
     * @param \Compete\ComBundle\Entity\Competitions $compte
     * @return ArtisticCompetitions
     */
    public function setCompte(\Compete\ComBundle\Entity\Competitions $compte = null)
    {
        $this->compte = $compte;
    
        return $this;
    }

    /**
     * Get compte
     *
     * @return \Compete\ComBundle\Entity\Competitions 
     */
    public function getCompte()
    {
        return $this->compte;
    }
}