<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\HasRelationships;
use App\Scopes\SchoolScope;


class Subject extends Model
{
    use HasRelationships;

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SchoolScope);
    }
    
}
