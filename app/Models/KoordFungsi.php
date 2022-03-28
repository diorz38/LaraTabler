<?php

namespace App\Models;

use App\Traits\WithWhereHas;
use Illuminate\Database\Eloquent\Model;

class KoordFungsi extends Model
{
	use WithWhereHas;

    protected $table = 'seksi';

    protected $guarded = ['id','created_at', 'updated_at'];

    public function scopeIsActive($query)
    {
        return $query->where('is_active',1);
    }

}
