{{-- resources/views/customers/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail Customer')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="display-6 font-weight-bold">Detail Customer</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $customer->nama_customer }}</h5>
                    <p class="card-text"><strong>ID Customer:</strong> {{ $customer->customer_id }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $customer->alamat }}</p>
                    <p class="card-text"><strong>Jenis Kelamin:</strong> {{ $customer->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>

                    <a href="{{ route('customer.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
