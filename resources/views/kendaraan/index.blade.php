@extends('layouts.app')

@section('title', 'Daftar Kendaraan')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Daftar Kendaraan</h1>
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary mb-4">Tambah Kendaraan</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No Polisi</th>
                    <th>No Mesin</th>
                    <th>Merk</th>
                    <th>Warna</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kendaraan as $kendaraan)
                <tr>
                    <td>{{ $kendaraan->no_pol }}</td>
                    <td>{{ $kendaraan->no_mesin }}</td>
                    <td>{{ ucfirst($kendaraan->merk) }}</td>
                    <td>{{ ucfirst($kendaraan->warna) }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('kendaraan.edit', $kendaraan->no_pol) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <a href="{{ route('kendaraan.show', $kendaraan->no_pol) }}" class="btn btn-info btn-sm mr-2">Show</a>
                            <form action="{{ route('kendaraan.destroy', $kendaraan->no_pol) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?');">
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
