<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER ins_rent AFTER INSERT ON `rents` FOR EACH ROW
            BEGIN
                DELETE FROM `wishlists` WHERE `user_email` = new.user_email 
                    AND `book_isbn` = new.book_isbn;
                UPDATE `books` SET `readers` = `readers` + 1, `views` = `views` + 1 
                    WHERE `isbn` = new.book_isbn;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `ins_rent`');
    }
};
