@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
</head>
<body>
    
    <h1>Data Karyawan</h1>
    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a> 
    <table border="1" cellpadding="10">
        <thead>
        <th>ID</th>
        <th>NIP</th>
        <th>nama</th>
        <th>Divisi</th>
        <th>Jabatan</th>
        <th>Gaji</th>
        <th>Tanggal Masuk</th>
        <th>Keterangan</th>
        <th>Aksi</th>
        </thead>
        <tbody>
            <tr>
            @foreach ($karyawans as $karyawan)
            <td>{{ $karyawan->id}}</td>
            <td>{{ $karyawan->nip}}</td>
            <td>{{ $karyawan->nama}}</td>
            <td>{{ $karyawan->divisi}}</td>
            <td>{{ $karyawan->jabatan}}</td>
            <td>RP.{{ number_format($karyawan->gaji,0 ,',', '.')}},</td>
            <td>{{ $karyawan->tanggal_masuk}}</td>
            <td>{{ $karyawan->keterangan}}</td>
            <td>
                <a href="{{ route('karyawan.edit', $karyawan->id) }}" class='btn btn-warning'>Edit</a>
                <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus karyawan ini ?')">Hapus</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
</body>
</html>
@endsection
