<?php namespace Laozellison\Bookings\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLaozellisonBookings extends Migration
{
    public function up()
    {
        Schema::create('laozellison_bookings_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('ref_number', 122);
            $table->text('surname');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laozellison_bookings_');
    }
}
