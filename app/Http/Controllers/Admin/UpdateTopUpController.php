<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\RequestController;
use App\Models\TopUp;

class UpdateTopUpController extends RequestController
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
    public function __invoke(TopUp $topup)
    {
        if ($this->isMethod('GET')) {
            return view('action', [
                'type' => 'topups',
                'route' => 'admin.topups.edit',
                'model' => $topup,
            ]);
        }

        $data = $this->validationData();
        if ($topup->update($data))
            session()->flash('success', 'Status Updated.');
        else
            session()->flash('error', 'An Error Occurred.');
        return redirect($this->referer ?? '/dashboard');
    }
}
