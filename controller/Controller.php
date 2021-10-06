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
	public static function about_us() {
		include_once('view/it_about.php');
	}
	public static function service() {
		include_once('view/service.php');
	}
	//Login
	public static function login() {
		include_once('view/login.php');
	}
	public static function loginResult() {
		include_once('view/login.php');
	}
	public static function logoutAction() {
		include_once('view/login.php');
	}
	//
	public static function est() {
		include_once('est/index.php');
	}
	public static function shopSite() {
		$rows=Model::getCategoryList();
		$row=Model::getGoodsList();
		include_once('view/shopsite.php');
	}

	public static function contactSend(){
		error_reporting(0);
		$message=ModelContact::getContactMessage();
		include_once('view/contact.php');
	}
	public static function it_News(){
		include_once('view/news.php');
	}
	//---------------------------------------new Nik
	public static function data_recovery(){
		include_once('view/data_recovery.php');
	}
	//---------------------------------------new Vlad
	public static function getNews() {
		$rows=Model::getNews();
		include_once('view/news.php');
	}
		public static function privacy() {
		include_once('view/privacy.php');
	}
	public static function career() {
		include_once('view/career.php');
	}
	public static function faq() {
		include_once('view/Faq.php');
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