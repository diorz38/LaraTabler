<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = true;

    protected $table = 'projects';

    const STATUSES = [
        'success' => 'Success',
        'failed' => 'Failed',
        'processing' => 'Processing',
    ];

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'seksi_id',
        'user_id',
        'basis_id',
        'interval_id',
        'jenis_keg',
        'tahun',
        'nama',
        'target',
        'unit_id',
        'tgl_mulai',
        'tgl_berakhir',
        'tim',
        'is_kab',
        'status_dinas'
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tgl_mulai' => 'date',
        'tgl_berakhir' => 'date',
        'tim' => 'array'
    ];
    protected static function newFactory()
    {
        return \Modules\Amake\Database\factories\ProjectFactory::new();
    }

    /**
     * Get the user for this model.
     *
     * @return App\Models\User
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    /**
     * Get the parent for this model.
     *
     * @return App\Models\Project
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Project','parent_id');
    }

    /**
     * Get the parent for this model.
     *
     * @return App\Models\Project
     */
    public function children()
    {
        return $this->hasMany('App\Models\Project','parent_id')->with('children','targetKab');
    }

    /**
     * Get the seksi for this model.
     *
     * @return App\Models\Code
     */
    public function seksi()
    {
        return $this->belongsTo('App\Models\Seksi','seksi_id')->where('parent_id','!=',null);
    }

    /**
     * Get the seksi for this model.
     *
     * @return App\Models\Code
     */
    public function satuan()
    {
        return $this->belongsTo('App\Models\Code','unit_id')->where('parent_id',23);
    }
    /**
     * Get the seksi for this model.
     *
     * @return App\Models\Code
     */
    public function intervalWaktu()
    {
        return $this->belongsTo('App\Models\Code','interval_id')->where('parent_id',58);
    }

    /**
     * Get the basis for this model.
     *
     * @return App\Models\Basis
     */
    public function basisKegiatan()
    {
        return $this->belongsTo('App\Models\BasisKegiatan','basis_id')->select('id','name');
    }
/**
     * Get the project for this model.
     *
     * @return App\Models\Project
     */
    public function targetKab()
    {
        return $this->hasMany('App\Models\Target','project_id');
    }
    public function ckpHit()
    {
        return $this->hasMany('App\Models\CkpHitung','project_id','id');
    }

    /**
     * Set the tim.
     *
     * @param  string  $value
     * @return void
     */
    public function setTimAttribute($value)
    {
        $this->attributes['tim'] = json_encode($value);
    }
    /**
     * Set the tim.
     *
     * @param  string  $value
     * @return void
     */
    public function setJenisKegAttribute($value)
    {
        $this->attributes['jenis_keg'] = json_encode($value);
    }

    /**
     * Get tim in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getTimAttribute($value)
    {
        return json_decode($value) ?: [];
    }
    /**
     * Get tim in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getJenisKegAttribute($value)
    {
        return json_decode($value) ?: [];
    }

    public function getTglMulaiForHumansAttribute()
    {
        return $this->tgl_mulai->format('d M');
    }

    public function getTglMulaiForEditingAttribute()
    {
        return $this->tgl_mulai->format('Y-m-d');
    }
    public function getTglBerakhirForHumansAttribute()
    {
        return $this->tgl_berakhir->format('d M Y');
    }

    public function getTglBerakhirForEditingAttribute()
    {
        return $this->tgl_berakhir->format('Y-m-d');
    }

}
