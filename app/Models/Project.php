<?php

namespace App\Models;

use App\Traits\WithWhereHas;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use WithWhereHas;

    protected $table = 'projects';

    protected $guarded = ['id','created_at', 'updated_at'];

    protected $casts = [
        'is_kab' => 'boolean',
        'is_indiv' => 'boolean',
        'tgl_mualai' => 'date',
        'tgl_berakhir' => 'date',
        'jenis_keg' => 'array',
        'tim' => 'array',

    ];
    protected $attributes = [
        'status' => 'approved',
        'is_kab' => 0,
        'is_indiv' => 0,
    ];

    public function scopeInduk($query)
    {
        return $query->whereNull('parent_id');
    }
    public function scopeIndiv($query)
    {
        return $query->where('is_indiv',1);
    }
    public function scopeSubKegiatan($query)
    {
        return $query->where('parent_id','!=',null)->where(function($query) {
            $query->whereNull('is_indiv')->orWhere('is_indiv',0);
        });
    }
    /**
     * Get the parent for this model.
     *
     * @return App\Models\Project
     */
    public function indukKeg()
    {
        return $this->belongsTo('App\Models\Project','parent_id');
    }

    /**
     * Get the parent for this model.
     *
     * @return App\Models\Project
     */
    public function subsKeg()
    {
        return $this->hasMany('App\Models\Project','parent_id')->with('subsKeg');
    }

    public function skf()
    {
        return $this->belongsTo('App\Models\Code','seksi_id')->seksi();
    }
    public function interval()
    {
        return $this->belongsTo('App\Models\Code','interval_id')->select('id','name')->interval();
    }
    public function satuan()
    {
        return $this->belongsTo('App\Models\Code','unit_id')->satuan();
    }
    public function basisKeg()
    {
        return $this->belongsTo('App\Models\Basis','basis_id')->select('id','name');
    }
}
