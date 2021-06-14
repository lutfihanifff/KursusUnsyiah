<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Instruktur;

class InstrukturController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.instruktur.form');
    }

    public function edit(Instruktur $instruktur)
    {
        return view('backend.instruktur.edit', compact('instruktur'));
    }

    public function update(Instruktur $instruktur)
    {

        $dataIns = request()->validate([
            'nama' => 'required|string|max:45',
            'tempat_lahir' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string',
            'nohp' => 'required|string|max:15',
            'alamat' => 'required|string', 
        ]);

        $instruktur->update($dataIns);

        if (request()->input('password') == null) {

            $dataUser = request()->validate([
                'username' => 'required|string|max:10',
                'email' => 'required|string|email|unique:users,email,'.$instruktur->user->id
            ]); 

        }else{

            $dataUser = request()->validate([
                'username' => 'required|string|max:10',
                'email' => 'required|string|email|unique:users,email,'.$instruktur->user->id,
                'password' => 'required|min:6',
                'repassword' => 'required|same:password|min:6'
            ]); 

            $passhash = bcrypt(request()->input('password'));
            $dataUser['password'] = bcrypt($dataUser['password']);      

        }

        $user = User::find($instruktur->user->id);
        $user->update($dataUser);
           

        return redirect()->back()->with('success', 'data instruktur berhasil diperbarui');
    }

    public function store()
    {
    	$dataUser = request()->validate([

            'username' => 'required|string|max:10',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password|min:6',
        ]);

        $dataUser['role'] = 'instruktur';

        $dataIns = request()->validate([

            'nama' => 'required|string|max:45',
            'tempat_lahir' => 'required|string|max:20',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string',
            'nohp' => 'required|string|max:15',
            'alamat' => 'required|string',   

        ]);


        $dataUser['password'] = bcrypt($dataUser['password']);
        

        $user = User::create($dataUser);

        $dataIns['user_id'] = $user->id;

        $Ins = Instruktur::create($dataIns);  

        return redirect()->route('user.index')->with('success', 'data instruktur berhasil ditambahkan');
    }
}
