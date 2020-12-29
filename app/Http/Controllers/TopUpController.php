<?php

namespace App\Http\Controllers;

class TopUpController extends RequestController
{
    public function rules()
    {
        if ($this->isMethod('GET')) {
            return [];
        }

        return [
            'player_id' => 'required|integer',
            'currency' => 'required|string',
            'amount' => 'required|integer',
            'payment_method' => 'required|string',
            'trx_id' => 'required|string',
            'email' => 'nullable|email',
        ];
    }
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if ($this->isMethod('GET')) {
            return view('topups.index');
        }

        $data = $this->validationData();
        dd($data);
    }
}
