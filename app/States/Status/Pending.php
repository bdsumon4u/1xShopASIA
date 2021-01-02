<?php

namespace App\States\Status;

use App\States\Status;

class Pending extends Status
{
    public $name = 'pending';

    public function color($more = '')
    {
        return implode(' ', [parent::color('bg-blue-500'), $more]);
    }
}
