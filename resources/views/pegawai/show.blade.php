{{-- resources/views/pegawais/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail Pegawai')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="display-6 font-weight-bold">Detail Pegawai</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $pegawai->nama_pegawai }}</h5>
                    <p class="card-text"><strong>ID Pegawai:</strong> {{ $pegawai->id_pegawai }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $pegawai->alamat }}</p>
                    <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $pegawai->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                    <p class="card-text"><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
                    <p class="card-text"><strong>Status:</strong> {{ $pegawai->status }}</p>

                    <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
