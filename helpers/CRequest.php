<?php
namespace fec\helpers;
use Yii; 

class CRequest 
{
	public static function getRequest(){
		return Yii::$app->request;
	}
	public static function post($key = ""){
		
		if($key){
			$v = self::getRequest()->post($key);
		}else{
			$v = self::getRequest()->post();
		}
		return $v;
	}
	
	public static function set($key,$val){
		return self::getRequest()->set($key,$val);
	}
	
	public static function get($key = ""){
		if($key){
			$v = self::getRequest()->get($key);
		}else{
			$v = self::getRequest()->get();
		}
		return $v;
	}
	# 得到get 和 post的所有数据。 
	# 如果一个值在get和post中都存在，则post优先。
	public static function param($key = ''){
		if($key){
			$get = self::get();
			$post = self::post();
			if($post[$key]){
				return $post[$key] ;
			}else if($get[$key]){
				return $get[$key] ;
			}else{
				return "";
			}
		}else{
			$get = self::get();
			$post = self::post();
			return array_merge($get,$post);
		}
	}
	# 得到csrfName
	public static function getCsrfName(){
		return self::getRequest()->csrfParam;
	}
	#
	public static function getCsrfValue(){
		return self::getRequest()->getCsrfToken(); 
	}
	//得到csrf的input 的 html
	public static function getCsrfInputHtml(){
		echo '<input class="thiscsrf" type="hidden" value="'.self::getCsrfValue().'" name="'.self::getCsrfName().'" />';
	}
        
       
	public static function getCsrfString(){
		return self::getCsrfName()."=".self::getCsrfValue();
	}
	
}






