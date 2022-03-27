<?php

namespace App\Models;

use App\Traits\WithWhereHas;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
	use WithWhereHas;

    protected $table = 'codes';

    protected $guarded = ['id','created_at', 'updated_at'];

    protected $casts = [
        'is_active' => 'boolean',

    ];
    protected $attributes = [
        'is_active' => 1,
    ];

    public function scopeIsActive($query)
    {
        return $query->where('is_active',1);
    }

    public function scopeBidang($query)
    {
        return $query->where('parent_id',1);
    }
    public function scopeSeksi($query)
    {
        return $query->where('parent_id',8);
    }
    public function scopeJabTugas($query)
    {
        return $query->where('parent_id',15);
    }
    public function scopeJenisKelamin($query)
    {
        return $query->where('parent_id',20);
    }
    public function scopeSatuan($query)
    {
        return $query->where('parent_id',23);
    }
    public function scopePendidikan($query)
    {
        return $query->where('parent_id',36);
    }
    public function scopeInterval($query)
    {
        return $query->where('parent_id',58);
    }
    public function scopeJenisKegiatan($query)
    {
        return $query->where('parent_id',63);
    }

}
