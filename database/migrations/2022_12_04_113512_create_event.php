
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
            ON SCHEDULE EVERY 1 DAY
            STARTS (TIMESTAMP(CURRENT_DATE) + INTERVAL 1 DAY + INTERVAL 1 HOUR)
            ON COMPLETION PRESERVE
            DO
                UPDATE `rents` SET `due_date` = CURRENT_TIMESTAMP()
                WHERE TIMESTAMPDIFF(DAY, CURRENT_TIMESTAMP(), `rent_date`) > 3;
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