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
	protected $fillable = ['name', 'lang'];

	/**
	 * ===============================================
	 * Accessors (get)
	 */
	
	public function getLangListAttribute()
	{
		$lang = new Lang;
		
		return $lang->lang_list;
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
