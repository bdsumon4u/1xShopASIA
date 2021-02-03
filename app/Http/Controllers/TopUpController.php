<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\TopUp;

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
            return view('topups.index', [
                'notices' => Notice::where('type', 'top-up')->latest('id')->get(),
            ]);
        }

        TopUp::create($this->validationData());

        return back()->with('success', 'TopUp Request Received.');
    }
}
