<?php
namespace fec\helpers;
use Yii; 
use yii\captcha\Captcha;
class CCaptcha extends Captcha
{
	public $captchaAction = '/fecadmin/captcha/index';
	
	
}

