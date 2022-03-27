<?php

namespace App\Traits;

trait WithWhereHas {
    public function scopeWithWhereHas($query,$relationship,$condition)
    {
        $query->with($relationship,$condition)->whereHas($relationship,$condition);
    }
}


