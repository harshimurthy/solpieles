<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];



    /**
     * ====================================================================
     * Relationships
     */
    
    public function contacts()
    {
        return $this->hasMany("App\Contact");
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function role()
    {
        return $this->belongsTo("App\Role");
    }
    
    public function todos()
    {
        return $this->hasMany("App\Todo");
    }    

    /**
     * ====================================================================
     * Scopes
     */

    /**
     * ====================================================================
     * Accessors
     */

    /**
     * ====================================================================
     * Migrations
     */
    
    /**
     * ====================================================================
     * Methods
     */
    
    /**
     * Get a list of the roles available
     * @return collection List of Roles
     */
    public function getRolesListAttribute()
    {
        return \App\Role::lists('role', 'id');
    }

    /**
     * return a count of the todos created by the current user
     * @return [type] [description]
     */
    public function todosCount()
    {
        return $this->todos()->whereDone(0)->count();
    }

    public function hasRole($role = null)
    {
        if( $role ) {
            return $this->getRole() == $role;
        }

        return !! $this->role;
    }

    public function getRole()
    {
        if (!isset($this->role->role)) {
            return null;
        };

        return $this->role->role;
    }

    public function owns($related)
    {
        return $this->id == $related->user_id;
    }
}
