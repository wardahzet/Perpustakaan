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
        CREATE EVENT due
            ON SCHEDULE EVERY 1 DAY STARTS `2015-09-01 00:00:00`
            ON COMPLETION PRESERVE
            DO
                UPDATE `rents` SET `due_date` = now();
                WHERE date_diff(now(), `rent_date`)>3;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP EVENT `due`');
    }
};
