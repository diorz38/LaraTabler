<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Target extends Model
{

    use SoftDeletes;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'targets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
            'user_id',
            'pj_id',
            'kab_id',
            'project_id',
            'tahun',
            'tgl_mulai',
            'tgl_berakhir',
            'target',
            'realisasi',
            'unit_id',
            'notes',
            'skor_capaian_target',
            'skor_kerjasama',
            'skor_waktu',
            'skor_kualitas',
            'skor_overall',
            'skor_ckp'
        ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['tgl_mulai', 'tgl_berakhir'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

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
     * Get the user for this model.
     *
     * @return App\Models\User
     */
    public function pj()
    {
        return $this->belongsTo('App\Models\User','pj_id');
    }


    /**
     * Get the kab for this model.
     *
     * @return App\Models\Wilker
     */
    public function kab()
    {
        return $this->belongsTo('App\Models\Wilker','kab_id');
    }

    /**
     * Get the project for this model.
     *
     * @return Modules\Amake\Entities\Project
     */
    public function project()
    {
        return $this->belongsTo('Modules\Amake\Entities\Project','project_id')->with('satuan');
    }


    /**
     * Get the unit for this model.
     *
     * @return App\Models\Code
     */
    public function unit()
    {
        return $this->belongsTo('App\Models\Code','unit_id');
    }

}
