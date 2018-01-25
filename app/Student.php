<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\HasRelationships;
use App\Scopes\SchoolScope;



class Student extends Model
{
    use HasRelationships;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','password','father_name','mother_name','birthday','gender','present_address','permanent_address','school_id','class_id','section_id','shifts_id','photo','user_id'
    ];


    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SchoolScope);
    }
}
