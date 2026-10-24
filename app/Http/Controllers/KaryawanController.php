<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::paginate(5);
        return view('karyawan.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("karyawan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:karyawans,nip',
            'nama'=> 'required',
            'divisi' => 'required',
            'gaji' => 'required|numeric',
            'tanggal_masuk'=> 'required|date',
            'keterangan'=> 'required|nullable'
        ]);
        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('Succes', 'Karyawan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        $karyawans = Karyawan::where('id', $karyawan->id)->get();
        return view('karyawan.detail', compact('karyawans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        return view("karyawan.edit", compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $request->validate([
            'nip' => 'required|unique:karyawans,nip,' . $karyawan->id,
            'nama'=> 'required',
            'divisi' => 'required',
            'gaji' => 'required|numeric',
            'tanggal_masuk'=> 'required|date',
            'keterangan'=> 'required|nullable'
        ]);
        $karyawan->update($request->all());
        return redirect()->route('karyawan.index')->with('Succes', 'Karyawan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('Succes', 'Karyawan berhasil dihapus');
    }
}
