{{-- resources/views/barangs/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="display-6 font-weight-bold">Detail Barang</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text"><strong>ID Barang:</strong> {{ $barang->id_barang }}</p>
                    <p class="card-text"><strong>Merek:</strong> {{ $barang->merek }}</p>
                    <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($barang->harga, 0, ',', '.') }}</p>
                    <p class="card-text"><strong>Stok:</strong> {{ $barang->stok }}</p>
                    <p class="card-text"><strong>Satuan:</strong> {{ $barang->satuan }}</p>

                    <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
