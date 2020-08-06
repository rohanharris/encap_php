<?php

namespace App\Counter;

class BeanCounter
{
    private $count;

    public function __construct(Counter $count)
    {
        $this->count = $count;
    }

    public function addBean() : BeanCounter
    {
        $this->count->increment();
        return $this;
    }


    public function howMany() : int
    {
        return $this->count->count();


    }



}