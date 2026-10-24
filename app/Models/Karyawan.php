<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    /** @use HasFactory<\Database\Factories\KaryawanFactory> */
    use HasFactory;
    public $table = 'karyawans';
    public $fillable  = [
        'nip',
        'nama',
        'jabatan',
        'divisi',
        'gaji',
        'tanggal_masuk',
        'keterangan'
    ];
    protected $casts = [
        'gaji' => 'integer',
        'tanggal_masuk' => 'date'
    ];
}
