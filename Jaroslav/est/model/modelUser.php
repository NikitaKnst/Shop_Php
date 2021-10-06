<?php
class modelUser{

public static function userLogin() {
	//если login уже выполнен
		if (isset($_SESSION['sessionId'])) {
			$result=true;
		}
		else{//если login НЕ выполнен
			$result=false;
			$_SESSION['error']='Неправильное имя пользователя или пароль';
			if(isset($_POST['login'])){
				if(isset($_POST['email']) && isset($_POST['password']) && $_POST['email']!="" && $_POST['password']!=""){
					$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
					$password = filter_input(INPUT_POST, 'password');
					$sql="SELECT * FROM user WHERE email ='".$email."'";
					$database = new database();
					$item = $database->getOne($sql);

					//если емайл найден
					if($item!=null){
						$password = $_POST['password'];
						//проверяем емайл и пароль на истину
						if ($email == $item['email'] && password_verify($password, $item['password']))
						{//создаем переменные сессии
							$_SESSION['sessionId']=session_id();
							$_SESSION['userId']=$item['isikukoodUser'];
							$_SESSION['name']=$item['username'];
							$_SESSION['role']=$item['role'];
							$_SESSION['email']=$item['email'];
							$result=true;
						}
					}
				}
			}
		}
		return $result;
}//end userLogin

// выход для польхователя
	public static function userLogout(){
		session_destroy();//уничтожаем сессию
		//даляем переменные
		unset($_SESSION['sessionId']);
		unset($_SESSION['userId']);
		unset($_SESSION['name']);
		unset($_SESSION['role']);
		unset($_SESSION['email']);

	}
	//-------------------------
	public static function userRegister(){
		$result=array(false, 'error register user');// ошибки регистрации
		if(isset($_POST['send'])){
			$errorString='';//собираем ошибки
			$name = $_POST['name'];//имя
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);// емайл
			$password = $_POST['password'];
			$confirm = $_POST['confirm'];
			//------------------
			if(!$email){
				$errorString.="Неправильный емайл<br />";
			}
			if (!$password || !$confirm || mb_strlen($password) < 6){
				$errorString.="Пароль должен быть больше 6 символов <br />";
			}
			if($password!=$confirm){
				$errorString.="Пароли не совпадают<br />";
			}
			if( $errorString=='' ) {
				//кодирование пароля
				$passwordHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
				//апрос - добавить пользователя в таблицу
				$sql="INSERT INTO user (idUser, email, password, username) VALUES (NULL, '$email', '$passwordHash', '$name')";
				$database = new database();
				$item = $database->executeRun($sql);
					if($item)
						$result=array(true);//регистрация удачна
					else
						$result=array(false, 'Ваш емайл уже зарегистриован');//
			}
			else{
				$result=array(false,$errorString);
			}
		}
		return $result;
	}
}//end class
?>