<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'seksi';

    protected $guarded = ['id'];
    /**
     * Get the parent for this model.
     *
     * @return App\Models\Code
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Seksi','parent_id');
    }

    /**
     * Get the parent for this model.
     *
     * @return App\Models\Seksi
     */
    public function children()
    {
        return $this->hasMany('App\Models\Seksi','parent_id')->withCount('projects');
    }
    /**
     * Get the parent for this model.
     *
     * @return Modules\Amake\Entities\Project
     */
    public function projects()
    {
        return $this->hasMany('Modules\Amake\Entities\Project','seksi_id')->with('targetKab');
    }
}
