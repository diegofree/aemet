<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClimateValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('climate_values', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->float('tmin'); // Temperatura mínima
            $table->float('tmax'); // Temperatura máxima
            $table->float('tmed'); // Temperatura media
            $table->time('horatmax'); // Hora y minuto de la temperatura máxima
            $table->time('horatmin'); // Hora y minuto de la temperatura mínima
            $table->float('prec'); // Precipitación diaria
            $table->float('racha'); // Racha máxima de viento en m/s
            $table->float('dir'); // Dirección de la racha máxima de viento en decenas de grado
            $table->float('velmedia'); // Velocidad media del viento en m/s
            $table->time('horaracha'); // Hora y minuto de la racha máxima
            $table->float('sol'); // Insolación, horas de sol medida en horas
            $table->float('presmax'); // Presión máxima en hPa
            $table->float('presmin'); // Presión mínima en hPa
            $table->time('horapresmax'); // Hora de la presión máximma (redondeada a la hora entera más próxima)
            $table->time('horapresmin'); // Hora de la presión mínima (redondeada a la hora entera más próxima)
            
            $table->unsignedBigInteger('station_id'); // Para guardar la clave foránea a la tabla Stations
            $table->foreign('station_id')->references('id')->on('stations')->onDelete('cascade');

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
        Schema::dropIfExists('climate_values');
    }
}
