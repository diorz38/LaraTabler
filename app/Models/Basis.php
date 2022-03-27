<?php

namespace App\Models;

use App\Traits\WithWhereHas;
use Illuminate\Database\Eloquent\Model;

class Basis extends Model
{
	use WithWhereHas;

    protected $table = 'basis_kegiatan';

    protected $guarded = ['id','created_at', 'updated_at'];


}
