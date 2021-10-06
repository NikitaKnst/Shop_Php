<?php
class ControllerAdmin {
	//--------------------start controll
	public static function startAdmin() {
		include_once('viewAdmin/dashboard.php');
	}
	//----------------------admin logout
	public static function logoutAdmin() {
		ModelAdmin::getAdminLogout();
		header('Location:../');//возврат на клиент часть сайта
	}

	public static function profileTable(){
		include_once('viewAdmin/profileTable.php');
	}

	public static function profileEditResult(){
		$result=ModelAdmin::ChangePassword();//запрос на изменение пароля
		include_once('viewAdmin/profileTable.php');
	}

	public static function usersList()	{
		//получить список категорий для формы add news
			$rows = ModelAdmin::getUsersActionList();
			include_once('viewAdmin/usersActionList.php');
	}

	public static function clientList()	{
		//получить список категорий для формы add news
		$rows = ModelAdmin::getClientActionList();
		$rowsIsik = ModelAdmin::getUsersActionList();
		include_once('viewAdmin/clientActionList.php');
	}

	public static function addClientForm()	{
		//получить список категорий для формы add news
		$rowsCategory = ModelCategory::getCategoryActionList();
		$rowsIsik = ModelAdmin::getUsersActionList();
		include_once('viewAdmin/clientAddForm.php');
	}
	public static function addClientResult()		{
		$result = ModelAdmin::addClient();
		include_once('viewAdmin/clientAddForm.php');
	}

	public static function addUserForm()	{
			include_once('viewAdmin/userAddForm.php');
	}
	public static function addUserResult()		{
		$result = ModelAdmin::addUser();
		include_once('viewAdmin/userAddForm.php');
	}

	public static function editUserForm($id){
		$rowNews=ModelAdmin::getUserDetail($id);//однин пользователь
		include_once('viewAdmin/userEdditForm.php');
	}

	public static function editUserResult($id){
		$result = ModelAdmin::editUser($id); // обработка формы edit
		include_once('viewAdmin/userEdditForm.php');
	}

	public static function editClientForm($id){
		$rowsCategory = ModelCategory::getCategoryActionList();
		$rowsIsik = ModelAdmin::getUsersActionList();
		$rowNews=ModelAdmin::getClientDetail($id);//однин пользователь
		include_once('viewAdmin/clientEdditForm.php');
	}

	public static function editClientResult($id){
		$result = ModelAdmin::editClient($id); // обработка формы edit
		include_once('viewAdmin/clientEdditForm.php');
	}

	public static function deleteUserForm($id){
		$rowNews=ModelAdmin::getUserDetail($id);//одна новость
		include_once('viewAdmin/userDeleteForm.php');
	}

	public static function deleteUserResult($id){
		$result = ModelAdmin::deleteUser($id); 
		include_once('viewAdmin/userDeleteForm.php');
	}

	public static function deleteClientForm($id){
		$rowNews=ModelAdmin::getClientDetail($id);//одна новость
		include_once('viewAdmin/clientDeleteForm.php');
	}

	public static function deleteClientResult($id){
		$result = ModelAdmin::deleteClient($id); 
		include_once('viewAdmin/clientDeleteForm.php');
	}

	//------------- страница error
	public static function error404(){
		include_once('viewAdmin/error404.php');
	}
	

}//end class
?>