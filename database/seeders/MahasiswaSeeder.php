<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Mahasiswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Schema::disableForeignKeyConstraints();
        \DB::table("tblmahasiswa")->truncate();
        \App\Models\Mahasiswa::insert([
            "NIM" => "18171615",
            "Nama" => "budi",
            "Alamat" => "Medan",
            "Telepon" => "081112345678",
            "Email" => "budi99@yahoo.com",
        
            
           
        ]);
        \Schema::enableForeignKeyConstraints();
    }
}
