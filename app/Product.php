<?php

namespace App;

use App\Lang;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements SluggableInterface
{
	/**
	 * Slug configuration
	 */
	use SluggableTrait;

	protected $sluggable = [
		'build_from' => 'name',
		'save_to'    => 'slug',
	    'on_update' => true,
	];

	/**
	 * mass assignable
	 */
	protected $fillable = ['name', 'lang', 'short_name', 'description', 'specs'];

	/**
	 * =======================================================
	 * Relationships
	 */
	
	/**
	 * ==================================================
	 * Scopes
	 */
	
	public function scopeLimited($query, $amount)
	{
		return $query->latest('updated_at')->take($amount);
	}

	public function scopeForLang($query)
	{
		$lang = new Lang;

		return $query->whereLang($lang->lang);
	}
	/**
	 * many to many relationship with images
	 * @return [type] 
	 */
	public function images()
	{
		return $this->belongsToMany(Image::class);
	}

	/**
	 * ===============================================
	 * Accessors (get)
	 */
	
	public function getLangListAttribute()
	{
		$lang = new Lang;
		
		return $lang->lang_list;
	}

	public function getImagesListAttribute()
	{
		return $this->images->lists('id', 'id');
	}

	/**
	 * ==================================================
	 * Mutators
	 */
	
	public function setNameAttribute($name)
	{
		$this->attributes['name'] = ucwords($name);
	}



}
