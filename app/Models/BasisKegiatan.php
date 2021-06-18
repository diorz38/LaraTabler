<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BasisKegiatan extends Model
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
    protected $table = 'basis_kegiatan';

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
                'name',
                'kd',
                'bidang_id',
                'seksi_id',
                'note'
            ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the bidang for this model.
     *
     * @return App\Models\Code
     */
    public function bidang()
    {
        return $this->belongsTo('App\Models\Seksi','bidang_id')->where('parent_id',1);
    }
    /**
     * Get the bidang for this model.
     *
     * @return App\Models\Code
     */
    public function seksi()
    {
        return $this->belongsTo('App\Models\Seksi','seksi_id')->where('parent_id','!=',null)->where('parent_id','!=',1);
    }

    /**
     * Get the bidang for this model.
     *
     * @return App\Models\Code
     */
    public function project()
    {
        return $this->hasMany('Modules\Amake\Entities\Project','basis_id')->where('parent_id','!=',null);
    }

}
