<?php namespace Laozellison\Bookings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLaozellisonBookings3 extends Migration
{
    public function up()
    {
        Schema::table('laozellison_bookings_', function($table)
        {
            $table->string('email', 29);
        });
    }
    
    public function down()
    {
        Schema::table('laozellison_bookings_', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
