<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = ['user_id', 'name', 'description', 'done', 'due'];

    /**
     * ====================================================================
     * Relationships
     */
    
    public function user()
    {
    	return $this->belongsTo("App\User");
    }

    /**
     * ====================================================================
     * Scopes
     */
    
    public function scopeDone($query)
    {
        return $query->whereDone(1);
    }

    public function scopePending($query)
    {
        return $query->whereDone(0);
    }

    public function scopeForUser($query)
    {
        return $query->whereUserId(auth()->user()->id);
    }
    /**
     * ====================================================================
     * Accessors
     */
    public function getDueAttribute($time)
    {
        return Carbon::parse($time)->format("Y-m-d");
    }

    /**
     * ====================================================================
     * Mutators
     */

    public function setDueAttribute($time)
    {   
        $format = 'Y-m-d';
        $time = Carbon::parse($time)->format($format); 
        return $this->attributes['due'] = Carbon::createFromFormat($format, $time);
    }


}
