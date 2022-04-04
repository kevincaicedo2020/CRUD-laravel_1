<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
/*             $table->engine('InnoDB');
 */         $table->bigIncrements('id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }


}
