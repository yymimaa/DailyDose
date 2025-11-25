<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function store(Request $request)
    {
        Reservasi::create([
            'nama'    => $request->nama,
            'no_hp'   => $request->no_hp,
            'tanggal' => $request->tanggal,
            'waktu'   => $request->waktu,
            'jumlah'  => $request->jumlah,
            'area'    => $request->area,
        ]);

        return back()->with('success', 'Reservasi berhasil dibuat!');
    }
}
