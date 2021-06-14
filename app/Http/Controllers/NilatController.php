<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Peserta;
use App\Kursus;
use Illuminate\Http\Request;
use Auth;


class NilatController extends Controller
{
    public function index()
    {

        $ins = auth::user()->instruktur->id;

        $peserta = Peserta::whereHas('kursus', function($q) use ($ins){
            $q->where('instruktur_id', $ins);
        })->get(); 

        return view('backend.nilat.index', compact('peserta'));
    }
    public function create(Kursus $kursus)
    {
        return view('backend.nilat.form', compact('kursus'));
    }

    public function update(Kursus $kursus)
    {
    	$data = request()->validate([
            'nilai_teori' => 'required|max:3',
        ]); 

        $kursus->update($data);

        return redirect()->route('nilat.index')->with('success', 'data nilai teori berhasil disimpan');
    }
}
