<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE );
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$path  = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php' OR $path == 'home') {
	//Главная страница
	$response = Controller::startSite();
}
elseif ($path == 'it_home'){
	//Страница c контактыми данными 
	$response = Controller::startSite();
}
elseif ($path == 'it_News'){
	//Страница c контактыми данными 
	$response = Controller::it_News();
}
elseif ($path == 'it_shop'){
	//Страница c контактыми данными 
	$response = Controller::shopSite();
}
elseif ($path == 'contact'){
	//Страница c контактыми данными 
	$response = Controller::contact();
}
elseif ($path == 'about_us'){
	//Страница c контактыми данными 
	$response = Controller::about_us();
}
elseif ($path == 'service'){
	//Страница c контактыми данными 
	$response = Controller::service();
}
elseif ($path == 'career'){
	//Страница c контактыми данными 
	$response = Controller::career();
}
elseif ($path == 'contactSend'){
	// send message form
	$response = Controller::contactSend();
}
elseif ($path == 'news'){
	// страница с информацией по театру
	$response = Controller::getNews();
}


elseif ($path == 'login' || $path == "register" ){
	// страница с информацией по театру
	$response = Controller::login();
}
//elseif ($path == 'loginResult') {
	//$response=controllerUser::loginResult()
//}
elseif ($path == 'logout') {
	$response = controllerUser::logoutAction();
}





elseif ($path == 'est'){
	//Страница c контактыми данными 
	$response = Controller::est();
}
//////////////////////////////////////////////*New Nik
elseif ($path == 'data_recovery'){
	//Страница c контактыми данными 
	$response = Controller::data_recovery();
}
//////////////////////////////////////////////*New Vlad
elseif ($path == 'faq'){
	//Страница c контактыми данными 
	$response = Controller::faq();
}
elseif ($path == 'privacy'){
	//Страница c контактыми данными 
	$response = Controller::privacy();
}


//маршрут detail
elseif($path=='detail'){
	//если известен id - номер из адресной строки
	if(isset($_GET['id'])){
		$response = Controller::newsDetail($_GET['id']);
	} else{
		$response = Controller::error404();
	}
}
elseif($path=='productDetail'){
	//если известен id - номер из адресной строки
	if(isset($_GET['id'])){
		$response = Controller::productDetail($_GET['id']);
	}
}

elseif($path=='category'){
	if(isset($_GET['id'])){
		$response = Controller::newsByCategory($_GET['id']);
	}else{
		$response = Controller::error404();
	}
}
elseif($path=='search'){
	if(isset($_GET['text'])){
		$response = Controller::textSearch($_GET['text']);
	}else{
		$response = Controller::error404();
	}
}


elseif($path=='loginResult'){// обработка login
	$response = controllerUser::loginResult();
}
elseif($path== 'logout'){
	$response = controllerUser::logoutAction();
}


elseif($path=='comments'){
	if(isset($_GET['id'])){
		$response = Controller::commentsAdd($_GET['id']);
	}else{
		$response = Controller::error404();
	}
}

elseif($path=='news'){
	$response = Controller::newsList();
}

//....................

?>





















