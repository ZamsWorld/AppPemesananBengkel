{{-- resources/views/keluhans/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail Keluhan')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="display-6 font-weight-bold">Detail Keluhan</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $keluhan->nama_keluhan }}</h5>
                    <p class="card-text"><strong>ID Keluhan:</strong> {{ $keluhan->id_keluhan }}</p>
                    <p class="card-text"><strong>Ongkos:</strong> Rp {{ number_format($keluhan->ongkos, 0, ',', '.') }}</p>
                    <p class="card-text"><strong>No. Polisi:</strong> {{ $keluhan->no_pol }}</p>
                    <p class="card-text"><strong>ID Customer:</strong> {{ $keluhan->customer_id }}</p>
                    <p class="card-text"><strong>ID Pegawai:</strong> {{ $keluhan->id_pegawai }}</p>

                    <a href="{{ route('keluhan.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
