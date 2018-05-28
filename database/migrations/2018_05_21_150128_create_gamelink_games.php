<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamelinkGames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create("games", function (Blueprint $table){
         $table->increments("id");
         $table->text("name");
         $table->text("price");
         $table->timestamp("createdAt")->useCurrent();
         $table->text("description");
         $table->text("image");
       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::drop("games");
     }
}
