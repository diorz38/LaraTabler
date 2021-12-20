<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatKantorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat_kantor', function (Blueprint $table) {
            $table->string('id', 4)->primary();
            $table->string('parent_id', 4)->nullable();
            $table->string('province_id', 2);
            $table->string('nama', 191);
            $table->string('alamat_kantor', 191);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alamat_kantor');
    }
}
