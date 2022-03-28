<?php

namespace App\Models;

use App\Traits\WithWhereHas;
use Illuminate\Database\Eloquent\Model;

class Basis extends Model
{
	use WithWhereHas;

    protected $table = 'basis_kegiatan';

    protected $guarded = ['id','created_at', 'updated_at'];

    public function skf()
    {
        return $this->belongsTo('App\Models\Code','seksi_id')->seksi()->select('id','name');
    }
    public function kf()
    {
        return $this->belongsTo('App\Models\Code','bidang_id')->bidang()->select('id','short_name');
    }    
}
