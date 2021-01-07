<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class PaymentSetting extends Component
{
    public $names = [
        'currencies', 'bkash', 'rocket', 'nagad', 'neteller', 'skrill', 'payeer', 'perfect_money', 'btc',
    ];

    public $currencies;
    public $bkash_number;
    public $rocket_number;
    public $nagad_number;
    public $neteller_number;
    public $skrill_number;
    public $payeer_number;
    public $perfect_money_number;
    public $btc_number;

    protected function getNames() {
        return array_map(function ($name) {
            return $name == 'currencies' ? $name : $name.'_number';
        }, $this->names);
    }

    public function toArr()
    {
        return collect($this->names)
            ->flatMap(function ($name) {
                if ($name != 'currencies' && $value = $this->{$name.'_number'}) {
                    if ($name == 'bkash') {
                        $name = 'bKash';
                    } else {
                        $name = ucwords(str_replace('_', ' ', $name));
                    }
                    return [$name => $value];
                }
            })->toArray();
    }

    public function __construct($id = null)
    {
        parent::__construct($id);

        $data = Setting::select('name', 'value')
            ->whereIn('name', $this->getNames())->get();

        collect($this->getNames())
            ->each(function ($name) use ($data) {
                $this->{$name} = $data->where('name', $name)->first()->value;
            });
    }

    public function render()
    {
        return view('livewire.admin.payment-setting');
    }

    public function submit()
    {
        $names = $this->getNames();
        $rules = collect($names)
            ->flatMap(function ($name) {
                return [$name => 'nullable|string|max:255'];
            })->toArray();

        $data = $this->validate($rules);

        foreach ($data as $name => $value) {
            $updated = Setting::where(compact('name'))->update(compact('value'));
            if ($updated) {
                Cache::put('settings.'.$name, $value);
            }
        }

        $this->emit('updated');
    }
}
