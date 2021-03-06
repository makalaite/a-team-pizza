<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnNullRememberTokenPzUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pz_users', function(Blueprint $table)
        {
            $table->string('remember_token')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pz_users', function (Blueprint $table){
            $table->string('remember_token')->nullable(false)->change();
        });
    }
}
