<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('dateOfReporting');
            $table->string('nameOfRelative');
            $table->string('ContactOfNearRelative');
            $table->string('addharNumber');
            $table->string('idProof');
            $table->boolean('terms');
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
            $table->dropColumn('dateOfReporting');
            $table->dropColumn('nameOfRelative');
            $table->dropColumn('ContactOfNearRelative');
            $table->dropColumn('addharNumber');
            $table->dropColumn('idProof');
            $table->dropColumn('terms');
        });
    }
};
