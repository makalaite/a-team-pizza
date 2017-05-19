<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdColumnToPzUsersRecoursesConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pz_users_recourses_connections', function(Blueprint $table)
        {
            $table->string('id', 36)->unique('id_UNIQUE');
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pz_users_recourses_connections', function (Blueprint $table){
            $table->dropColumn('id', 'updated_at');
            $table->dropSoftDeletes();
        });
    }
}
