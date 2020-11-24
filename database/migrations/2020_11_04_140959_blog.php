<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('blog', function(Blueprint $table)
      {
        $timestamp=false;
          $table->increments('id');
          $table->string('name', 50);
          $table->string('blog_name', 50);
          $table->text('content1')->nullable();
          $table->text('content2')->nullable();
          $table->text('image')->nullable();
          $table->date('date')->nullable();
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
