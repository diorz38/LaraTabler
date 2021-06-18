<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CkpPivot extends Model
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
    protected $table = 'ckp_pivot';

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
        'ckpkeg',
        'ckpadjust',
        'kode'
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

    public function getKodeAttribute()
    {
        return $this->kab_id.str_pad($this->bln, 2, "0", STR_PAD_LEFT).$this->thn;
    }
    public function setKodeAttribute()
    {
        return $this->kab_id.str_pad($this->bln, 2, "0", STR_PAD_LEFT).$this->thn;
    }

    public function setCkpkegAttribute()
    {
        $avg_ckp = collect([
            ['overall' => $this->ckp_2],
            ['overall' => $this->ckp_3],
            ['overall' => $this->ckp_4],
            ['overall' => $this->ckp_5],
            ['overall' => $this->ckp_6],
            ['overall' => $this->ckp_7],

        ]);
        $real = $avg_ckp->avg('overall');
        return $real;
    }
    public function getCkpkegAttribute()
    {
        $avg_ckp = collect([
            ['overall' => $this->ckp_2],
            ['overall' => $this->ckp_3],
            ['overall' => $this->ckp_4],
            ['overall' => $this->ckp_5],
            ['overall' => $this->ckp_6],
            ['overall' => $this->ckp_7],

        ]);
        $real = $avg_ckp->avg('overall');
        return $real;
    }
    public function setCkpadjustAttribute()
    {
        $min=95;
        $max=97;
        $real = ($this->ckp_2+$this->ckp_3+$this->ckp_4+$this->ckp_5+$this->ckp_6+$this->ckp_7)/6;
        $dif = $min-$real;
        $wew = 20.2-$dif;
        $adjust = 73+$wew;
        if($adjust <= $min) {
             $adjust = $min;
        }
        elseif($adjust >= $max) {
            $adjust = $max;
        }
        return $adjust;
    }
    public function getCkpadjustAttribute()
    {
        $min=95;
        $max=97;
        $real = ($this->ckp_2+$this->ckp_3+$this->ckp_4+$this->ckp_5+$this->ckp_6+$this->ckp_7)/6;
        $dif = $min-$real;
        $wew = 20.2-$dif;
        $adjust = 73+$wew;
        if($adjust <= $min) {
             $adjust = $min;
        }
        elseif($adjust >= $max) {
            $adjust = $max;
        }
        return $adjust;
    }
}
