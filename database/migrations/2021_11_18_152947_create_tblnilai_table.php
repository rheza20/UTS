<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblnilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblnilai', function (Blueprint $table) {
            $table->id();
            
            $table->string("NIM");
            
            $table->unsignedBigInteger("matakuliah_id");
            $table->foreign("matakuliah_id")->references("id")->on("tblmatakuliah");
            
            $table->string("Nilai");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblnilai');
    }
}
