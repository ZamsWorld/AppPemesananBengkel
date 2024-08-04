@extends('layouts.app')

@section('title', 'Edit Kendaraan')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Edit Kendaraan</h1>
    <div class="card">
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
            <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="no_pol" class="form-label">No Polisi:</label>
                    <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ old('no_pol', $kendaraan->no_pol) }}" required>
                </div>
                <div class="mb-3">
                    <label for="no_mesin" class="form-label">No Mesin:</label>
                    <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ old('no_mesin', $kendaraan->no_mesin) }}" required>
                </div>
                <div class="mb-3">
                    <label for="merek" class="form-label">Merek:</label>
                    <select class="form-control" id="merek" name="merek" required>
                        <option value="">Pilih Merek</option>
                        <option value="honda" {{ old('merek', $kendaraan->merek) == 'honda' ? 'selected' : '' }}>Honda</option>
                        <option value="yamaha" {{ old('merek', $kendaraan->merek) == 'yamaha' ? 'selected' : '' }}>Yamaha</option>
                        <option value="suzuki" {{ old('merek', $kendaraan->merek) == 'suzuki' ? 'selected' : '' }}>Suzuki</option>
                        <option value="kawasaki" {{ old('merek', $kendaraan->merek) == 'kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                        <option value="lain" {{ old('merek', $kendaraan->merek) == 'lain' ? 'selected' : '' }}>Lain</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="warna" class="form-label">Warna:</label>
                    <select class="form-control" id="warna" name="warna" required>
                        <option value="">Pilih Warna</option>
                        <option value="putih" {{ old('warna', $kendaraan->warna) == 'putih' ? 'selected' : '' }}>Putih</option>
                        <option value="hitam" {{ old('warna', $kendaraan->warna) == 'hitam' ? 'selected' : '' }}>Hitam</option>
                        <option value="hijau" {{ old('warna', $kendaraan->warna) == 'hijau' ? 'selected' : '' }}>Hijau</option>
                        <option value="biru" {{ old('warna', $kendaraan->warna) == 'biru' ? 'selected' : '' }}>Biru</option>
                        <option value="merah" {{ old('warna', $kendaraan->warna) == 'merah' ? 'selected' : '' }}>Merah</option>
                        <option value="lain" {{ old('warna', $kendaraan->warna) == 'lain' ? 'selected' : '' }}>Lain</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>
@endsection
