<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['gender', 'bio', 'photo', 'phone'];

    /**
     * Relationships
     */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
    /**
     * Accessors
     */
    
    /**
     * Mutators
     */
    
    /**
     * Scopes
     */
    
    /**
     * Methods
     */
}
