<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$path  = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php' OR $path == 'index'){
	// start admin
	$response = ControllerAdmin::startAdmin();
}
//------------------------- Выход ------------------------
elseif ($path == 'logout') {
	//Выход
	$response = ControllerAdmin::logoutAdmin();
}

//----------------------News
elseif ($path == 'newsAction'){
	$response = ControllerNews::newsList();
}
elseif ($path == 'clientAction'){
	$response = ControllerAdmin::clientList();
}
elseif ($path == 'eventsAction'){
	$response = ControllerNews::eventsList();
}
elseif ($path == 'galery'){
	$response = ControllerNews::galeryList();
}
elseif ($path == 'groupAction'){
	$response = ControllerNews::groupList();
}
elseif ($path == 'usersAction'){
	$response = ControllerAdmin::usersList();
}
elseif($path == 'addnews'){
	$response = ControllerNews::addNewsForm();
}
elseif($path == 'addevents'){
	$response = ControllerNews::addEventsForm();
}

elseif($path == 'addnewsResult'){
	$response = ControllerNews::addNewsResult();
}
elseif($path == 'addeventsResult'){
	$response = ControllerNews::addEventsResult();
}
elseif($path == 'addgroup'){
	$response = ControllerNews::addGroupForm();
}
elseif($path == 'addgroupResult'){
	$response = ControllerNews::addGroupResult();
}
elseif($path == 'addclient'){
	$response = ControllerAdmin::addClientForm();
}
elseif($path == 'addclientResult'){
	$response = ControllerAdmin::addClientResult();
}
elseif($path == 'adduser'){
	$response = ControllerAdmin::addUserForm();
}
elseif($path == 'adduserResult'){
	$response = ControllerAdmin::addUserResult();
}

elseif($path == 'edituser'){
	if(isset($_GET["id"])){
		$response = ControllerAdmin::editUserForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'edituserResult')  {
	if(isset($_GET["id"])){
		$response = ControllerAdmin::editUserResult($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}

elseif($path == 'editclient'){
	if(isset($_GET["id"])){
		$response = ControllerAdmin::editClientForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'editclientResult')  {
	if(isset($_GET["id"])){
		$response = ControllerAdmin::editClientResult($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
//----------------------------
elseif($path == 'editnews'){
	if(isset($_GET["id"])){
		$response = ControllerNews::editNewsForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'editevent'){
	if(isset($_GET["id"])){
		$response = ControllerNews::editEventForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'editnewsResult')  {
	if(isset($_GET["id"])){
		$response = ControllerNews::editNewsResult($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}

elseif($path == 'editgroup'){
	if(isset($_GET["id"])){
		$response = ControllerNews::editGroupForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'editgroupResult')  {
	if(isset($_GET["id"])){
		$response = ControllerNews::editGroupResult($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}

elseif($path == 'editeventResult')  {
	if(isset($_GET["id"])){
		$response = ControllerNews::editEventResult($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}

elseif($path == 'profile') {
	$response = ControllerAdmin::profileTable();
}
elseif($path == 'profileEditResult') {
	$response = ControllerAdmin::profileEditResult();
}
elseif($path == 'deletenews'){
	if(isset($_GET["id"])){
		$response = ControllerNews::deleteNewsForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deletenewsResult'){
	if(isset($_GET["id"])){
		$response = ControllerNews::deleteNewsResult($_GET["id"]);
	}
	else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deleteclient'){
	if(isset($_GET["id"])){
		$response = ControllerAdmin::deleteClientForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deleteclientResult'){
	if(isset($_GET["id"])){
		$response = ControllerAdmin::deleteClientResult($_GET["id"]);
	}
	else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deleteuser'){
	if(isset($_GET["id"])){
		$response = ControllerAdmin::deleteUserForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deleteuserResult'){
	if(isset($_GET["id"])){
		$response = ControllerAdmin::deleteUserResult($_GET["id"]);
	}
	else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deleteevent'){
	if(isset($_GET["id"])){
		$response = ControllerNews::deleteEventForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deleteeventResult'){
	if(isset($_GET["id"])){
		$response = ControllerNews::deleteEventResult($_GET["id"]);
	}
	else{
		$response = ControllerAdmin::error404();
	}
}

elseif($path == 'addpicture'){
	$response = ControllerNews::addGaleryForm();
}

elseif($path == 'addgaleryResult'){
	$response = ControllerNews::addGaleryResult();
}

elseif($path == 'editgalery'){
	if(isset($_GET["id"])){
		$response = ControllerNews::editGaleryForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'editgaleryResult')  {
	if(isset($_GET["id"])){
		$response = ControllerNews::editGaleryResult($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}

elseif($path == 'deletegalery'){
	if(isset($_GET["id"])){
		$response = ControllerNews::deleteGaleryForm($_GET["id"]);
	}else{
		$response = ControllerAdmin::error404();
	}
}
elseif($path == 'deletegaleryResult'){
	if(isset($_GET["id"])){
		$response = ControllerNews::deleteGaleryResult($_GET["id"]);
	}
	else{
		$response = ControllerAdmin::error404();
	}
}



else{
	// Страница не сущестыует
	$response = ControllerAdmin::error404();
}


?>