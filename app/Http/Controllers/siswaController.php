<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('indexSiswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi manual
    $validatedData = $request->validate([
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'jenis_kelamin' => 'required|string',
        'usia' => 'required|numeric',
    ]);

    Siswa::create([
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName'),
        'jenis_kelamin' => $request->input('jenis_kelamin'),
        'usia' => $request->input('usia'),
    ]);

    return redirect('/');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $siswa = Siswa::find($id);
    if (!$siswa) {
        return redirect('/')->withErrors(['error' => 'Data siswa tidak ditemukan.']);
    }
    return view('editSiswa', ['siswa' => $siswa]);
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'firstName' => 'required|string',
        'lastName' => 'required|string',
        'jenis_kelamin' => 'required|string',
        'usia' => 'required|numeric',
    ]);

    $siswa = Siswa::find($id);
    if (!$siswa) {
        return redirect('/')->withErrors(['error' => 'Data siswa tidak ditemukan.']);
    }

    $siswa->update([
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName'),
        'jenis_kelamin' => $request->input('jenis_kelamin'),
        'usia' => $request->input('usia'),
    ]);

    return redirect('/')->with('success', 'Data siswa berhasil diperbarui.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $siswa = Siswa::find($id);

    if (!$siswa) {
        return redirect('/')->withErrors(['error' => 'Data siswa tidak ditemukan.']);
    }

    $siswa->delete();
    return redirect('/')->with('success', 'Data siswa berhasil dihapus.');
}
}