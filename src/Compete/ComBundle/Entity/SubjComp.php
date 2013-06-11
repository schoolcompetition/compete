<?php

namespace Compete\ComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubjComp
 *
 * @ORM\Table(name="subj_comp")
 * @ORM\Entity
 */
class SubjComp
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
     * @var \Subjects
     *
     * @ORM\ManyToOne(targetEntity="Subjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="subj_id", referencedColumnName="id")
     * })
     */
    private $subj;

    /**
     * @var \Competitions
     *
     * @ORM\ManyToOne(targetEntity="Competitions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="comp_id", referencedColumnName="id")
     * })
     */
    private $comp;



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
     * Set subj
     *
     * @param \Compete\ComBundle\Entity\Subjects $subj
     * @return SubjComp
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
     * Set comp
     *
     * @param \Compete\ComBundle\Entity\Competitions $comp
     * @return SubjComp
     */
    public function setComp(\Compete\ComBundle\Entity\Competitions $comp = null)
    {
        $this->comp = $comp;
    
        return $this;
    }

    /**
     * Get comp
     *
     * @return \Compete\ComBundle\Entity\Competitions 
     */
    public function getComp()
    {
        return $this->comp;
    }
}