<?php

namespace Ejercicios1\Classes;

abstract class AbstractBank 
{

    private $name;

    private $bank_code;

    public function __construct(string $name, string $bank_code)
    {
        $this->setName($name);

        $this->setBank_code($bank_code);
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of bank_code
     */ 
    public function getBank_code()
    {
        return $this->bank_code;
    }

    /**
     * Set the value of bank_code
     *
     * @return  self
     */ 
    public function setBank_code($bank_code)
    {
        $this->bank_code = $bank_code;

        return $this;
    }
}