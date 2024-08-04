@extends('layouts.app')

@section('title', 'Daftar Pegawai')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Daftar Pegawai</h1>
    <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-4">Tambah Pegawai</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $pegawai)
                <tr>
                    <td>{{ $pegawai->id_pegawai }}</td>
                    <td>{{ $pegawai->nama_pegawai }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>{{ $pegawai->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                    <td>{{ $pegawai->status }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('pegawai.edit', $pegawai->id_pegawai) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <a href="{{ route('pegawai.show', $pegawai->id_pegawai) }}" class="btn btn-info btn-sm mr-2">Show</a>
                            <form action="{{ route('pegawai.destroy', $pegawai->id_pegawai) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?');">
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
