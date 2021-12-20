<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayahBpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayah_bps', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('name', 100)->nullable();
            $table->string('parent_id', 10)->nullable()->index('wilayah_bps_parent_child_foreign');
            $table->string('kode', 10);
            $table->bigInteger('length');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wilayah_bps');
    }
}
