@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detai Karyawan</title>
</head>
<body>
    <h1>Detail karyawan</h1>
    <div class="container d-flexx mt-4 border border-2 shadown-sm rounded" style="width: 100vw; height: 50vh; border-radius: 10px;">
        <div class="content fs-3" style="width: 100vw; height: 200px;  box-shadown: 10px 5px 5px grey">
            @foreach ($karyawans as $karyawan )
            <p><strong>NIP :</strong>{{$karyawan->nip}}</p>
            <p><strong>Nama :</strong>{{$karyawan->nama}}</p>
            <p><strong>Divisi :</strong>{{$karyawan->divisi}}</p>
            <p><strong>Jabatan :</strong>{{$karyawan->jabatan}}</p>
            <p><strong>Gaji : RP.</strong>{{number_format($karyawan->gaji,0, ',', '.')}}</p>
            <p><strong>Tanggal Masuk :</strong>{{$karyawan->tanggal_masuk}}</p>
            <p><strong>Keterangan :</strong>{{$karyawan->keterangan}}</p>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection

