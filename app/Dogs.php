<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    function dogsRequiringAntiRabbitBiteShot(){
        return $this->ageGreaterthan(6);
    }
    function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }
}
