<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Client extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('client', function(Blueprint $table)
      {
        $timestamp=false;
          $table->increments('id');
          $table->string('name', 50);
          $table->string('email',50);
          $table->string('contact', 20);
          $table->text('services',150);
          $table->text('other_services',150)->nullable();
          
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
