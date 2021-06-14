<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Peserta;
use App\Kursus;
use App\Materi;
use Illuminate\Http\Request;
use Auth;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ins = auth::user()->instruktur->id;

        $peserta = Peserta::whereHas('kursus', function($q) use ($ins){
            $q->where('instruktur_id', $ins);
        })->get(); 

        return view('backend.nilai.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kursus $kursus)
    {
        
        $materi = Materi::where('program_id', $kursus->program->id)->get();
        //create foreach 
        foreach ($materi as $matle) {

            $nt = Nilai::where('kursus_id', $kursus->id)->where('materi_id', $matle->id)->get();
           
            if($nt->count() == null){ 
            
                $data = array(
                    'kursus_id' => $kursus->id, 
                    'materi_id' => $matle->id, 
                    'nilai'=> 0
                );

                Nilai::create($data);

            }
        }
  

        $nilai = Nilai::where('kursus_id', $kursus->id)->get();

        return view('backend.nilai.form', compact('kursus','nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nilai $nilai)
    {
        $nilai->update([$request->name => $request->value]);
    }



}
