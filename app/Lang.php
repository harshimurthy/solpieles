<?php

namespace App;

use Illuminate\Support\Facades\Session;


class Lang
{
    public $lang;
    private $default = 'es'; // default = en. Optional: en|es

    function __construct() 
    {

       return $this->lang = Session::get('lang', $this->default);

    }

    public function getLang()
    {
        return $this->lang;
    	// return $this->lang = Session::get('lang', 'en');
    }

    public function setLang($lang)
    {
    	Session::put('lang', $lang);
    	
    	return $this->lang = $lang;
    }


}
