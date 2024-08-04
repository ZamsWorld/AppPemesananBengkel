{{-- resources/views/customers/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Pelanggan')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Daftar Pelanggan</h1>
    <a href="{{ route('customer.create') }}" class="btn btn-primary mb-4">Tambah Pelanggan</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->customer_id }}</td>
                    <td>{{ $customer->nama_customer }}</td>
                    <td>{{ $customer->alamat }}</td>
                    <td>{{ $customer->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('customer.edit', $customer->customer_id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <a href="{{ route('customer.show', $customer->customer_id) }}" class="btn btn-info btn-sm mr-2">Show</a>
                            <form action="{{ route('customer.destroy', $customer->customer_id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
