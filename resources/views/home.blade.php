@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <div class="container mt-4">
        <div class="row g-3">
            <div class="col-12 p-4">
                <div class="p-4 rounded border border-2 text-center fw-bold shadow-sm " style="height: 100px;">
                    Selamat Datang Di Manajemen Karyawan
                </div>
            </div>
            <div class="col-md-4 col-12 p-4 rounded border border-2 text-center shadow-sm">
                <div class="header fw-bold">Jumlah Karyawan</div>
                <p class="text-mute">{{\App\Models\Karyawan::count()}} Orang</p>
            </div>
            <div class="col-md-4 col-12 p-4 rounded border border-2 text-center shadow-sm">
                <div class="header fw-bold">Rata Rata Gaji</div>
                <p class="text-mute">RP.{{number_format(\App\Models\Karyawan::average('gaji'),0, ',', '.')}} / Orang</p>
            </div>
            <div class="col-md-4 col-12 p-4 rounded border border-2 text-center shadow-sm">
                <div class="header fw-bold">Jumlah Divisi</div>
                <p class="text-mute">{{\App\Models\Karyawan::distinct('divisi')->count()}} Divisi</p>
            </div>
            <div class="col-12 p-4">
                <div class="p-4 rounded border border-2 text-center fw-bold shadow-sm " style="height: 120px;">
                   <p> Mari Mulai Mengelola Data Karyawan</P>
                    <a class="btn btn-primary" href="/karyawan">Kelola Data</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection