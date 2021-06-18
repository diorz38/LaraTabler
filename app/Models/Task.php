<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'projects';

    protected $fillable = ['kab_id','project_id','user_id','tugas_id','pelatihan_id','tgl_latih','beban','unit_id','catatan'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    /**
     * Get the seksi for this model.
     *
     * @return App\Models\Code
     */

    public function jabatan()
    {
        return $this->belongsTo('App\Models\Code','tugas_id')->where('parent_id',15);
    }
    public function satuan()
    {
        return $this->belongsTo('App\Models\Code','unit_id')->where('parent_id',23);
    }

    public function kegiatan()
    {
        return $this->belongsTo('Modules\Amake\Entities\Project','parent_id');
    }
    public function wilker()
    {
        return $this->belongsTo('App\Models\Wilker','kab_id');
    }
    /**
     * Get the project for this model.
     *
     * @return Modules\Amake\Entities\Project
     */
    public function targetKab()
    {
        return $this->hasMany('Modules\Amake\Entities\Target','project_id');
    }

}
