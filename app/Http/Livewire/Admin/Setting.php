<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Setting extends Component
{
    public $tabs = ['general', 'payment', 'social', 'others'];

    /**
     * @var mixed|string|null
     */
    public $tab;

    public function mount(string $tab = null)
    {
        $this->tab = $tab ?? data_get($this->tabs, 0);
    }

    public function render()
    {
        return view('livewire.admin.setting');
    }
}
