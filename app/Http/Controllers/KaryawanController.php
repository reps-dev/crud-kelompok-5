<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Karyawan::query();
        if (!empty($search)){
        $query->where(function($q) use ($search){
        $q->where('id', 'LIKE', "{$search}")->orwhere('nip', 'LIKE', "{$search}")
        ->orwhere('nama', 'LIKE', "{$search}")->orwhere('divisi', 'LIKE', "{$search}")
        ->orwhere('jabatan', 'LIKE', "{$search}")->orwhere('gaji', 'LIKE', "{$search}")
        ->orwhere('tanggal_masuk', 'LIKE', "{$search}")->orwhere('keterangan', 'LIKE', "{$search}")
        ->paginate(5)->withQueryString();
        });
        };
        $karyawans = $query->paginate(5)->withQueryString();
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
        $validated = $request->validate([
            'nip' => ['required','unique:karyawans,nip'],
            'nama'=> ['required','string'],
            'divisi' => 'required',
            'jabatan' => ['required', 'string'],
            'gaji' => ['required','numeric'],
            'tanggal_masuk'=> ['required','date'],
            'keterangan'=> 'nullable'
        ]);
        Karyawan::create($validated);
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil ditambahkan');
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
            'keterangan'=> 'nullable'
        ]);
        $karyawan->update($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Karyawan berhasil dihapus');
    }
}
