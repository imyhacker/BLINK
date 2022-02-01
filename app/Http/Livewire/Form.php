<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $url;
    
    public function store()
    {
        $this->validate([
            'url' => 'required|url'
        ]);
        $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

        $shortURLObject = $builder->destinationUrl($this->url)->trackVisits()->trackIPAddress()->make();
        $this->emit('postAdded'); 

    }
    public function render()
    {
        return view('livewire.form');
    }
}
