<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
