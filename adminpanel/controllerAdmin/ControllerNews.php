<?php

class ControllerNews {

	public static function newsList()	{
		//получить список новостей
		$rows = ModelNews::getNewsActionList();
		include_once('viewAdmin/newsActionList.php');
	}

	public static function eventsList()	{
		//получить список мероприятий
		$rows = ModelNews::getEventsActionList();
		include_once('viewAdmin/eventsActionList.php');
	}

	public static function galeryList()	{
		//получить список мероприятий
		$rows = ModelNews::getGaleryActionList();
		include_once('viewAdmin/galeryActionList.php');
	}

	public static function groupList()	{
		//получить список категорий для формы add news
			$rows = ModelCategory::getCategoryActionList();
			include_once('viewAdmin/categoryActionList.php');
	}

	//add news form
	public static function addNewsForm()	{
		//получить список категорий для формы add news
			$rowsCategory = ModelCategory::getCategoryActionList();
			include_once('viewAdmin/newsAddForm.php');
	}
	//add events form
	public static function addEventsForm()	{
		//получить список категорий для формы add events
			$rowsCategory = ModelCategory::getCategoryActionList();
			include_once('viewAdmin/eventsAddForm.php');
	}
	//----------------------------------add news result
	public static function addNewsResult()		{
		$result = ModelNews::addNews();
		include_once('viewAdmin/newsAddForm.php');
	}
	//----------------------------------add news result
	public static function addEventsResult()		{
		$result = ModelNews::addEvents();
		include_once('viewAdmin/eventsAddForm.php');
	}

	public static function addGroupForm()	{
		//получить список категорий для формы add news
			$rowsCategory = ModelCategory::getCategoryActionList();
			include_once('viewAdmin/groupAddForm.php');
	}
	public static function addGroupResult()		{
		$result = ModelCategory::addGroup();
		include_once('viewAdmin/groupAddForm.php');
	}

	public static function editNewsForm($id){
		$rowsCategory = ModelCategory::getCategoryActionList(); //список категорий
		$rowNews=ModelNews::getNewsDetail($id);//одна новость
		include_once('viewAdmin/newsEdditForm.php');
	}

	public static function editNewsResult($id){
		$result = ModelNews::editNews($id); // обработка формы edit
		include_once('viewAdmin/newsEdditForm.php');
	}

	public static function editGroupForm($id){
		$rowNews=ModelCategory::getGroupDetail($id);//одна новость
		include_once('viewAdmin/groupEdditForm.php');
	}

	public static function editGroupResult($id){
		$result = ModelCategory::editGroup($id); // обработка формы edit
		include_once('viewAdmin/groupEdditForm.php');
	}

	public static function editEventForm($id){
		$rowsCategory = ModelCategory::getCategoryActionList(); //список категорий
		$rowNews=ModelNews::getEventsDetail($id);//одна новость
		include_once('viewAdmin/eventEdditForm.php');
	}

	public static function editEventResult($id){
		$result = ModelNews::editEvent($id); // обработка формы edit
		include_once('viewAdmin/eventEdditForm.php');
	}

	public static function editGaleryForm($id){
		$rowsCategory = ModelCategory::getCategoryActionList(); //список категорий
		$rowNews=ModelNews::getGaleryDetail($id);//одна новость
		include_once('viewAdmin/galeryEdditForm.php');
	}

	public static function editGaleryResult($id){
		$result = ModelNews::editGalery($id); // обработка формы edit
		include_once('viewAdmin/galeryEdditForm.php');
	}

	public static function deleteNewsForm($id){
		$rowsCategory = ModelCategory::getCategoryActionList(); //список категорий
		$rowNews=ModelNews::getNewsDetail($id);//одна новость
		include_once('viewAdmin/newsDeleteForm.php');
	}

	public static function deleteNewsResult($id){
		$result = ModelNews::deleteNews($id); 
		include_once('viewAdmin/newsDeleteForm.php');
	}

	public static function deleteEventForm($id){
		$rowsCategory = ModelCategory::getCategoryActionList(); //список категорий
		$rowNews=ModelNews::getEventsDetail($id);//одна новость
		include_once('viewAdmin/eventDeleteForm.php');
	}

	public static function deleteEventResult($id){
		$result = ModelNews::deleteEvent($id); 
		include_once('viewAdmin/eventDeleteForm.php');
	}

	public static function addGaleryForm()	{
		//получить список категорий для формы add news
			$rowsCategory = ModelCategory::getCategoryActionList();
			include_once('viewAdmin/galeryAddForm.php');
	}

	public static function addGaleryResult()		{
		$result = ModelNews::addGalery();
		include_once('viewAdmin/galeryAddForm.php');
	}

	public static function deleteGaleryForm($id){
		$rowsCategory = ModelCategory::getCategoryActionList(); //список категорий
		$rowNews=ModelNews::getGaleryDetail($id);//одна новость
		include_once('viewAdmin/galeryDeleteForm.php');
	}

	public static function deleteGaleryResult($id){
		$result = ModelNews::deleteGalery($id); 
		include_once('viewAdmin/galeryDeleteForm.php');
	}


	
}
?>