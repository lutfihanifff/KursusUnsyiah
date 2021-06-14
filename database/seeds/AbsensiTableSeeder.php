<?php

use Illuminate\Database\Seeder;
use App\Kursus;
use App\Absensi;
use Carbon\Carbon;

class AbsensiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kursus = Kursus::all();
        
        foreach ($kursus as $ks) {

            for ($i=0; $i < 10 ; $i++) { 

                $ks = Kursus::find($ks->id);

                $tgl_masuk = new Carbon($ks->created_at);

                if ($ks->absensi->count()) {
                    $tgl_masuk = new Carbon($ks->absensi->max('tanggal_masuk'));
                }

                $tgl_masuk->addDays(1);

                if ($tgl_masuk->isSunday()) {
                    $tgl_masuk->addDays(1);
                }

                Absensi::create([
                    'kursus_id' => $ks->id,
                    'tanggal_masuk' => $tgl_masuk,
                    'status' => 'hadir'
                ]);
            }
        
        }

        
    }
}
