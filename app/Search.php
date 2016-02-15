<?php

namespace App;

use App\Http\Requests\Request;

class Search
{
	private $TABLE; //the table to be searched
	private $FIELDS; //Array of fields to search in...

	// public function __construct($TABLE, $FIELDS)
	// {
	// 	$this->TABLE = $TABLE;
	// 	$this->FIELDS = $FIELDS;
	// }

	public function search($modelTable, $fields)
	{
		$search = $modelTable;


		foreach ($fields as $field) {
			if (\Request::input($field)) {
				$search->orWhere($field, 'like', "%".\Request::input($field)."%");
			}
			
		}

		return $search->get();
	}

	


}