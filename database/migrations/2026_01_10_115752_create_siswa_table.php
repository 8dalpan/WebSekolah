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
    Schema::create('siswa', function (Blueprint $table) {
        $table->id();
        $table->string('nis', 20)->unique();
        $table->string('nama', 250);
        $table->string('jenis_kelamin', 30);
        $table->string('kelas', 30);
        $table->string('jurusan', 50);
        $table->string('no_hp', 50);
        $table->foreignId('mapel_id')->constrained('mapels')->onDelete('cascade');
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
            Schema::dropIfExists('siswa');

        }
    };
