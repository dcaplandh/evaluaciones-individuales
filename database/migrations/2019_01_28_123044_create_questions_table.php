<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('content');
            $table->tinyInteger('module_id');
            $table->timestamps();
        });

        \DB::table('questions')->insert([
         [ 'question' => 'Completar la regla CSS','content' => 'css_basic' , 'module_id' => '1'],
         [ 'question' => 'Completar los espacio en blanco','content' => 'php_basic' , 'module_id' => '2'],
         [ 'question' => '¿Cuáles son las partes de la clase?','content' => 'object_basic' , 'module_id' => '3']
       ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
