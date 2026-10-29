@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
</head>
<body>
    <h1>Tambah Karyawan</h1>
    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') }}" required>
            @error('nip')
                <div class="text" style="color: red;">
                    {{ $message }}
                </div>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
             @error('nama')
                <div class="text" style="color: red;">
                    {{ $message }}
                </div>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <input type="text" class="form-control" id="divisi" name="divisi" value="{{ old('divisi') }}" required>
             @error('divisi')
                <div class="text" style="color: red;">
                    {{ $message }}
                </div>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}" required>
             @error('jabatan')
                <div class="text" style="color: red;">
                    {{ $message }}
                </div>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="gaji" class="form-label">Gajih</label>
            <input type="number" class="form-control" id="gaji" name="gaji" value="{{ old('gaji') }}" required>
             @error('gaji')
                <div class="text" style="color: red;">
                    {{ $message }}
                </div>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" required>
             @error('tanggal_masuk')
                <div class="text" style="color: red;">
                    {{ $message }}
                </div>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" value="{{ old('keterangan') }}"></textarea>
             @error('keterangan')
                <div class="text" style="color: red;">
                    {{ $message }}
                </div>
                
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Karyawan</button>
    </form>
</body>
</html>
@endsection
