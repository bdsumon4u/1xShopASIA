<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\RequestController;
use App\Models\Withdraw;

class UpdateWithdrawController extends RequestController
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
            'email' => 'nullable|email',
        ];
    }

    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Withdraw $withdraw)
    {
        if ($this->isMethod('GET')) {
            return view('action', [
                'type' => 'withdraw',
                'route' => 'admin.withdraws.edit',
                'model' => $withdraw,
            ]);
        }

        $data = $this->validationData();
        if ($withdraw->update($data))
            session()->flash('success', 'Status Updated.');
        else
            session()->flash('error', 'An Error Occurred.');
        return redirect($this->referer ?? '/dashboard');
    }
}
