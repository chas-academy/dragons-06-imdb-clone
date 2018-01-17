<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watch', function (Blueprint $table) {
            $table->integer('movie_id')->unsigned()->after('id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->integer('user_id')->unsigned()->after('id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    
        Schema::table('watch', function(Blueprint $table) {
            $table->dropForeign('watch_movie_id_foreign');
            $table->dropColumn('movie_id');
            $table->dropForeign('watch_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}