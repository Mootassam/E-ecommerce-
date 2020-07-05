<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_att', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('products_id');
            $table->text('system');
            $table->text('ecran');
            $table->text('photo');
            $table->text('reseaux');
            $table->text('poids');
            $table->text('battery');
            $table->text('Processeur');
            $table->text('memoire');
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
        Schema::dropIfExists('product_att');
    }
}
