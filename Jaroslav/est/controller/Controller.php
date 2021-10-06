<?php

class Controller {
	//	стартовая страница
	public static function startSite() {
		include_once('view/start.php');
	}
	// страница Contact - форма
	public static function contact() {
		include_once('view/contact.php');
	}
	public static function dance() {
		$rows=Model::getEeventsDance();
		include_once('view/dance.php');
	}
	public static function teatr() {
		$rows=Model::getEeventsTeatre();
		include_once('view/teatr.php');
	}
	public static function galery() {
		$rows=Model::getGalery();
		include_once('view/galery.php');
	}
	public static function getNews() {
		$rows=Model::getNews();
		include_once('view/news.php');
	}
	public static function login() {
		include_once('view/login.php');
	}
	public static function est() {
		include_once('est/index.php');
	}


	public static function contactSend(){
		error_reporting(0);
		$message=ModelContact::getContactMessage();
		include_once('view/contact.php');
	}

//-----------------------------------------
	public static function newsDetail($id){
		// запрос на получение данных одной новости по id
		$row=Model::getnewsDetail($id);
		// запрос на получение данных списка картинок из таблицы picture по id новости
		$rows=Model::getPictureNews($id);
		//запрос на получение данных списка комментариев из таблицы comments по id новости
		$comments=Model::getCommentsList($id);
		//строим страницу вывода
		include_once('view/newsDetail.php');
	}

	//-------------------------page news List
	public static function newsList(){
		$categories=model::getCategoryList();
		$rows=model::getNewsList();
		$countNews=count($rows);
		include_once('view/newsList.php');
	}
	
	// ------ news by category
	public static function newsByCategory($id){
		$categories=model::getCategoryList();
		$categoryOne=model::getCategoryDetail($id);
		//------------ all news
		$rows=model::getNewsList();
		$countNews=count($rows);// всего новостей в таблице
		//------------------ новости по категории
		$rows=model::getNewsByCategory($id);
		//--------------------
		include_once('view/newsList.php');
	}
	public static function textSearch($text){
		$categories=Model::getCategoryList();
		//------------all news
		$rows=Model::getNewsList();
		$countNews=count($rows);
		//============= $text - строка поиска
		$rows=Model::getSearch($text);
		include_once('view/newsList.php');
	}

	//-------------------- добавить коментарии по id новости
	public static function commentsAdd($id){
		$resultAdd=Model::getCommentsAdd($id);
		if($resultAdd==false){//если добавление не удачно
			$_SESSION['comments']='<p style="color:red;">Не удалось добавить комментарий</p>';
		}
		header('Location:detail?id='.$id);//переход на маршрут для detail новости
	}
}

//END CLASS
?>