<?php
namespace fec\helpers;
use Yii; 
class CConfig
{
	
	
	public static function param($param){
		return Yii::$app->params[$param];
	}
	# 得到当前的配置模板
	public static function getCurrentTheme(){
		return self::param("theme") ? self::param("theme") : 'default';
	}
	# CConfig::getDefaultModuleToken();
	# 得到默认的module  的 token 配置
	public static function getDefaultModuleToken(){
		return self::param("default_module_token") ? self::param("default_module_token") : '';
	}
}