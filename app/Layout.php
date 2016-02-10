<?php

namespace App;

/**
* Layout. a way to center layout options
*/
class Layout
{
	private $defaults = [];

	function __construct($options = [])
	{
		$settings = [
			'shring-bar' => false,

		];

		$this->defaults = array_merge($settings, $options);
	}

	public function setItem($item, $value)
	{
		if (is_array($value)) {
			return $this->setItemFromArray($item, $array);
		}
		
		return $this->defaults[$item] = $value;
	}

	public function setItemFromArray($item, $value = [])
	{
		foreach ($value as $value) {
			$this->defaults[$item] = $value; 
		}
	}
}