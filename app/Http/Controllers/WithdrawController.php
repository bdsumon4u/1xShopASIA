<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\Withdraw;

class WithdrawController extends RequestController
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
            'payment_number' => 'required|string',
            'withdrawal_code' => 'required|string',
            'email' => 'nullable|email',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'status' => 'pending',
        ]);
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if ($this->isMethod('GET')) {
            return view('withdraws.index', [
                'notices' => Notice::where('type', 'withdraw')->latest('id')->get(),
            ]);
        }

        Withdraw::create($this->validationData());

        return back()->with('success', 'Withdraw Request Received.');
    }
}
