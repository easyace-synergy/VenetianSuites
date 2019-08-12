<?php namespace Laozellison\Bookings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLaozellisonBookings extends Migration
{
    public function up()
    {
        Schema::table('laozellison_bookings_', function($table)
        {
            $table->smallInteger('room_no');
        });
    }
    
    public function down()
    {
        Schema::table('laozellison_bookings_', function($table)
        {
            $table->dropColumn('room_no');
        });
    }
}
