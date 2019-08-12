<?php namespace Laozellison\Contactus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLaozellisonContactus extends Migration
{
    public function up()
    {
        Schema::create('laozellison_contactus_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('email');
            $table->text('subject');
            $table->text('message');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laozellison_contactus_');
    }
}
