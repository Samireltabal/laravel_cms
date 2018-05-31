<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('comments', function($table){
            $table->string('user_name');
            $table->string('email_address');
            $table->string('url');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('comments', function($table){
        $table->dropColumn('user_name');
        $table->dropColumn('email_address');
        $table->dropColumn('url');
        });
    }
}
