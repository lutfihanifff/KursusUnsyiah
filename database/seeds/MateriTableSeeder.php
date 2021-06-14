<?php

use Illuminate\Database\Seeder;
use App\Materi;

class MateriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $word = [
        	[
            	'program_id' => 1,
            	'materi' => 'Tenik Mengetik (Kecepatan dan Kerapian Mengetik).',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Tab Menu, Page Layout, Margin.',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Save & Open Data, Folder (Perbedaan tiap fungsi).',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Format Text (Warna huruf, effect, aligment).',
        	],[
            	'program_id' => 1,
            	'materi' => 'Tabulasi dan Indent, membuat daftar isi dan surat tugas.',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Symbol Bullet and Numbering.',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Word Art dan Auto Shapes.',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Clip Art dan Picture.',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Column dan Drop Cap.',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Table, membuat, menambah dan menghapus tabel dan lainnya.',
        	],[
            	'program_id' => 1,
            	'materi' => 'Penggunaan Mail Merge / Amplop / Mencetak Dokumen',
        	]	
        ];

        DB::table('materi')->insert($word);



        $excel = [
        	[
            	'program_id' => 2,
            	'materi' => 'Dasar-dasar Microsoft Office Excel (Title Bar, Office Button, Menu Bar)',
        	],[
            	'program_id' => 2,
            	'materi' => 'Penggunaan Page Layout.',
        	],[
            	'program_id' => 2,
            	'materi' => 'New, Save, dan Open buku kerja (Workbook).',
        	],[
            	'program_id' => 2,
            	'materi' => 'Aritmatika perhitungan manual (penjumlahan, perkalian, pembagian, perpangkatan, akar).',
        	],[
            	'program_id' => 2,
            	'materi' => 'Membuat Border.',
        	],[
            	'program_id' => 2,
            	'materi' => 'Mengatur Text dalam border.',
        	],[
            	'program_id' => 2,
            	'materi' => 'Penggunaan Data Validation.',
        	],[
            	'program_id' => 2,
            	'materi' => 'Penggunaan Conditional Formating.',
        	],[
            	'program_id' => 2,
            	'materi' => 'Membuat Chart dan Grafik dari data.',
        	],[
            	'program_id' => 2,
            	'materi' => 'Penggunaan fungsi logika.',
        	],[
            	'program_id' => 2,
            	'materi' => 'Penggunaan fungsi Lookup.',
        	],[
            	'program_id' => 2,
            	'materi' => 'Editing Data (Sort, Filter, Find data dan lainnya).',
        	],[
            	'program_id' => 2,
            	'materi' => 'Mencetak Dokumen (Print).',
        	]
        ];

        DB::table('materi')->insert($excel);




        $point = [
        	[
            	'program_id' => 3,
            	'materi' => 'Dasar-dasar Microsoft Powerpoint (Title Bar, Office Button, Menu Bar)',
        	],[
            	'program_id' => 3,
            	'materi' => 'New, Save, dan Open file.',
        	],[
            	'program_id' => 3,
            	'materi' => 'Membuat dan menghapus animasi text.',
        	],[
            	'program_id' => 3,
            	'materi' => 'Menambah Word Art dan Clip Art.',
        	],[
            	'program_id' => 3,
            	'materi' => 'Menambah Smart Art.',
        	],[
            	'program_id' => 3,
            	'materi' => 'Menyisipkan Grafik.',
        	],[
            	'program_id' => 3,
            	'materi' => 'Penggunaan Hyperlink.',
        	],[
            	'program_id' => 3,
            	'materi' => 'Langkah-langkah menampilkan presentasi.',
        	],[
            	'program_id' => 3,
            	'materi' => 'Membuat presentasi sederhana.',
        	]
        ];

        DB::table('materi')->insert($point);





        $mengemudi = [
        	[
            	'program_id' => 4,
            	'materi' => 'Persiapan dalam Berkendara.',
        	],[
            	'program_id' => 4,
            	'materi' => 'Melaksanakan Keselamatan Kesehatan Kerja dan Keamanan Berkendara.',
        	],[
            	'program_id' => 4,
            	'materi' => 'Mengendalikan Kendaraan Bermotor secara effisien dan ramah lingkungan dengan mematuhi peraturan dan Keselamatan berlalu lintas pengemudi pemula.',
        	],[
            	'program_id' => 4,
            	'materi' => 'Mengatasi situasi krisis yang terkait dengan kendaraan serta melakukan tindakan yang tepat.',
        	]
        ];

		DB::table('materi')->insert($mengemudi);
		
		$desain = [
			[
				'program_id' => 5,
				'materi' => 'Mengenal program dasar desain grafis',
			],[
				'program_id' => 5,
				'materi' => 'Menghasilkan creative brief untuk pengembangan karya',
			],[
				'program_id' => 5,
				'materi' => 'Bekerja dalam konteks organisasi desain',
			],[
				'program_id' => 5,
				'materi' => 'Mengoperasikan perangkat lunak desain grafis',
			],[
				'program_id' => 5,
				'materi' => 'Mempresentasikan hasil karya desain kepada klien',
			],[
				'program_id' => 5,
				'materi' => 'Mengevaluasi hasil karya desain',
			],[
				'program_id' => 5,
				'materi' => 'Menerjemahkan client brief',
			],[
				'program_id' => 5,
				'materi' => 'Mendesain karya berdasarkan brief',
			],[
				'program_id' => 5,
				'materi' => 'Mengintegrasikan pengetahuan dasar',
			],[
				'program_id' => 5,
				'materi' => 'Menghitung anggaran produksi',
			],
		];
    }
}
