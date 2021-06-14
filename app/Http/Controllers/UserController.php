<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::with('instruktur')->where('role', '!=' ,'peserta')->get();

        return view('backend.user.index', compact('user'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.form');
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
            'username' => 'required|string|max:10',
            'email' => 'required|string|email|unique:users',
            'role'  => 'required|in:admin,kepala',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password|min:6'
        ]); 

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        return redirect()->route('user.index')->with('success', 'data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        if (request()->input('password') == null) {

            $data = request()->validate([
                'username' => 'required|string|max:10',
                'role'  => 'sometimes|in:admin,kepala',
                'email' => 'required|string|email|unique:users,email,'.$user->id
            ]); 

        }else{

            $data = request()->validate([
                'username' => 'required|string|max:10',
                'role'  => 'sometimes|in:admin,kepala',
                'email' => 'required|string|email|unique:users,email,'.$user->id,
                'password' => 'required|min:6',
                'repassword' => 'required|same:password|min:6'
            ]); 

            $passhash = bcrypt(request()->input('password'));

            
            $data['password'] = bcrypt($data['password']);
            

        }

        $user->update($data);
           

        return redirect()->back()->with('success', 'data user berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'data user berhasil dihapus');
    }
}
