<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    //

    // Détermine si un menu est actif ou non
    public static function ActiveMenu($url) 
    {

    	$url = trim($url,'/');
    	$activeurl = trim($_SERVER['REQUEST_URI'],'/');

    	switch($url == $activeurl) {
    		case(true):
    			return ' active';
    			break;
    		default:
    			return '';
    		}

    	return $url .' - ' . $activeurl;

        //die;
        //return "Hello World";
    }

}
