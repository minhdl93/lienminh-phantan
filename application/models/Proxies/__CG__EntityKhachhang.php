<?php

namespace DoctrineProxies\__CG__\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Khachhang extends \Entity\Khachhang implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getMakh()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["makh"];
        }
        $this->__load();
        return parent::getMakh();
    }

    public function setMakh($makh)
    {
        $this->__load();
        return parent::setMakh($makh);
    }

    public function getTenkh()
    {
        $this->__load();
        return parent::getTenkh();
    }

    public function setTenkh($tenkh)
    {
        $this->__load();
        return parent::setTenkh($tenkh);
    }

    public function getDiachi()
    {
        $this->__load();
        return parent::getDiachi();
    }

    public function setDiachi($diachi)
    {
        $this->__load();
        return parent::setDiachi($diachi);
    }

    public function getDienthoai()
    {
        $this->__load();
        return parent::getDienthoai();
    }

    public function setDienthoai($dienthoai)
    {
        $this->__load();
        return parent::setDienthoai($dienthoai);
    }

    public function getCmnd()
    {
        $this->__load();
        return parent::getCmnd();
    }

    public function setCmnd($cmnd)
    {
        $this->__load();
        return parent::setCmnd($cmnd);
    }

    public function getTongtien()
    {
        $this->__load();
        return parent::getTongtien();
    }

    public function setTongtien($tongtien)
    {
        $this->__load();
        return parent::setTongtien($tongtien);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'makh', 'tenkh', 'diachi', 'dienthoai', 'cmnd', 'tongtien');
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