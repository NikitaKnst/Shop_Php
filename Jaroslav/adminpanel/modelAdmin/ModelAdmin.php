<?php
class ModelAdmin{
	
	//-------------------Выход из панели
	public static function getAdminLogout() {
		session_destroy();
		unset($_SESSION['sessionId']);
		unset($_SESSION['userId']);
		unset($_SESSION['name']);
		unset($_SESSION['role']);
		unset($_SESSION['email']);
	}

	//------------------------------------ChangePassword admin
		public static function ChangePassword()	{
			$result=array(false, "No correct password");
			if(isset($_POST['send'])){
				//читаем данные из формы
				$currentPassword=$_POST['currentPassword'];
				$newPassword=$_POST['newPassword'];
				$confirmPassword=$_POST['confirmPassword'];
				//-----------------------------------
				if( $newPassword==$confirmPassword && $newPassword!=""){
					//--------выбор хеш пароля из базы данных
					$sql="SELECT * FROM user WHERE email ='".$_SESSION['email']."'";
					$database = new database();
					$item = $database->getOne($sql);
					//-------------------- проверка правильности ввода текущего пароля
					if ( password_verify($currentPassword, $item['password'])) {
						$passwordHash = password_hash($newPassword, PASSWORD_DEFAULT);
						$sql="UPDATE user SET password = '$passwordHash' WHERE user.isikukoodUser = ".$_SESSION['userId'];
						$database = new database();
						$item = $database->executeRun($sql);//записали новый пароль в базу данных
						$result=array(true, "Password changed");
					}
				}else{
						$result=array(false, "No insert change password");
					}
				}
				return $result;
			}//changepassword

		public static function getUsersActionList(){
		$sql = "SELECT * FROM user ORDER BY user.username ASC";
			$database = new database();
			$rows = $database->getAll($sql);
				return $rows;
		}

		public static function addClient() {
		$result=false;
		if(isset($_POST['save'])){
			if(isset($_POST['isikukoodChild'])) {
				$isikukoodChild=$_POST['isikukoodChild'];
				$firstnameChild=$_POST['firstnameChild'];
				$lastnameChild=$_POST['lastnameChild'];
				$isikukoodParent=$_POST['isikukoodParent'];
				$phoneParent=$_POST['phoneParent'];
				$emailParent=$_POST['emailParent'];
				$groupChild=$_POST['groupChild'];
				//------------------- закачка картинок на сервер
					//-------------------запрос insert в бд
					$sql="INSERT INTO user_client_info	(isikukoodChild, firstnameChild, lastnameChild, isikukoodParent, phoneParent, emailParent, groupChild) VALUES ('$isikukoodChild', '$firstnameChild', '$lastnameChild', '$isikukoodParent', '$phoneParent', '$emailParent', '$groupChild')";
					$database = new database();
					$item = $database->executeRun($sql);//результат INSERT
						if($item==true) {
							$result=true;
						}
			}//если данные в форме заполнены
		}//if нажаты кнопка send

		return $result;
	}//end add

	public static function editClient($id) {
		$result=false;
		if(isset($_POST['save'])){
			if(isset($_POST['isikukoodChild'])) {
				$isikukoodChild=$_POST['isikukoodChild'];
				$firstnameChild=$_POST['firstnameChild'];
				$lastnameChild=$_POST['lastnameChild'];
				$isikukoodParent=$_POST['isikukoodParent'];
				$phoneParent=$_POST['phoneParent'];
				$emailParent=$_POST['emailParent'];
				$groupChild=$_POST['groupChild'];
				//------------------- закачка картинок на сервер
					//-------------------запрос insert в бд
					$sql="UPDATE user_client_info SET user_client_info.isikukoodChild = '$isikukoodChild', user_client_info.firstnameChild = '$firstnameChild', user_client_info.lastnameChild = '$lastnameChild', user_client_info.isikukoodParent = '$isikukoodParent', user_client_info.phoneParent = '$phoneParent', user_client_info.emailParent = '$emailParent', user_client_info.groupChild = '$groupChild' WHERE user_client_info.isikukoodChild = $id";
					$database = new database();
					$item = $database->executeRun($sql);//результат INSERT
						if($item==true) {
							$result=true;
						}
			}//если данные в форме заполнены
		}//if нажаты кнопка send

		return $result;
	}//end add

		public static function addUser() {
		$result=false;
		if(isset($_POST['save'])){
			if(isset($_POST['isikukoodUser'])) {
				$isikukoodUser=$_POST['isikukoodUser'];
				$email=$_POST['email'];
				$username=$_POST['username'];
				$role=$_POST['role'];
				$password='$2y$12$mjv/GPng4oQFohhkPl8RPucmgRDFVs/UCVP02US.r92ra09kK4d7u';
				//------------------- закачка картинок на сервер
					//-------------------запрос insert в бд
					$sql="INSERT INTO user	(isikukoodUser, email, password, username, role) VALUES ($isikukoodUser, '$email', '$password', '$username', '$role')";
					$database = new database();
					$item = $database->executeRun($sql);//результат INSERT
						if($item==true) {
							$result=true;
						}
			}//если данные в форме заполнены
		}//if нажаты кнопка send

		return $result;
	}//end add

	public static function getUserDetail($id)  {
		$sql = "SELECT user.* FROM user WHERE user.isikukoodUser=$id ";
		$database = new database();
		$row = $database->getOne($sql);
		return $row;
	}

	public static function getClientDetail($id)  {
		$sql = "SELECT user_client_info.* FROM user_client_info WHERE user_client_info.isikukoodChild=$id ";
		$database = new database();
		$row = $database->getOne($sql);
		return $row;
	}

	public static function editUser($id){
		$result=false;
		if(isset($_POST['save']))
			{	if(isset($_POST['isikukoodUser'])){
				$isikukoodUser=$_POST['isikukoodUser'];
				$email=$_POST['email'];
				$username=$_POST['username'];
				$role=$_POST['role'];
					//-----------------------------------------------------------------
					$sql="UPDATE user SET user.isikukoodUser = '$isikukoodUser', user.email = '$email', user.username = '$username', user.role = '$role' WHERE user.isikukoodUser = $id";
					$database = new database();
					$item = $database->executeRun($sql);
						$result=true;

			}//isset $_post
		}//save
		return $result;
	}//function

	public static function deleteUser($id){
		$result=false;
		if(isset($_POST['save'])){
			$sql="DELETE FROM user WHERE user.isikukoodUser = $id";
			$database = new database();
			$item = $database->executeRun($sql);
			if($item==true){
				$result=true;
			}// item
		}// save
		return $result;
	}// function

	public static function deleteClient($id){
		$result=false;
		if(isset($_POST['save'])){
			$sql="DELETE FROM user_client_info WHERE user_client_info.isikukoodChild = $id";
			$database = new database();
			$item = $database->executeRun($sql);
			if($item==true){
				$result=true;
			}// item
		}// save
		return $result;
	}// function

	public static function getClientActionList() {
	$sql = "SELECT user_client_info.*, groups.* FROM user_client_info,groups WHERE user_client_info.groupChild=groups.idGroup ORDER BY user_client_info.lastnameChild ASC";
	//создать экземпляр класса database
	$database = new database();
	//$rows = массив данных
	$rows = $database->getAll($sql);
	//---------------------------------------------
	return $rows;
}
}//end class



















