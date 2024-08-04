<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhan = Keluhan::all();
        return view('keluhan.index', compact('keluhan'));
    }

    public function create()
    {
        return view('keluhan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|max:10',
            'customer_id' => 'required|integer',
            'id_pegawai' => 'required|integer',
        ]);

        Keluhan::create($request->all());
        return redirect()->route('keluhan.index');
    }

    public function show($id)
    {
        $keluhan = Keluhan::findOrFail($id);
        return view('keluhan.show', compact('keluhan'));
    }

    public function edit($id)
    {
        $keluhan = Keluhan::findOrFail($id);
        return view('keluhan.edit', compact('keluhan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|max:10',
            'customer_id' => 'required|integer',
            'id_pegawai' => 'required|integer',
        ]);

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->update($request->all());
        return redirect()->route('keluhan.index');
    }

    public function destroy($id)
    {
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->delete();
        return redirect()->route('keluhan.index');
    }
}
