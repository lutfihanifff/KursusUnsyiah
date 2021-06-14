<?php

use Illuminate\Database\Seeder;
use App\Kursus;
use App\Sertifikat;
use Carbon\Carbon;

class SertifikatTableSeeder extends Seeder
{
    /**
     * Run the database seeds. ngurus sertifikat berapa hari?
     *
     * @return void
     */
    public function run()
    {
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $kursus = Kursus::all();

        foreach ($kursus as $ks ) {

            $tgl = Carbon::parse($ks->absensi->max('tanggal_masuk'))->addDays(5);

            $no = Sertifikat::whereMonth('created_at', $tgl->month)->count() + 1;
            
            $tipe = $ks->program->program == 'Mengemudi' ? 'K.M' : 'K.MS';
            
            $bulan = $bulanRomawi[$tgl->month];
            $tahun = Carbon::now()->year;
    
            $no_sertifikat = $no.'/'.$tipe.'/'.$bulan.'/'.$tahun;

            $nilai_akhir = collect([$ks->nilai_absensi(),$ks->nilai_teori,$ks->nilai_praktik()])->avg();

            Sertifikat::create([
                'no_sertifikat' => $no_sertifikat,
                'kursus_id' => $ks->id,
                'nilai_akhir' => $nilai_akhir,
                'created_at' => $tgl,
            ]);
    
        }
        
    }
}
