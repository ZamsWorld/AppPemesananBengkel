@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Selamat Datang di Pemesanan Bengkel</h1>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Barang</h5>
                    <p class="card-text">Kelola dan lihat daftar barang yang tersedia.</p>
                    <a href="{{ route('barang.index') }}" class="btn btn-primary">Lihat Barang</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Supplier</h5>
                    <p class="card-text">Kelola dan lihat daftar supplier.</p>
                    <a href="{{ route('supplier.index') }}" class="btn btn-primary">Lihat Supplier</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Pelanggan</h5>
                    <p class="card-text">Kelola dan lihat daftar pelanggan.</p>
                    <a href="{{ route('customer.index') }}" class="btn btn-primary">Lihat Pelanggan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Keluhan</h5>
                    <p class="card-text">Kelola dan lihat daftar keluhan.</p>
                    <a href="{{ route('keluhan.index') }}" class="btn btn-primary">Lihat Keluhan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Pegawai</h5>
                    <p class="card-text">Kelola dan lihat daftar pegawai.</p>
                    <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Lihat Pegawai</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Kendaraan</h5>
                    <p class="card-text">Kelola dan lihat daftar kendaraan.</p>
                    <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Lihat Kendaraan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
