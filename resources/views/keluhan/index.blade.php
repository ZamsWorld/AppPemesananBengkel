{{-- resources/views/keluhans/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Keluhan')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Daftar Keluhan</h1>
    <a href="{{ route('keluhan.create') }}" class="btn btn-primary mb-4">Tambah Keluhan</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Keluhan</th>
                    <th>Nama Keluhan</th>
                    <th>Ongkos</th>
                    <th>No. Polisi</th>
                    <th>ID Pelanggan</th>
                    <th>ID Pegawai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluhan as $keluhan)
                <tr>
                    <td>{{ $keluhan->id_keluhan }}</td>
                    <td>{{ $keluhan->nama_keluhan }}</td>
                    <td>Rp {{ number_format($keluhan->ongkos, 0, ',', '.') }}</td>
                    <td>{{ $keluhan->no_pol }}</td>
                    <td>{{ $keluhan->customer_id }}</td>
                    <td>{{ $keluhan->id_pegawai }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('keluhan.edit', $keluhan->id_keluhan) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <a href="{{ route('keluhan.show', $keluhan->id_keluhan) }}" class="btn btn-info btn-sm mr-2">Show</a>
                            <form action="{{ route('keluhan.destroy', $keluhan->id_keluhan) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus keluhan ini?');">
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
