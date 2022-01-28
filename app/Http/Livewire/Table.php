<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use AshAllenDesign\ShortURL\Models\ShortURL;

class Table extends Component
{
    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = ShortURL::where('ip_address', $ip)->get();
        return view('livewire.table', compact('data'));
    }
}
