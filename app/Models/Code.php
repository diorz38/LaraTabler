<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'codes';

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
                  'parent_id',
                  'kode',
                  'name',
                  'short_name',
                  'is_active'
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
     * Get the parent for this model.
     *
     * @return App\Models\Code
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Code','parent_id');
    }

    /**
     * Get the parent for this model.
     *
     * @return Modules\Amake\Entities\Project
     */
    public function children()
    {
        return $this->hasMany('App\Models\Code','parent_id');
    }

}
