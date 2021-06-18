<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mfd extends Model
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
    protected $table = 'wilayah_bps';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

}
