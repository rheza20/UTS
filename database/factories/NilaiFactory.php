<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Nilai;
class NilaiFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     * /
    protected $model = Nilai::class;
    
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "NIM" => \App\Models\Mahasiswa::get("id")->first(),
            "matakuliah_id" => \App\Models\Matakuliah::get("id")->first(),
            "Nilai" => "A",
        ];
    }
}