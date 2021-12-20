<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWilayahBpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wilayah_bps', function (Blueprint $table) {
            $table->foreign(['parent_id'], 'wilayah_bps_parent_child_foreign')->references(['id'])->on('wilayah_bps')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wilayah_bps', function (Blueprint $table) {
            $table->dropForeign('wilayah_bps_parent_child_foreign');
        });
    }
}
