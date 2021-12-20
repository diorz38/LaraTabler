<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileBpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_bps', function (Blueprint $table) {
            $table->unsignedBigInteger('nipbps')->primary();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->string('nama', 191)->nullable();
            $table->string('nippanjang', 191)->nullable();
            $table->string('email', 191)->nullable()->unique('email');
            $table->string('username', 191)->nullable()->unique('username');
            $table->string('satuankerja', 191)->nullable();
            $table->string('alamatkantor', 191)->nullable();
            $table->string('urlfoto', 191)->nullable();
            $table->string('avatar', 191)->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('kab_id', 4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_bps');
    }
}
