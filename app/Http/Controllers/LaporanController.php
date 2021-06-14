<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Instruktur;
use \App\Kursus;
use PDF;

class LaporanController extends Controller
{

    public function instruktur()
    {
    	return view('reports.instruktur.index');
    }

    public function peserta()
    {
    	return view('reports.peserta.index');
    }

    public function exInstruktur()
    {

    	$arrBulan = array('1' => 'Januari','2' => 'Febuari','3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus','9' => 'Sepetember','10' => 'Oktober','11' => 'November','12' => 'Desember', 'ALL' => '');

    	$tahun = request()->input('tahun');
        $bulan = request()->input('bulan');

    	$instruktur = instruktur::query();

    	if ($tahun != '') {
            // $instruktur->whereHas('kursus', function($q) use($tahun) {
            // 	$q->whereYear('created_at', $tahun);
            // });
            if ($bulan != 'ALL') {
            	$instruktur->withCount(['kursus' => function($q) use($tahun,$bulan){
	            	$q->whereYear('created_at', $tahun)->whereMonth('created_at', $bulan);
	            }]);
            }else{
	            $instruktur->withCount(['kursus' => function($q) use($tahun){
	            	$q->whereYear('created_at', $tahun);
	            }]);
        	}
        }

        $bulan = $arrBulan[$bulan];
       

        $instruktur = $instruktur->get(); 

    	$pdf = PDF::loadView('reports.instruktur.pdf', compact('instruktur','tahun','bulan'))->setPaper('a4', 'landscape');

        return $pdf->stream('instruktur_kursus.pdf');
    }


    public function exPeserta()
    {

    	$arrBulan = array('1' => 'Januari','2' => 'Febuari','3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus','9' => 'Sepetember','10' => 'Oktober','11' => 'November','12' => 'Desember', 'ALL' => '');
        
        $tahun = request()->input('tahun');
        $bulan = request()->input('bulan');;

        
        $kursus = Kursus::query();


        if ($tahun != '') {
            if ($bulan != 'ALL') {
            	$kursus->whereYear('created_at', $tahun)->whereMonth('created_at', $bulan);
            }else{
	            $kursus->whereYear('created_at', $tahun);
        	}
        }
    	
       	$bulan = $arrBulan[$bulan];

        $kursus = $kursus->selesai()->get();           
        
        $pdf = PDF::loadView('reports.peserta.pdf', compact('kursus','tahun','bulan'))->setPaper('a4', 'landscape');

        return $pdf->stream('peserta_kursus.pdf');

    }
}
