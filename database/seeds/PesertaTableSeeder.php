<?php

use Illuminate\Database\Seeder;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peserta = [
            [
                "id"=> 60351019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60351019) , ])->id, 
                "nama"=> "Melitina", 
                "tempat_lahir"=> "Barong Tangkok", 
                "tanggal_lahir"=> "2003-05-05", 
                "gender"=> "P", 
                "nohp"=> "082251473136", 
                "alamat"=> "JL. RAWA SARI 2", 
                "created_at"=> "2019-10-07", 
                "updated_at"=> "2019-10-07"
            ],[
                "id"=> 60361019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60361019) , ])->id, 
                "nama"=> "Muhammad Rizaldi Suryosumirat", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1995-11-14", 
                "gender"=> "L", 
                "nohp"=> "081258275002", 
                "alamat"=> "JL. RUMBIA NO.1 KEL. SIDOMULYO", 
                "created_at"=> "2019-10-10", 
                "updated_at"=> "2019-10-10"
            ],[
                "id"=> 60371019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60371019) , ])->id, 
                "nama"=> "Hilwa Salsabilah Inayati", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2001-10-04", 
                "gender"=> "P", 
                "nohp"=> "082158155530", 
                "alamat"=> "JL. M. SAID RT. 12 LOA BAHU", 
                "created_at"=> "2019-10-11", 
                "updated_at"=> "2019-10-11"
            ],[
                "id"=> 60381019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60381019) , ])->id, 
                "nama"=> "Yeni Ayu Lestari", 
                "tempat_lahir"=> "Banyuwangi", 
                "tanggal_lahir"=> "1997-08-15", 
                "gender"=> "P", 
                "nohp"=> "08126375160", 
                "alamat"=> "DUSUN SIDOMULYO RT. 1 KEL. JAMBEWANGI", 
                "created_at"=> "2019-10-13", 
                "updated_at"=> "2019-10-13"
            ],[
                "id"=> 60391019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60391019) , ])->id, 
                "nama"=> "Aqiilah Azzahra Irmi", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2001-07-16", 
                "gender"=> "P", 
                "nohp"=> "087780998145", 
                "alamat"=> "JL. HOS COKROAMINOTO GG. 5 NO. 39", 
                "created_at"=> "2019-10-15", 
                "updated_at"=> "2019-10-15"
            ],[
                "id"=> 60401019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60401019) , ])->id, 
                "nama"=> "Ardiansyah", 
                "tempat_lahir"=> "Loa Kulu", 
                "tanggal_lahir"=> "1969-05-02", 
                "gender"=> "L", 
                "nohp"=> "085252610766", 
                "alamat"=> "JL. PLAMBOYAN GANG MELATI RT. 10", 
                "created_at"=> "2019-10-10", 
                "updated_at"=> "2019-10-10"
            ],[
                "id"=> 60411019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60411019) , ])->id, 
                "nama"=> "Heri Santosa", 
                "tempat_lahir"=> "Blitar", 
                "tanggal_lahir"=> "1977-12-08", 
                "gender"=> "L", 
                "nohp"=> "081349535133", 
                "alamat"=> "KOMP. PT. SWAKARSA RT. 005 KEL. MUARA WAHAY KUTIM", 
                "created_at"=> "2019-10-11", 
                "updated_at"=> "2019-10-11"
            ],[
                "id"=> 60421019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60421019) , ])->id, 
                "nama"=> "Ika Setya Wahyuni", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2000-06-10", 
                "gender"=> "P", 
                "nohp"=> "081350978579", 
                "alamat"=> "JL. P. SUROPATI RT. 25 KEC. SUNGAI KUNJANG", 
                "created_at"=> "2019-10-11", 
                "updated_at"=> "2019-10-11"
            ],[
                "id"=> 60431019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60431019) , ])->id, 
                "nama"=> "Putri Amala Sari", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1998-03-08", 
                "gender"=> "L", 
                "nohp"=> "082149086293", 
                "alamat"=> "PERUM BUKIT PINANG BLOK A4/20", 
                "created_at"=> "2019-10-11", 
                "updated_at"=> "2019-10-11"
            ],[
                "id"=> 60441019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60441019) , ])->id, 
                "nama"=> "Rizal Satriadi", 
                "tempat_lahir"=> "Pelaihari", 
                "tanggal_lahir"=> "1996-05-28", 
                "gender"=> "L", 
                "nohp"=> "082158075071", 
                "alamat"=> "JL. CIPTO MANGUNKUSUMO ", 
                "created_at"=> "2019-10-12", 
                "updated_at"=> "2019-10-12"
            ],[
                "id"=> 60451019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60451019) , ])->id, 
                "nama"=> "Donatus Milang ", 
                "tempat_lahir"=> "Tenggarong", 
                "tanggal_lahir"=> "1997-10-22", 
                "gender"=> "L", 
                "nohp"=> "081349496141", 
                "alamat"=> "JL. APO MEDO RT. 11 UJOH BILANG MAHAKAM ULU ", 
                "created_at"=> "2019-10-12", 
                "updated_at"=> "2019-10-12"
            ],[
                "id"=> 60461019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60461019) , ])->id, 
                "nama"=> "Amara Nurmahrini", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2001-02-17", 
                "gender"=> "P", 
                "nohp"=> "081254799690", 
                "alamat"=> "JL. JAKARTA BLOK EV. NO. 2 KEL. LOA BAKUNG /", 
                "created_at"=> "2019-10-12", 
                "updated_at"=> "2019-10-12"
            ],[
                "id"=> 60471019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60471019) , ])->id, 
                "nama"=> "Gede Adhitya Ramayanda Suputra", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2002-11-06", 
                "gender"=> "L", 
                "nohp"=> "081346247620", 
                "alamat"=> "JL. JAKARTA I PERUM DAKSA BLOK C11 NO. 7", 
                "created_at"=> "2019-10-01", 
                "updated_at"=> "2019-10-01"
            ],[
                "id"=> 60481019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60481019) , ])->id, 
                "nama"=> "Selin Kartika", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2003-07-31", 
                "gender"=> "P", 
                "nohp"=> "085820252596", 
                "alamat"=> "JL. KHALID NO. 19", 
                "created_at"=> "2019-10-14", 
                "updated_at"=> "2019-10-14"
            ],[
                "id"=> 60491019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60491019) , ])->id, 
                "nama"=> "Muhammad Mufrizal", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2000-08-12", 
                "gender"=> "L", 
                "nohp"=> "085249450005", 
                "alamat"=> "JL. HOS COKROMINOTO", 
                "created_at"=> "2019-10-16", 
                "updated_at"=> "2019-10-16"
            ],[
                "id"=> 60501019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60501019) , ])->id, 
                "nama"=> "Anna Amalia", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1995-03-31", 
                "gender"=> "P", 
                "nohp"=> "085248448325", 
                "alamat"=> "JL. M. SAID GG. ARTHANIA ", 
                "created_at"=> "2019-10-16", 
                "updated_at"=> "2019-10-16"
            ],[
                "id"=> 60511019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60511019) , ])->id, 
                "nama"=> "Oeij Alexander Wijaya", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1974-01-24", 
                "gender"=> "L", 
                "nohp"=> "081347446718", 
                "alamat"=> "JL. JELAWAT GG. 9 NO. 35 SAMARINDA", 
                "created_at"=> "2019-10-17", 
                "updated_at"=> "2019-10-17"
            ],[
                "id"=> 60521019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60521019) , ])->id, 
                "nama"=> "Muhammad Pratsojo Setiawan", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2002-10-17", 
                "gender"=> "L", 
                "nohp"=> "081347313001", 
                "alamat"=> "JL. M. SAID GG. LESTARI NO. 02", 
                "created_at"=> "2019-10-13", 
                "updated_at"=> "2019-10-13"
            ],[
                "id"=> 60531019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60531019) , ])->id, 
                "nama"=> "Ikrimah Haniatur  Rofidha", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1990-07-10", 
                "gender"=> "L", 
                "nohp"=> "081349345216", 
                "alamat"=> "PERUM SOLONG DURIAN B1 NO. 22 SEMPAJA UTARA", 
                "created_at"=> "2019-10-17", 
                "updated_at"=> "2019-10-17"
            ],[
                "id"=> 60541019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60541019) , ])->id, 
                "nama"=> "Sukidi", 
                "tempat_lahir"=> "Madiun", 
                "tanggal_lahir"=> "1965-06-05", 
                "gender"=> "L", 
                "nohp"=> "082158155530", 
                "alamat"=> "PERUM KEL. MAS BARU BLOK BD 06 SEI KUNJANG", 
                "created_at"=> "2019-10-17", 
                "updated_at"=> "2019-10-17"
            ],[
                "id"=> 60551019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60551019) , ])->id, 
                "nama"=> "M. Zaidan Hidayat", 
                "tempat_lahir"=> "Balikpapan", 
                "tanggal_lahir"=> "2002-10-29", 
                "gender"=> "L", 
                "nohp"=> "082154021771", 
                "alamat"=> "JL. RUTAN SEMPURUT RT. 14 NO. 70", 
                "created_at"=> "2019-10-17", 
                "updated_at"=> "2019-10-17"
            ],[
                "id"=> 60561019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60561019) , ])->id, 
                "nama"=> "Revalina Mutiara Fatih As'Ari", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2004-12-26", 
                "gender"=> "P", 
                "nohp"=> "085246872875", 
                "alamat"=> "JL. M. SAID GG. SEKAR NO. 42 A RT. 13 KEL. LOK BAHU", 
                "created_at"=> "2019-10-18", 
                "updated_at"=> "2019-10-18"
            ],[
                "id"=> 60571019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60571019) , ])->id, 
                "nama"=> "Novia Aida Rahmadina", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2011-11-26", 
                "gender"=> "P", 
                "nohp"=> "085246872875", 
                "alamat"=> "JL. M. SAID GG. SEKAR NO. 42 A RT. 13 KEL. LOK BAHU", 
                "created_at"=> "2019-10-18", 
                "updated_at"=> "2019-10-18"
            ],[
                "id"=> 60581019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60581019) , ])->id, 
                "nama"=> "Achmad Gajali", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1996-02-25", 
                "gender"=> "L", 
                "nohp"=> "081347442433", 
                "alamat"=> "JL. ULIN GANG 7", 
                "created_at"=> "2019-10-18", 
                "updated_at"=> "2019-10-18"
            ],[
                "id"=> 60591019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60591019) , ])->id, 
                "nama"=> "Aulia Nugraha Putra", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1999-06-25", 
                "gender"=> "L", 
                "nohp"=> "085250799626", 
                "alamat"=> "JL. JAKARTA BLOK M.12", 
                "created_at"=> "2019-10-19", 
                "updated_at"=> "2019-10-19"
            ],[
                "id"=> 60601019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60601019) , ])->id, 
                "nama"=> "Wilmar Litaurus", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1993-07-05", 
                "gender"=> "L", 
                "nohp"=> "081253721449", 
                "alamat"=> "JL. SULTAN ALIMUDDIN RT. 25", 
                "created_at"=> "2019-10-19", 
                "updated_at"=> "2019-10-19"
            ],[
                "id"=> 60611019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60611019) , ])->id, 
                "nama"=> "Rafi Rahmadani", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2002-11-26", 
                "gender"=> "L", 
                "nohp"=> "082149694438", 
                "alamat"=> "MUARA WAHAU", 
                "created_at"=> "2019-10-20", 
                "updated_at"=> "2019-10-20"
            ],[
                "id"=> 60621019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60621019) , ])->id, 
                "nama"=> "Alex", 
                "tempat_lahir"=> "Sangasanga", 
                "tanggal_lahir"=> "1999-01-15", 
                "gender"=> "L", 
                "nohp"=> "082253673780", 
                "alamat"=> "JL. BODIYONO KEL. SANGASANGA MUARA", 
                "created_at"=> "2019-10-21", 
                "updated_at"=> "2019-10-21"
            ],[
                "id"=> 60631019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60631019) , ])->id, 
                "nama"=> "Vanestasya Jassica Widodo", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2002-01-07", 
                "gender"=> "P", 
                "nohp"=> "081347275893", 
                "alamat"=> "JL. JAKARTA GG. ISRAP NO. 12", 
                "created_at"=> "2019-10-24", 
                "updated_at"=> "2019-10-24"
            ],[
                "id"=> 60641019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60641019) , ])->id, 
                "nama"=> "Ema Yuliana", 
                "tempat_lahir"=> "Kota Bangun", 
                "tanggal_lahir"=> "1981-07-18", 
                "gender"=> "P", 
                "nohp"=> "08115973434", 
                "alamat"=> "JL. JEND. A. YANI RT. 007 DESA BANGUN ULU KAB. KUKAR", 
                "created_at"=> "2019-10-24", 
                "updated_at"=> "2019-10-24"
            ],[
                "id"=> 60651019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60651019) , ])->id, 
                "nama"=> "Andi Purnomo", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1986-05-21", 
                "gender"=> "L", 
                "nohp"=> "082155766680", 
                "alamat"=> "JL. TEUKU UMAR GG. DURIAN TUNGGAL 8 RT. 35", 
                "created_at"=> "2019-10-24", 
                "updated_at"=> "2019-10-24"
            ],[
                "id"=> 60661019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60661019) , ])->id, 
                "nama"=> "Ahmad Hidayatullah", 
                "tempat_lahir"=> "Awayan", 
                "tanggal_lahir"=> "1996-06-08", 
                "gender"=> "L", 
                "nohp"=> "085820252596", 
                "alamat"=> "JL. P. SUROPATI GG. AL MUJAHIDIN", 
                "created_at"=> "2019-10-22", 
                "updated_at"=> "2019-10-22"
            ],[
                "id"=> 60671019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60671019) , ])->id, 
                "nama"=> "Yan Hardinata", 
                "tempat_lahir"=> "Balikpapan", 
                "tanggal_lahir"=> "1982-01-14", 
                "gender"=> "L", 
                "nohp"=> "081350342322", 
                "alamat"=> "JL. BANGGERIS GG. 2 NO. 73 RT. 34", 
                "created_at"=> "2019-10-26", 
                "updated_at"=> "2019-10-26"
            ],[
                "id"=> 60681019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60681019) , ])->id, 
                "nama"=> "Deny Meisah Ramadhani", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1995-05-20", 
                "gender"=> "L", 
                "nohp"=> "087816195531", 
                "alamat"=> "JL. P. SURYANATA GG. HIKMAH I", 
                "created_at"=> "2019-10-18", 
                "updated_at"=> "2019-10-18"
            ],[
                "id"=> 60691019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60691019) , ])->id, 
                "nama"=> "Awang Bima Ziminata Zulkifli", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1999-08-24", 
                "gender"=> "L", 
                "nohp"=> "081350666262", 
                "alamat"=> "JL. KEMANGI BLOK RR-8 RT. 18 KEL. KARANG ASAM ULU", 
                "created_at"=> "2019-10-24", 
                "updated_at"=> "2019-10-24"
            ],[
                "id"=> 60701019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60701019) , ])->id, 
                "nama"=> "Fathur Rohim", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1995-10-26", 
                "gender"=> "L", 
                "nohp"=> "085386435084", 
                "alamat"=> "JL. KEMUNING SAMARINDA", 
                "created_at"=> "2019-10-25", 
                "updated_at"=> "2019-10-25"
            ],[
                "id"=> 60711019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60711019) , ])->id, 
                "nama"=> "Sultan Akmal", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "2002-03-28", 
                "gender"=> "L", 
                "nohp"=> "081258123277", 
                "alamat"=> "JL. MT. HARYONO RT. 10", 
                "created_at"=> "2019-10-28", 
                "updated_at"=> "2019-10-28"
            ],[
                "id"=> 60721019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60721019) , ])->id, 
                "nama"=> "Sumijan", 
                "tempat_lahir"=> "Blora", 
                "tanggal_lahir"=> "1998-06-10", 
                "gender"=> "L", 
                "nohp"=> "082351873674", 
                "alamat"=> "JL. RAPAK INDAH", 
                "created_at"=> "2019-10-29", 
                "updated_at"=> "2019-10-29"
            ],[
                "id"=> 60731019, 
                "user_id"=> factory('App\User')->state('peserta')->create([ 'password' => bcrypt(60731019) , ])->id, 
                "nama"=> "Ayers Oliver Parulian Siregar ", 
                "tempat_lahir"=> "Samarinda", 
                "tanggal_lahir"=> "1999-10-20", 
                "gender"=> "L", 
                "nohp"=> "089690320543", 
                "alamat"=> "PERUM BUKIT PINANG BAHARI", 
                "created_at"=> "2019-10-29", 
                "updated_at"=> "2019-10-29"
                
            ]
        ];

        DB::table('peserta')->insert($peserta);
    }
}
