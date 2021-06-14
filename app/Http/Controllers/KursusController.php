<?php

namespace App\Http\Controllers;

use App\Kursus;
use App\Peserta;
use App\Instruktur;
use App\Program;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::all();

        return view('backend.kursus.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Peserta $peserta)
    {
        $instruktur = Instruktur::all();
        $program = Program::all();

        return view('backend.kursus.form', compact('peserta','instruktur','program'));
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
            'peserta_id' => 'required|max:10|exists:peserta,id',
            'program_id' => 'required|max:10|exists:program,id',
            'instruktur_id' => 'required|max:10|exists:instruktur,id',
        ]);   

        Kursus::create($data);

        return redirect()->route('peserta.show', $data['peserta_id'])->with('success', 'Kursus berhasil dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function show(Kursus $kursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function edit(Kursus $kursus)
    {
        $instruktur = Instruktur::all();
        $program = Program::all();
        return view('backend.kursus.edit', compact('kursus','instruktur','program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function update(Kursus $kursus)
    {
        $data = request()->validate([
            'peserta_id' => 'required|max:10|exists:peserta,id',
            'program_id' => 'required|max:10|exists:program,id',
            'instruktur_id' => 'required|max:10|exists:instruktur,id',
        ]);

        $kursus->update($data);

        return redirect()->route('peserta.show', $data['peserta_id'])->with('success', 'Kursus berhasil dimasukan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kursus  $kursus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kursus $kursus)
    {
        $kursus->delete();

        return redirect()->back()->with('success', 'Kursus berhasil dihapus');
    }
}
