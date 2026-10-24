<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
</head>
<body>
    <h1>Edit Karyawan</h1>
    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nip" class"form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $karyawan->nip }}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class"form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="divisi" class"form-label">Divisi</label>
            <input type="text" class="form-control" id="divisi" name="divisi"  value="{{ $karyawan->divisi }}" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class"form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $karyawan->jabatan }}"  required>
        </div>
        <div class="mb-3">
            <label for="gaji" class"form-label">Gaji</label>
            <input type="number" class="form-control" id="gaji" name="gaji" value="{{ $karyawan->gaji }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_masuk" class"form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{ $karyawan->tanggal_masuk }}" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class"form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" value="{{ $karyawan->keterangan }}" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Karyawan</button>
    </form>
</body>
</html>
