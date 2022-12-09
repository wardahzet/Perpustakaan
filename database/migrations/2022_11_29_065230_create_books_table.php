<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('isbn')->primary();
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('author');
            $table->string('publisher');
            $table->year('year');
            $table->string('data')->nullable();
            $table->string('cover')->nullable();
            $table->text('synopsis');
            $table->integer('readers');
            $table->integer('views');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
};
