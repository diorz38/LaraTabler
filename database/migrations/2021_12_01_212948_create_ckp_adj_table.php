<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCkpAdjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ckp_adj', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('kode', 10);
            $table->string('kab_id', 4);
            $table->string('kab_name', 16);
            $table->integer('thn');
            $table->integer('bln')->nullable();
            $table->decimal('ckp_2', 5)->nullable();
            $table->decimal('ckp_3', 5)->nullable();
            $table->decimal('ckp_4', 5)->nullable();
            $table->decimal('ckp_5', 6)->nullable();
            $table->decimal('ckp_6', 5)->nullable();
            $table->decimal('ckp_7', 6)->nullable();
            $table->decimal('CKP_KEG', 5);
            $table->decimal('CKP_ADJ', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ckp_adj');
    }
}
