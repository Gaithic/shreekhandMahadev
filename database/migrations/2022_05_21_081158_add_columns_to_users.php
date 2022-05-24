<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('designation');
            $table->string('date_of_birth');
            $table->string('date_of_join');
            $table->string('office_address');
            $table->string('gender');
            $table->string('qualification');
            $table->string('username');
            $table->string('contact');
    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('designation');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('date_of_join');
            $table->dropColumn('office_address');
            $table->dropColumn('gender');
            $table->dropColumn('qualification');
            $table->dropColumn('username');
            $table->dropColumn('contact');
            
        });
    }
};