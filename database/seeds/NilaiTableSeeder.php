<?php

use Illuminate\Database\Seeder;
use App\Kursus;
use App\Nilai;
Use App\Materi;

class NilaiTableSeeder extends Seeder
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
            $materi = Materi::find($ks->program->id)->get();

            foreach ($materi as $mat) {
                Nilai::create([
                    'kursus_id' => $ks->id,
                    'materi_id' => $mat->id,
                    'nilai' => mt_rand(75,95)
                ]);
            }

        }

    }
}
