<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelPertelTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'rel_pertel';

    /**
     * Run the migrations.
     * @table rel_pertel
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            
            // $table->foreign('id_personas')->references('id')->on('personas');
            // $table->foreign('id_telefonos')->references('id')->on('telefonos');

            $table->foreignid('id_personas')
                  ->nullable()
                  ->constrained('personas')
                  ->onDelete('cascade')
                ->onUpdate('restrict');

                  $table->foreignid('id_telefonos')
                  ->nullable()
                  ->constrained('telefonos')
                  ->onDelete('cascade')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}