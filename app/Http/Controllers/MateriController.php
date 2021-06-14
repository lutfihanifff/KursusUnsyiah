<?php

namespace App\Http\Controllers;

use App\Materi;
use App\Program;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Route Define
        $rAdd = 'materi.create';
        $rEdit = 'materi.edit';
        $rDel = 'materi.destroy';

        $materi = Materi::all();
        
        return view('backend.materi.index', compact('materi', 'rAdd', 'rEdit', 'rDel'));
    }

    //-------------------------------------------------------------------------------------------------------------------------
    // Form Builder
    public function form($title, $action, $method, $materi)
    {  
        $program = Program::all();
        return view('backend.materi.form', compact('title', 'action', 'method', 'materi', 'program'));
    }
    //-------------------------------------------------------------------------------------------------------------------------


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('materi.store');
        $method = 'POST';
        $materi = new Materi();

        

        return $this->form('Tambah Data Materi Program', $action, $method, $materi);
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
            'program_id' => 'required|max:10|exists:program,id',
            'materi' => 'required|string|max:191',
        ]);   

        Materi::create($data);

        return redirect()->route('materi.index')->with('success', 'Data materi berhasil dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        $action = route('materi.update', $materi->id);
        $method = 'PATCH';

        

        return $this->form('Ubah Data Materi Program', $action, $method, $materi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Materi $materi)
    {
        $data = request()->validate([
            'program_id' => 'required|max:10|exists:program,id',
            'materi' => 'required|string|max:191',
        ]);

        $materi->update($data);  

        return redirect()->route('materi.index')->with('success', 'Data materi berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        $materi->delete();

        return redirect()->back()->with('success', 'Data materi berhasil dihapus');
    }
}
