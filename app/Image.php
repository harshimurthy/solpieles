<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * mass assignable
     */
    protected $fillable = ['name', 'tags'];

    /**
     * ==========================================
     * Relationships
     */
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * ======================================
     * Accessors
     */
    
    public function getTagsArrayAttribute()
    {

    	return explode(",", $this->tags);
        
    }

    public function getImagesListAttribute()
    {
    	return $this->lists('path', 'id');
    }

    /**
     * =======================================
     * Mutatos
     */
    
    public function setNameAttribute($name)
    {
        return $this->attributes['name'] = ucwords($name);
    }

    /**
     * ========================================
     * Methods
     */
    
    public function getTagsObjectAttribute()
    {
        $tags = explode(',', $this->tags);

        return (object)$tags;
    }
}
