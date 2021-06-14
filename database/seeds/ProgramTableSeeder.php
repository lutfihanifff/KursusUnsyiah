<?php

use Illuminate\Database\Seeder;
use App\Program;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $program = [
        	[
            	'program' => 'Microsoft Word',
                'lama' => 10,
            	'keterangan' => 'Program Kursus yang ditujukan untuk mahir dalam penggunaan perangkat lunak Microsoft Word.',
        	],[
            	'program' => 'Microsoft Excel',
                'lama' => 10,
            	'keterangan' => 'Program Kursus yang ditujukan untuk mahir dalam penggunaan perangkat lunak Microsoft Excel.',
        	],[
            	'program' => 'Microsoft Powerpoint',
                'lama' => 10,
            	'keterangan' => 'Program Kursus yang ditujukan untuk mahir dalam penggunaan perangkat lunak Microsoft Powerpoint.',
        	],[
            	'program' => 'Mengemudi Mobil',
                'lama' => 10,
            	'keterangan' => 'Program Kursus yang ditujukan untuk mahir dalam Mengemudi Mobil.',
            ],[
            	'program' => 'Desain Grafis',
                'lama' => 10,
            	'keterangan' => 'Program Kursus yang ditujukan untuk mahir dalam Desain Grafis.',
        	]
        ];

        DB::table('program')->insert($program);
    }
}
