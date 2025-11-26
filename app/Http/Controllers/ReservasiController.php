<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'no_hp' => 'required|string',
            'tanggal' => 'required|date',
            'waktu' => 'required',
            'jumlah' => 'required|integer|min:1',
            'area' => 'required|string',
        ]);

        Reservasi::create([
            'nama'    => $request->nama,
            'no_hp'   => $request->no_hp,
            'tanggal' => $request->tanggal,
            'waktu'   => $request->waktu,
            'jumlah'  => $request->jumlah,
            'area'    => $request->area,
        ]);

        return redirect()->route('menu.index')
                         ->with('success', 'Reservasi berhasil! Silakan pilih menu.');
    }


}
