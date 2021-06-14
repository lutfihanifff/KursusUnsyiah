<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Route Define
        $rAdd = 'program.create';
        $rEdit = 'program.edit';
        $rDel = 'program.destroy';

        $program = Program::all();
        
        return view('backend.program.index', compact('program', 'rAdd', 'rEdit', 'rDel'));
    }

    //-------------------------------------------------------------------------------------------------------------------------
    // Form Builder
    public function form($title, $action, $method, $program)
    {  
        
        return view('backend.program.form', compact('title', 'action', 'method', 'program'));
    }
    //-------------------------------------------------------------------------------------------------------------------------


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('program.store');
        $method = 'POST';
        $program = new Program();

        return $this->form('Tambah Data Program Kursus', $action, $method, $program);
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
            'program' => 'required|string|max:65|unique:program',
            'lama' => 'required|max:2',
            'keterangan' => 'required',
        ]);   

        Program::create($data);

        return redirect()->route('program.index')->with('success', 'Data program berhasil dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $action = route('program.update', $program->id);
        $method = 'PATCH';

        return $this->form('Ubah Data Program Kursus', $action, $method, $program);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Program $program)
    {
        $data = request()->validate([
            'program' => 'required|string|max:65|unique:program,program,' . $program->id,
            'lama' => 'required|max:2',
            'keterangan' => 'required',
        ]);

        $program->update($data);  

        return redirect()->route('program.index')->with('success', 'Data program berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();

        return redirect()->back()->with('success', 'Data program berhasil dihapus');
    }
}
