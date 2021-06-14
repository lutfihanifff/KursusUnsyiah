<?php

use Illuminate\Database\Seeder;

class InstrukturTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instruktur = [
            [
                'user_id' => factory('App\User')->state('instruktur')->create()->id,
                'nama' => 'Khoil', 
                'tempat_lahir' => 'Samarinda',
                // 'tanggal_lahir' => '',
                'gender' => 'L', 
                'nohp' => '', 
                'alamat' => 'Samarinda', 
                'created_at' => '2019-11-02', 
                'updated_at' => '2019-11-02'
            ],
            [
                'user_id' => factory('App\User')->state('instruktur')->create()->id,
                'nama' => 'Laily Putri NUr', 
                'tempat_lahir' => 'Samarinda',
                // 'tanggal_lahir' => '',
                'gender' => 'P', 
                'nohp' => '', 
                'alamat' => 'Samarinda', 
                'created_at' => '2019-11-02', 
                'updated_at' => '2019-11-02'
            ],
            [
                'user_id' => factory('App\User')->state('instruktur')->create()->id,
                'nama' => 'Amalia Widya Ardyani, S.Kom', 
                'tempat_lahir' => 'Samarinda',
                // 'tanggal_lahir' => '',
                'gender' => 'P', 
                'nohp' => '', 
                'alamat' => 'Samarinda', 
                'created_at' => '2019-11-02', 
                'updated_at' => '2019-11-02'
            ],
            [
                'user_id' => factory('App\User')->state('instruktur')->create()->id,
                'nama' => 'Yani Dwi Astuti', 
                'tempat_lahir' => 'Samarinda',
                // 'tanggal_lahir' => '',
                'gender' => 'P', 
                'nohp' => '', 
                'alamat' => 'Samarinda', 
                'created_at' => '2019-11-02', 
                'updated_at' => '2019-11-02'
            ],
            [
                'user_id' => factory('App\User')->state('instruktur')->create()->id,
                'nama' => 'Nanda Pratama', 
                'tempat_lahir' => 'Samarinda',
                // 'tanggal_lahir' => '',
                'gender' => 'L', 
                'nohp' => '', 
                'alamat' => 'Samarinda', 
                'created_at' => '2019-11-02', 
                'updated_at' => '2019-11-02'
            ],
            [
                'user_id' => factory('App\User')->state('instruktur')->create()->id,
                'nama' => 'Muhammad Abduh', 
                'tempat_lahir' => 'Samarinda',
                // 'tanggal_lahir' => '',
                'gender' => 'L', 
                'nohp' => '', 
                'alamat' => 'Samarinda', 
                'created_at' => '2019-11-02', 
                'updated_at' => '2019-11-02'
            ]
            
        ];

        DB::table('instruktur')->insert($instruktur);
    }
}
