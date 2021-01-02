<?php

namespace App\Casts;

use App\States\Status\Completed;
use App\States\Status\Pending;
use App\States\Status\Returned;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Status implements CastsAttributes
{
    protected $statuses = [
        'pending' => Pending::class,
        'completed' => Completed::class,
        'returned' => Returned::class,
    ];

    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes)
    {
        return resolve(data_get($this->statuses, $value, Pending::class));
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        return $value;
    }
}
