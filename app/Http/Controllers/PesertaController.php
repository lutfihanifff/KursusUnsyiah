<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Peserta;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PesertaController extends Controller
{
    public function index()
    {
    	$peserta = Peserta::all();
    	return view('backend.peserta.index', compact('peserta'));
    }

    public function create()
    {
        $peserta = Peserta::all();

        $bulan = Carbon::now()->month;
        $tahun = date('y');

        $no_induk = substr($peserta->max('id'), 0, 4)+1;
        $no_induk = $no_induk.$bulan.$tahun;

    	return view('backend.peserta.form', compact('no_induk'));
    }

    public function store()
    {

    	$dataPeserta = request()->validate([
    		'id' => 'required|string|size:8|unique:peserta',
            'nama' => 'required|string|max:45',
            'tempat_lahir' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string',
            'nohp' => 'required|string|max:15',
            'alamat' => 'required|string', 
        ]);

        $dataUser = request()->validate([
            'email' => 'required|string|email|unique:users',
        ]);

        $dataUser['username'] = str_replace(' ', '', $dataPeserta['nama']);
        $dataUser['password'] = bcrypt($dataPeserta['id']);

        $user = User::create($dataUser);

        $dataPeserta['user_id'] = $user->id;

        $peserta = Peserta::create($dataPeserta); 


        //return redirect()->route('peserta.index')->with('success', 'data peserta kursus berhasil ditambahkan');
        return redirect()->route('kursus.create', $peserta->id);


    }

    public function edit(Peserta $peserta)
    {
    	return view('backend.peserta.edit', compact('peserta'));
    }

    public function update(Peserta $peserta)
    {
    	$dataPeserta = request()->validate([
            'nama' => 'required|string|max:45',
            'tempat_lahir' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string',
            'nohp' => 'required|string|max:15',
            'alamat' => 'required|string', 
        ]);
        $peserta->update($dataPeserta);

    	$dataUser = request()->validate([
            'email' => 'required|string|email|unique:users,email,'.$peserta->user->id,
        ]);
        $user = User::find($peserta->user->id);
        $user->update($dataUser);

        return redirect()->route('peserta.index')->with('success', 'data peserta kursus berhasil diubah');


    }

    public function destroy(Peserta $peserta)
    {
    	
    	User::destroy($peserta->user->id);

    	return redirect()->back()->with('success', 'data peserta kursus berhasil dihapus');

    }

    public function show(Peserta $peserta)
    {   
        return view('backend.peserta.show', compact('peserta'));
    }
}
