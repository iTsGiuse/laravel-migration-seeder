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
        /* Schema::create('treno', function (Blueprint $table) {
            $table->id();
            $table->char('Azienda', 255);
            $table->char('Stazione_di_partenza', 255);
            $table->char('Stazione_di_arrivo', 255);
            $table->dateTime('Orario_di_partenza');
            $table->dateTime('Orario_di_arrivo');
            $table->tinyInteger('Codice_Treno', 100);
            $table->tinyInteger('Numero_Carrozze', 50);
            $table->dateTime('In_orario');
            $table->dateTime('Cancellato');
            $table->timestamps();
        }); */
        Schema::create('train', function (Blueprint $table) {
            $table->id(); 
            $table->string('Azienda', 255);
            $table->string('Stazione_di_partenza', 255);
            $table->string('Stazione_di_arrivo', 255);
            $table->dateTime('Orario_di_partenza');
            $table->dateTime('Orario_di_arrivo');
            $table->integer('Codice_Treno'); 
            $table->integer('Numero_Carrozze'); 
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('train');
    }
};
