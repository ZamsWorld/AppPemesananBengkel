@extends('layouts.app')

@section('title', 'Detail Kendaraan')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Detail Kendaraan</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="display-6 font-weight-bold">Detail Kendaraan</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $kendaraan->no_pol }}</h5>
            <p class="card-text"><strong>No Mesin:</strong> {{ $kendaraan->no_mesin }}</p>
            <p class="card-text"><strong>Merk:</strong> {{ ucfirst($kendaraan->merk) }}</p>
            <p class="card-text"><strong>Warna:</strong> {{ ucfirst($kendaraan->warna) }}</p>
            <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
