<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

/**
 * User model
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class User extends Authenticatable {
    
    use EntrustUserTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'cabinet_name', 'password',
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
     * Get user interventions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interventions() {
        return $this->hasMany('App\Intervention');
    }

    /**
     * get user patients.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patients() {
        return $this->hasMany('App\Patient');
    }
}
