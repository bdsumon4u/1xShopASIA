<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopUp extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'player_id',
        'currency',
        'amount',
        'payment_method',
        'trx_id',
        'email',
        'status',
    ];

    public function setPaymentMethodAttribute($paymentMethod)
    {
        $this->attributes['payment_method'] = json_encode([
            'name' => $paymentMethod,
            'number' => '01xxxxxxxxx',
        ]);
    }

    public function getPaymentMethodAttribute($paymentMethod)
    {
        return data_get(json_decode($paymentMethod, true), 'name');
    }
}
