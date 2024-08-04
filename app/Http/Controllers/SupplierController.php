<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'required|integer|exists:barang,id_barang',
        ]);

        Supplier::create($request->all());
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function show($id_supplier)
    {
        $supplier = Supplier::findOrFail($id_supplier);
        return view('supplier.show', compact('supplier'));
    }

    public function edit($id_supplier)
    {
        $supplier = Supplier::findOrFail($id_supplier);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, $id_supplier)
    {
        $request->validate([
            'nama_supplier' => 'required|string|max:150',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'id_barang' => 'required|integer|exists:barang,id_barang',
        ]);

        $supplier = Supplier::findOrFail($id_supplier);
        $supplier->update($request->all());
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diperbarui.');
    }

    public function destroy($id_supplier)
    {
        $supplier = Supplier::findOrFail($id_supplier);
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil dihapus.');
    }
}
