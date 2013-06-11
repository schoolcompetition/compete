<?php

namespace Proxies\__CG__\Compete\ComBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Answers extends \Compete\ComBundle\Entity\Answers implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setChoice($choice)
    {
        $this->__load();
        return parent::setChoice($choice);
    }

    public function getChoice()
    {
        $this->__load();
        return parent::getChoice();
    }

    public function setQ(\Compete\ComBundle\Entity\TournamentQuestions $q = NULL)
    {
        $this->__load();
        return parent::setQ($q);
    }

    public function getQ()
    {
        $this->__load();
        return parent::getQ();
    }

    public function setApprovedright($approvedright)
    {
        $this->__load();
        return parent::setApprovedright($approvedright);
    }

    public function getApprovedright()
    {
        $this->__load();
        return parent::getApprovedright();
    }

    public function getRightanswer()
    {
        $this->__load();
        return parent::getRightanswer();
    }

    public function setRightAnswer($rightanswer)
    {
        $this->__load();
        return parent::setRightAnswer($rightanswer);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setIsright($isright)
    {
        $this->__load();
        return parent::setIsright($isright);
    }

    public function getIsright()
    {
        $this->__load();
        return parent::getIsright();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'approvedright', 'isright', 'choice', 'q');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}