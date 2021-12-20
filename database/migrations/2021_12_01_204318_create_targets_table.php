<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTargetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('targets', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('pj_id')->nullable();
            $table->unsignedInteger('kab_id');
            $table->unsignedInteger('project_id')->nullable();
            $table->foreign('project_id')->nullable()->references('id')->on('projects')->onDelete('cascade');
            $table->char('tahun', 4);
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_berakhir')->nullable();
            $table->unsignedInteger('target');
            $table->unsignedInteger('realisasi')->nullable();
            $table->double('skor_capaian_target')->unsigned()->nullable();
            $table->double('skor_kerjasama')->unsigned()->nullable();
            $table->double('skor_waktu')->unsigned()->nullable();
            $table->double('skor_kualitas')->unsigned()->nullable();
            $table->double('skor_overall')->unsigned()->nullable();
            $table->double('skor_ckp')->unsigned()->nullable();
            $table->unsignedInteger('unit_id');
            $table->text('notes')->nullable();
            $table->unsignedInteger('login_id')->nullable();
            $table->date('tgl_update_daerah')->nullable();
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
        Schema::dropIfExists('targets');
    }
}
