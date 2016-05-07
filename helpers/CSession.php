<?php
namespace fec\helpers;
use Yii; 
class CSession
{
	
	public static function getSessionM(){
		return Yii::$app->session;
	}
	
	public static function set($key,$value){
		return self::getSessionM()->set($key,$value);
	}
	//�õ�session
	public static function get($key){
		return self::getSessionM()->get($key);
	}
	
	public static function remove($key){
		return self::getSessionM()->remove($key);
	}
}