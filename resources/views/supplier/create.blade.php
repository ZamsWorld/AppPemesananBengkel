@extends('layouts.app')

@section('title', 'Tambah Supplier')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Tambah Supplier</h1>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('supplier.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_supplier" class="form-label">Nama Supplier:</label>
                    <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ old('nama_supplier') }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP:</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
                </div>
                <div class="mb-3">
                    <label for="id_barang" class="form-label">ID Barang:</label>
                    <input type="number" class="form-control" id="id_barang" name="id_barang" value="{{ old('id_barang') }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Supplier</button>
            </form>
        </div>
    </div>
</div>
@endsection
