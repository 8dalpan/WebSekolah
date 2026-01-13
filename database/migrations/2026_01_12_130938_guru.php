<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nip',20)->unique();
            $table->string('nama',50);
            $table->string('jenis_kelamin',20);
            $table->string('mata_pelajaran',30);
            $table->string('no_hp',50);
            $table->string('alamat',200);
            $table->string('status_kepegawaian',30);
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
        Schema::dropIfExists('guru');
    }
};
