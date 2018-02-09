<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorreosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_tramite',50)->nullable();
            $table->string('accion',15)->nullable();
            $table->string('remitente',150)->nullable();
            $table->timestamp('fecha_registro');
            $table->timestamp('fecha_recibo')->nullable();
            $table->string('persona',150)->nullable();
            $table->string('prioridad',20);
            $table->text('motivo');            
            $table->timestamps();
            $table->softDeletes();

            

        });

        /*$sql = "ALTER TABLE 'correos' ADD 'archivo1' MEDIUMBLOB";

            DB::connection()->getPdo()->exec($sql);*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correos');
    }
}
