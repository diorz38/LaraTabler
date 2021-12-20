<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('seksi_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('basis_id')->nullable();
            $table->unsignedInteger('interval_id')->nullable();
            $table->string('tahun', 4)->nullable();
            $table->char('jenis_keg', 50)->nullable();
            $table->text('nama')->nullable();
            $table->unsignedBigInteger('target')->nullable();
            $table->bigInteger('unit_id')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_berakhir')->nullable();
            $table->string('jam_mulai', 11)->nullable();
            $table->string('jam_berakhir', 11)->nullable();
            $table->string('tim', 225)->nullable();
            $table->char('is_kab', 1)->nullable();
            $table->char('kab_id', 4)->nullable();
            $table->char('catatan', 50)->nullable();
            $table->char('status', 50)->nullable();
            $table->char('jenis_ajuan', 50)->nullable()->default('rutin');
            $table->integer('is_indiv')->nullable()->default(0);
            $table->integer('kf_user')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
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
        Schema::dropIfExists('projects');
    }
}
