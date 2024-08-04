<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|unique:kendaraan,no_pol|max:10',
            'no_mesin' => 'required|unique:kendaraan,no_mesin|max:15',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lain',
            'warna' => 'required|in:putih,hitam,hijau,merah,biru,lain',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan created successfully.');
    }

    public function show($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $no_pol)
    {
        $request->validate([
            'no_pol' => 'required|string|max:10',
            'no_mesin' => 'required|string|max:15',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki,lain',
            'warna' => 'required|in:putih,hitam,hijau,biru,merah,lain',
        ]);
    
        $kendaraan = Kendaraan::findOrFail($no_pol);
        $kendaraan->update($request->all());
    
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();
        return redirect()->route('kendaraan.index');
    }
}
