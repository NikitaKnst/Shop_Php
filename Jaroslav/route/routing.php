<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE );
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$path  = explode('/', $host)[$num];

if ($path == '' OR $path == 'index.php' OR $path == 'home') {
	//Главная страница
	$response = Controller::startSite();
}
elseif ($path == 'contact'){
	//Страница c контактыми данными 
	$response = Controller::contact();
}
elseif ($path == 'contactSend'){
	// send message form
	$response = Controller::contactSend();
}
elseif ($path == 'dance'){
	// страница с информацией по танцам
	$response = Controller::dance();
}
elseif ($path == 'teatr'){
	// страница с информацией по театру
	$response = Controller::teatr();
}
elseif ($path == 'galery'){
	// страница с галереей фотографий
	$response = Controller::galery();
}
elseif ($path == 'news'){
	// страница с информацией по театру
	$response = Controller::getNews();
}
elseif ($path == 'login'){
	// страница с информацией по театру
	$response = Controller::login();
}
elseif ($path == 'est'){
	//Страница c контактыми данными 
	$response = Controller::est();
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





















