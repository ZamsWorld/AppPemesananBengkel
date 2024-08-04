{{-- resources/views/pegawais/edit.blade.php --}}
@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="display-8 font-weight-bold">Edit Pegawai</h3></div>

                <div class="card-body">
                    <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_pegawai" class="form-label">Nama Pegawai:</label>
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="L" {{ $pegawai->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ $pegawai->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan:</label>
                            <select class="form-control" id="jabatan" name="jabatan" required>
                                <option value="teknisi" {{ $pegawai->jabatan == 'teknisi' ? 'selected' : '' }}>Teknisi</option>
                                <option value="admin" {{ $pegawai->jabatan == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="spv" {{ $pegawai->jabatan == 'spv' ? 'selected' : '' }}>Supervisor</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="aktif" {{ $pegawai->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="tidak_aktif" {{ $pegawai->status == 'tidak_aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Pegawai</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection