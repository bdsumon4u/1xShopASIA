<?php

namespace App\States\Status;

use App\States\Status;

class Returned extends Status
{
    public $name = 'returned';

    public function color($more = '')
    {
        return implode(' ', [parent::color('bg-red-500'), $more]);
    }
}
