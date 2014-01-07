<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('mpr'))
{
    function mpr($d, $echo = TRUE)
	{
	   if($echo)
	   {
		   echo '<pre>'.print_r($d, true).'</pre>';
	   }
	   else
	   {
	      return '<pre>'.print_r($d, true).'</pre>';
	   } 
	}
}

if ( ! function_exists('mprd'))
{
    function mprd($d) 
	{ 	
	   mpr($d); 	
	   die; 
	}
}

if ( ! function_exists('mvr'))
{
    function mvr($d) 	
	{
	   echo '<pre>'.var_dump($d, true).'</pre>'; 
	}
}

if ( ! function_exists('mvrd'))
{
    function mvrd($d) 
	{
	   mvr($d);
	   die; 
	}
}
if ( ! function_exists('array_pluck'))
{
    function array_pluck($arr,$toPlucked){
		return array_map(function($arr) use($toPlucked){
			return $arr["$toPlucked"];	   	
		},$arr);
	}
}
if ( ! function_exists('permutation_array'))
{
    function permutation_array($arr,$arr_onedimension,$key){
    	$arr3=array();
		foreach($arr_onedimension as $val){
			$arr3=array_merge($arr3,array_pluck_permutation($arr,$val,$key));
		}	
		return $arr3;
    }
    
}
if ( ! function_exists('array_pluck_permutation'))
{
	function array_pluck_permutation($arr,$val,$key){
		 return array_map(function($arr) use($val,$key){
			 return array_push_assoc($arr,$val,$key)	;  	
		 },$arr);
	 }
}
if ( ! function_exists('array_push_assoc'))
{
	function array_push_assoc($array,$value,$key){
	 $array["$key"] = $value;
	 return $array;
	}
}
if ( ! function_exists('generateRandomString'))
{
	function generateRandomString($length = 10){
	 	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}
}
if ( ! function_exists('hashGenerator'))
{
	function hashGenerator($str,$salt_len=10){
		$SALT=generateRandomString($salt_len);
	 	$hash_password="$SALT".substr(sha1("$SALT"."$str"), 0, -strlen("$SALT"));
		return $hash_password;
	}
}
if ( ! function_exists('hashGeneratorChecker'))
{
	function hashGeneratorChecker($salt,$pwd){
		$hash_password="$salt".substr(sha1("$salt"."$pwd"), 0, -strlen("$salt"));
		return $hash_password;
	}
}
?>
