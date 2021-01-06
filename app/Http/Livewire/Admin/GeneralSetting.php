<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class GeneralSetting extends Component
{
    use WithFileUploads;

    public $names = [
        'company_name', 'company_email', 'logo_path', 'tagline',
    ];

    public $company_name;
    public $company_email;
    public $logo_path;
    public $logo;
    public $tagline;

    public function mount()
    {
        $data = Setting::select('name', 'value')
            ->whereIn('name', $this->names)->get();

        collect($this->names)
            ->each(function ($name) use ($data) {
                $this->{$name} = optional($data->where('name', $name)->first())->value;
            });
    }

    public function render()
    {
        return view('livewire.admin.general-setting');
    }

    public function submit()
    {
        $data = $this->validate([
            'company_name' => 'required|string',
            'company_email' => 'required|email',
            'logo' => 'nullable|image',
            'tagline' => 'nullable|string|max:255',
        ]);

        $this->logo && $data += [
            'logo_path' => $this->logo->store('logo', 'public'),
        ];

        foreach ($data as $name => $value) {
            Setting::where(compact('name'))->update(compact('value'));
        }

        $this->emit('updated');
    }
}
