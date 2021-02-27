<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('body');
            $table->string('author');
            // $table->string('categories');
            // $table->string('tags');
            $table->timestamps();
        });
    }

    // forma contratta bella SOLO IN CREAZIONE nullable()
    // $table->foreignId('user_id')
    //       ->constrained();

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
