<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use AshAllenDesign\ShortURL\Models\ShortURL;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
class Table extends Component
{
    protected $listeners = ['postAdded' => 'render'];

    
    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = ShortURL::where('ip_address', $ip)->get();
        return view('livewire.table', compact('data'));
    }
}
