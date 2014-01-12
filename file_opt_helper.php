<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$CI =& get_instance();
$CI->load->helper('file');
$CI->load->helper('download');
$CI->load->helper('directory');

if ( ! function_exists('writeToFile'))
{
    function writeToFile($fileName,$content,$mode='a'){
    	write_file($fileName,$content,$mode);
	}
}
if ( ! function_exists('readFile'))
{
    function readFile($fileName){
    	read_file($fileName);
	}
}
if ( ! function_exists('nameOfFile'))
{
    function nameOfFile($directoryPath,$NeedPath=FALSE){
    	$arr=get_filenames($directoryPath,$NeedPath);
    	return mpr($arr);
	}
}
if ( ! function_exists('dirFileInfo'))
{
    function dirFileInfo($directoryPath){
    	$arr=get_dir_file_info($directoryPath);
    	return mpr($arr);
	}
}
if ( ! function_exists('getFileInfo'))
{
    function getFileInfo($fileName){
    	$arr=get_file_info($fileName);
    	return mpr($arr);
	}
}
if ( ! function_exists('mimeOfFile'))
{
    function mimeOfFile($fileName){
    	$arr=get_mime_by_extension($fileName);
    	echo $arr;
	}
}
if ( ! function_exists('downloadFile'))
{
    function downloadFile($fileName,$content){
    	force_download($fileName,$content);
	}
}
if ( ! function_exists('displayDir'))
{
    function displayDir($directoryPath){
    	mpr(directory_map($directoryPath));
	}
}
if ( ! function_exists('delFiles'))
{
    function delFiles($directoryPath,$delInnerFolders=FALSE){
    	delete_files($directoryPath,$delInnerFolders);
	}
}

?>
