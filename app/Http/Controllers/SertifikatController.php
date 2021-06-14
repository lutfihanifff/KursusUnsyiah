<?php

namespace App\Http\Controllers;

use App\Sertifikat;
use App\Kursus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sertifikat = Sertifikat::latest()->get();
        return view('backend.sertifikat.index', compact('sertifikat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kursus = Kursus::mulai()->has('absensi')->has('nilai')->where('nilai_teori', '!=', 0)->get();

        return view('backend.sertifikat.form', compact('kursus'));
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
            'kursus_id' => 'required|max:10|exists:kursus,id|unique:sertifikat,kursus_id'
        ]);

        $kursus = Kursus::find($data['kursus_id']);

        $no = Sertifikat::whereMonth('created_at', Carbon::now()->month)->count() + 1;
        $tipe = $kursus->program->program == 'Mengemudi' ? 'K.M' : 'K.MS';

        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $bulan = $bulanRomawi[Carbon::now()->month];
        $tahun = Carbon::now()->year;
   
        $data['no_sertifikat'] = $no.'/'.$tipe.'/'.$bulan.'/'.$tahun;


        $data['nilai_akhir'] = collect([$kursus->nilai_absensi(),$kursus->nilai_teori,$kursus->nilai_praktik()])->avg();


        $sertifikat = Sertifikat::create($data);

        $kursus->update(['status' => 'selesai']);

        return redirect()->route('sertifikat.index')->with('success', 'Data sertifikat berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikat $sertifikat)
    {

        $nilek = '16203.1.0027';
        $no_ser = $sertifikat->no_sertifikat;
        $induk = $sertifikat->kursus->peserta->id;
        $nama = strtoupper($sertifikat->kursus->peserta->nama);
        $tempat_lahir = $sertifikat->kursus->peserta->tempat_lahir;
        $tanggal_lahir = Carbon::createFromFormat('Y-m-d', $sertifikat->kursus->peserta->tanggal_lahir)->isoFormat('DD MMMM YYYY');
        $ttl = $tempat_lahir.', '.$tanggal_lahir;
        $program = $sertifikat->kursus->program->program;
        $start = Carbon::createFromFormat('Y-m-d',$sertifikat->kursus->absensi->min('tanggal_masuk'))->isoFormat('DD MMMM');
        $end = Carbon::createFromFormat('Y-m-d',$sertifikat->kursus->absensi->max('tanggal_masuk'))->isoFormat('DD MMMM');
        $date = Carbon::now()->isoFormat('DD MMMM YYYY');
        $predikat = $sertifikat->predikat();

        $logo1 = public_path('img/logo1.png');
        $logo2 = public_path('img/logo2.png');

        $namePdf = 'sertifikat_'.$program.'_'.$induk.'.pdf';

        $pdf = PDF::loadView('backend.sertifikat.show', compact(
            'nilek','no_ser','induk','nama','ttl','logo1','logo2','predikat',
            'program','start','end','date','namePdf'))->setPaper('a4', 'landscape');  

        return $pdf->stream($namePdf);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {

        $sertifikat->kursus->update(['status' => 'mulai']);
        $sertifikat->delete();

        return redirect()->back()->with('success', 'Sertifikat berhasil dihapus');

    }
}
