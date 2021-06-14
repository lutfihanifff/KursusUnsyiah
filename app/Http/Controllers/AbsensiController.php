<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Kursus;
use App\Peserta;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $peserta = Peserta::has('kursus')->get();
 
        return view('backend.absensi.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kursus $kursus)
    {
        return view('backend.absensi.form', compact('kursus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'kursus_id' => 'required|max:10|exists:kursus,id',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|string|in:hadir,izin,tidak',
        ]);   

        $absensi = Absensi::create($data);

        return redirect()->route('absensi.show', $absensi->kursus->id)->with('success', 'Absensi berhasil dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Kursus $kursus)
    {
        return view('backend.absensi.show', compact('kursus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Absensi $absensi)
    {
        return view('backend.absensi.edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Absensi $absensi)
    {
        $data = request()->validate([
            'kursus_id' => 'required|max:10|exists:kursus,id',
            'tanggal_masuk' => 'required|date',
            'status' => 'required|string|in:hadir,izin,tidak',
        ]);

        $absensi->update($data);

        return redirect()->route('absensi.show', $absensi->kursus->id)->with('success', 'Absensi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect()->back()->with('success', 'Absensi berhasil dihapus');
    }
}
