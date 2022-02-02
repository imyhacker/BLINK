<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use AshAllenDesign\ShortURL\Models\ShortURL;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class Table extends Component
{
    protected $listeners = ['postAdded' => 'render'];

    public function tes($id)
    {
        $data = ShortURL::find($id);
        QrCode::size(500)
        ->format('png')
        ->generate($data->default_short_url, public_path('images/qrcode.png'));

        return response()->download(public_path('images/qrcode.png', 'qr.png'));
    }
    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = ShortURL::where('ip_address', $ip)->get();
        return view('livewire.table', compact('data'));
    }
}
