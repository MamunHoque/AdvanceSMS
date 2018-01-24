<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Traits\HasRelationships;
use App\Scopes\SchoolScope;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable,
        HasRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function school()
    {
        return $this->hasOne('App\School');
    }




    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new SchoolScope);

    }


}
