<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ads', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });

        Schema::table('ads', function (Blueprint $table) {

            $table->unsignedBigInteger('locate_id');
            $table->foreign('locate_id')->references('id')->on('locates')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });

        Schema::table('ads', function (Blueprint $table) {

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('categorie_id');
            $table->dropColumn('categorie_id');
        });
        Schema::table('ads', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('locate_id');
            $table->dropColumn('locate_id');
        });

        Schema::table('ads', function (Blueprint $table) {
            //
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('ads_id');
            $table->dropColumn('ads_id');
        });
    }
}
