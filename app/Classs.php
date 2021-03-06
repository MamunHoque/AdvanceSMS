<?php

namespace App;

use App\Scopes\SchoolScope;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\HasRelationships;


class Classs extends Model
{

    use HasRelationships;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'school_id', 'teacher_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SchoolScope);
    }


}
