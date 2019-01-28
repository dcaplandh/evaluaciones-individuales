<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->timestamps();
        });

        \DB::table('modules')->insert([
         [ 'name' => 'HTML y CSS','logo' => 'https://banner2.kisspng.com/20180730/ghy/kisspng-logo-cascading-style-sheets-html5-css3-prags-h-python-stickers-5b5ed2621e52c3.0848753715329408981242.jpg' ],
         [ 'name' => 'PHP','logo' => 'http://blog.desafiolatam.com/wp-content/uploads/2018/05/php-logo.png' ],
         [ 'name' => 'Objetos','logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/OOP.svg/1280px-OOP.svg.png' ]
       ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules');
    }
}
