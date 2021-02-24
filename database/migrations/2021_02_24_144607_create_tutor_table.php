<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
            $table->string('tipus_document');
            $table->string('dni')->unique();
            $table->string('nom_tutor');
            $table->string('primer_llinatge');
            $table->string('segon_llinatge');
            $table->string('pais_dni');
            $table->timestamp('provincia');
            $table->string('municipi');
            $table->string('estat');
            $table->string('telefon')->unique();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('tutor');
    }
}
