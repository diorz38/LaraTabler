<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable()->unique('user_id');
            $table->string('nama', 254)->nullable();
            $table->string('nik', 24)->nullable();
            $table->text('domisili')->nullable();
            $table->string('prov', 2)->nullable();
            $table->string('kab', 2)->nullable();
            $table->string('kec', 3)->nullable();
            $table->string('desa', 3)->nullable();
            $table->date('tgllhr')->nullable();
            $table->string('bank', 50)->nullable();
            $table->string('kodering', 50)->nullable();
            $table->string('jkel', 1)->nullable();
            $table->string('agama', 1)->nullable();
            $table->string('stkawin', 1)->nullable();
            $table->string('ijazah', 1)->nullable();
            $table->string('pekerjaan', 1)->nullable();
            $table->string('telp', 20)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
