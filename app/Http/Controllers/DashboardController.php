<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon;
use \App\Program;
use \App\Materi;
use \App\Instruktur;
use \App\Peserta;
use \App\Kursus;
use \App\Sertifikat;
use Auth;


class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   

        $cProg = Program::all()->count();
        $cMat = Materi::all()->count();
        $cIns = Instruktur::all()->count();
        $cPst = Peserta::all()->count();
        $cKs = Kursus::all()->count();
        $cSer = Sertifikat::all()->count();

        $male = Peserta::where('gender', 'L')->count();
        $female = Peserta::where('gender', 'P')->count();

       
        // $nilat = Peserta::all()->first_kursus()->whereHas('Kursus', function($q){
        //     $q->mulai()->where('nilai_teori', null)->orWhere('nilai_teori', 0)->count();
        // })->get();

        
        $tahun = Carbon::now()->year;
        $bulan = 1;

        while ($bulan <= 12) {
            
            $count = Sertifikat::whereYear('created_at', $tahun)->whereMonth('created_at', $bulan)->count();
            $barCoun[$bulan][] = $bulan;
            $barCoun[$bulan][] = $count;

            $bulan++;
        }

        $barCount = collect($barCoun)->values();


        if(auth::user()->role == 'instruktur'){
            $cPK = Kursus::where('instruktur_id', auth::user()->instruktur->id)->count();
            $cPS = Kursus::selesai()->where('instruktur_id', auth::user()->instruktur->id)->count();
        }else{
            $cPK = '';
            $cPS = '';
        }
        

    	return view('backend.index', compact(
            'cProg','cIns','cPst','cKs','cSer','cMat','male','female', 'barCount', 'cPK', 'cPS'
        ));
    }

    public function profil()
    {
    	return view('backend.profil');
    }
}
