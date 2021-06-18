<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CkpHitung extends Model
{

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
    protected $table = 'ckp_hitung';

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
    protected $fillable = [];
    protected $appends = [
        'kode',
        'ckpkeg'
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

    public function seksi()
    {
        return $this->belongsTo('App\Models\Seksi','skf_kode','id');
    }
    public function basisKegiatan()
    {
        return $this->belongsTo('Modules\Amake\Entities\BasisKegiatan','basis_id')->select('id','name');
    }

    public function getKodeAttribute()
    {
        return $this->kab_id.\Carbon\Carbon::parse($this->tgl_berakhir)->format('Y').\Carbon\Carbon::parse($this->tgl_berakhir)->format('m');
    }
    public function setKodeAttribute()
    {
        return $this->kab_id.\Carbon\Carbon::parse($this->tgl_berakhir)->format('Y').\Carbon\Carbon::parse($this->tgl_berakhir)->format('m');
    }
    public function getCkpkegAttribute()
    {
        if($this->skor_capaian_target > 100){
            $this->skor_capaian_target = 100;
        }
        return ($this->skor_capaian_target+$this->skor_kerjasama+$this->skor_kualitas+$this->skor_waktu)/4;
    }
    public function setCkpkegAttribute()
    {
        if($this->skor_capaian_target > 100){
            $this->skor_capaian_target = 100;
        }
        return ($this->skor_capaian_target+$this->skor_kerjasama+$this->skor_kualitas+$this->skor_waktu)/4;
    }
}
