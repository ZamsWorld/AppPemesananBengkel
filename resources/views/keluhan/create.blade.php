{{-- resources/views/keluhans/create.blade.php --}}
@extends('layouts.app')

@section('title', 'Tambah Keluhan Baru')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="display-8 font-weight-bold">Tambah Keluhan Baru</h3></div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('keluhan.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_keluhan" class="form-label">Nama Keluhan:</label>
                            <input type="text" class="form-control" id="nama_keluhan" name="nama_keluhan" value="{{ old('nama_keluhan') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="ongkos" class="form-label">Ongkos:</label>
                            <input type="number" class="form-control" id="ongkos" name="ongkos" value="{{ old('ongkos') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_pol" class="form-label">No. Polisi:</label>
                            <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ old('no_pol') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="customer_id" class="form-label">ID Pelanggan:</label>
                            <input type="number" class="form-control" id="customer_id" name="customer_id" value="{{ old('customer_id') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_pegawai" class="form-label">ID Pegawai:</label>
                            <input type="number" class="form-control" id="id_pegawai" name="id_pegawai" value="{{ old('id_pegawai') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Keluhan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
