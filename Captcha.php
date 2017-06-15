<?php

defined('CMS_TA') or die;

class Captcha
{
	public static function kod() {

		$num1 = rand(1,9);
		$num2 = rand(1,9);
		$shuma = $num1 + $num2;
		$_SESSION['captcha'] = $shuma;
		return (object) array('nr1' => $num1, 'nr2' => $num2);
	}

	public static function get() {

		return (isset($_SESSION['captcha'])) ? $_SESSION['captcha'] : null;
	}

	public static function set($val) {

		if ($val) {
			$_SESSION['captcha'] = $val;
		}
		return null;
	}

	public static function unsetC() {

		unset($_SESSION['captcha']);
		return null;
	}
}
