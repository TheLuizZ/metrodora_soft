<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'personas';

    /**
     * Run the migrations.
     * @table personas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('IDENTIDAD', 16);
            $table->string('NOM_PERSONA',50);
            $table->enum('SEX_PERSONA', ['F', 'M']);
            $table->enum('IND_CIVIL', ['S', 'C', 'D', 'V']);
            $table->tinyInteger('EDAD_PERSONA');
            $table->string('USR_REGISTRO',45);
            $table->enum('TIPO_PERSONA', ['E', 'P']);
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
        Schema::dropIfExists($this->tableName);
    }
}
