<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClubs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_clubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string("title")->default("");
            $table->string("image")->default("");
            $table->longText("description")->default("");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_clubs');
    }
}
