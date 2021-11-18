<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \Schema::disableForeignKeyConstraints();
        \DB::table("tblmatakuliah")->truncate();
        \App\Models\Matakuliah::insert([
            ["Nama" => "Desain Grafis"],
            ["Nama" => "Matriks"],
            ["Nama" => "Pemrograman visual"],
            
        ]);
        \Schema::enableForeignKeyConstraints();
    }
}
