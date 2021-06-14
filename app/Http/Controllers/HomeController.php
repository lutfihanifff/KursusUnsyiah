<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sertifikat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function profil()
    {
        return view('frontend.profil');
    }

    public function kursus()
    {
        return view('frontend.kursus');
    }

    public function sertifikat(Sertifikat $sertifikat)
    {
        return view('frontend.sertifikat', compact('sertifikat'));
    }
}
