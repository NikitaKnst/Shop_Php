<?php
class controllerUser{
public static function loginForm(){
		include_once('view/login.php');
	}
	public static function loginResult(){
		$resultLogIn=modelUser::userLogin();
		include_once('view/login.php');
	}
	public static function logoutAction(){
		modelUser::userLogout();
		include_once('view/login.php');
	}
}//end class