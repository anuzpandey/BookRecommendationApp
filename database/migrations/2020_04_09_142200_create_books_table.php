<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('bookId');
            $table->string('bookTitle');
            $table->string('bookAuthor');
            $table->string('bookImage')->nullable();
            $table->text('bookDescription')->nullable();
            $table->string('bookLink')->nullable();
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('categoryId');
            $table->foreign('categoryId')->references('categoryId')->on('categories')->onUpdate('cascade');
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
        Schema::dropIfExists('books');
    }
}
