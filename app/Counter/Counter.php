<?php

namespace App\Counter;

class Counter
{
    private $increment = 0;


    public function increment() : Counter
    {
       $this->increment += 1;
       return $this;
        
    }

    public function count() : int 
    {
        return $this->increment;

    }



}

