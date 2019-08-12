<?php namespace Laozellison\Bookings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLaozellisonBookings2 extends Migration
{
    public function up()
    {
        Schema::table('laozellison_bookings_', function($table)
        {
            $table->text('room_plan');
        });
    }
    
    public function down()
    {
        Schema::table('laozellison_bookings_', function($table)
        {
            $table->dropColumn('room_plan');
        });
    }
}
