<?php

namespace App\States\Status;

use App\States\Status;

class Completed extends Status
{
    public $name = 'completed';

    public function color($more = '')
    {
        return implode(' ', [parent::color('bg-green-500'), $more]);
    }
}
