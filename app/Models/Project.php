<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'projects';

    protected $fillable = ['parent_id','seksi_id','user_id','basis_id','tahun','jenis_id','nama','target','unit_id','tgl_mulai','tgl_berakhir','tim','is_kab','kab_id','status'];

}
