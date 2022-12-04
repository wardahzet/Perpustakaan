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
        Schema::create('wishlists', function (Blueprint $table) {
            $table->string('user_email');
            $table->string('book_isbn');            
            $table->foreign('user_email')->references('email')->on('users');
            $table->foreign('book_isbn')->references('isbn')->on('books');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rentings');
    }
};
