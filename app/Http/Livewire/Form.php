<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $url;
    public function store()
    {
        $this->validate([
            'url' => 'required'
        ]);
    }
    public function render()
    {
        return view('livewire.form');
    }
}
