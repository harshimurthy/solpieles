<?php

namespace App;

use App\Http\Requests\Request;

/**
* Layout. a way to center layout options
*/
class Layout
{
	private $single;

	private $defaults = [];
	private $singlePage = null;

	function __construct($options = [], $single = null)
	{
		$settings = [
			'shring-bar' => false,

		];

		$this->defaults = array_merge($settings, $options);
		$this->single = $single || true;
	}

	

	/**
     * Determines if the currect page should be rendered as
     * single page or should have live links.
     * @var Boolean
     */
    function singlePage() 
    {
        /**
         * Routes to be rendered as single page app.
         * @var Array
         */
        $singlepageRoutes = [
            '/' => '/', 
            'home' => 'home', 
            'es' => 'es', 
            'en' => 'en'
        ];

        if (!\Request::segment(1)) {
            return true;
        }

        return array_has($singlepageRoutes, \Request::segment(1));
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