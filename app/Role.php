<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['role'];

    /**
     * ============================================
     * Relationship
     */
    
    public function users()
    {
    	return $this->hasMany(User::class);
    }
}
