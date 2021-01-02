<?php

namespace App\States;

abstract class Status
{
    public $name;

    public function color($more = '') {
        return implode(' ', ['w-24 flex align-center justify-center mx-auto text-white p-2 rounded leading-none', $more]);
    }

    public function __toString()
    {
        return ucfirst($this->name);
    }
}
