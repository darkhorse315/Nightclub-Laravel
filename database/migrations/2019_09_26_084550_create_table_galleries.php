<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGalleries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string("image")->default("");
            $table->string("large_image")->default("");
            $table->bigInteger("category_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_galleries');
    }
}
