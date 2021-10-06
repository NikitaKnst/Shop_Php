<?php
class ModelNews{

//---------------------------List news
public static function getNewsActionList() {
	$sql = "SELECT news.*, groups.* FROM news,groups WHERE news.idGroup=groups.idGroup ORDER BY news.date DESC";
	//создать экземпляр класса database
	$database = new database();
	//$rows = массив данных
	$rows = $database->getAll($sql);
	//---------------------------------------------
	return $rows;
}

public static function getEventsActionList() {
	$sql = "SELECT events.*, groups.* FROM events,groups WHERE events.idGroup=groups.idGroup ORDER BY events.date DESC";
	//создать экземпляр класса database
	$database = new database();
	//$rows = массив данных
	$rows = $database->getAll($sql);
	//---------------------------------------------
	return $rows;
}

public static function getGaleryActionList() {
	$sql = "SELECT picture.* FROM picture ORDER BY picture.idPicture DESC";
	//создать экземпляр класса database
	$database = new database();
	//$rows = массив данных
	$rows = $database->getAll($sql);
	//---------------------------------------------
	return $rows;
}

public static function addNews() {
		$result=false;
		if(isset($_POST['save'])){
			if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category'])	) {
				$title=$_POST['title'];
				$title_est=$_POST['title_est'];
				$text=$_POST['description'];
				$text_est=$_POST['description_est'];
				$idCategory=$_POST['category'];
				$date=date('Y-m-d');
				//------------------- закачка картинок на сервер
					$image = $_FILES['picture']['name']; //
					if($image!=""){
					$uploadfile = '../img/'. basename($_FILES['picture']['name']);
					copy($_FILES['picture']['tmp_name'], $uploadfile);
					}
					//-------------------запрос insert в бд
					$sql="INSERT INTO news 	(idNews, idGroup, title, title_est, newsText, date, newsPicture, newsText_est) VALUES (NULL, '$idCategory', '$title', '$title_est', '$text', '$date', '$image', '$text_est')";
					$database = new database();
					$item = $database->executeRun($sql);//результат INSERT
						if($item==true) {
							$result=true;
						}
			}//если данные в форме заполнены
		}//if нажаты кнопка send

		return $result;
	}//end add

public static function addEvents() {
		$result=false;
		if(isset($_POST['save'])){
			if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category'])	) {
				$title=$_POST['title'];
				$title_est=$_POST['title_est'];
				$text=$_POST['description'];
				$text_est=$_POST['description_est'];
				$idCategory=$_POST['category'];
				$date=$_POST['date'];
				//------------------- закачка картинок на сервер
					$image = $_FILES['picture']['name']; //
					if($image!=""){
					$uploadfile = '../img/'. basename($_FILES['picture']['name']);
					copy($_FILES['picture']['tmp_name'], $uploadfile);
					}
					//-------------------запрос insert в бд
					$sql="INSERT INTO events 	(idEvenet, idGroup, title, title_est, comment_rus, comment_est, date, picture) VALUES (NULL, '$idCategory', '$title', '$title_est', '$text', '$text_est', '$date', '$image')";
					$database = new database();
					$item = $database->executeRun($sql);//результат INSERT
						if($item==true) {
							$result=true;
						}
			}//если данные в форме заполнены
		}//if нажаты кнопка send

		return $result;
	}//end add

	public static function addGalery() {
		$result=false;
		if(isset($_POST['save'])){
			if(isset($_POST['title'])) {
				$title=$_POST['title'];
				//------------------- закачка картинок на сервер
					$image = $_FILES['picture']['name']; //
					if($image!=""){
					$uploadfile = '../img/'. basename($_FILES['picture']['name']);
					copy($_FILES['picture']['tmp_name'], $uploadfile);
					}
					//-------------------запрос insert в бд
					$sql="INSERT INTO picture 	(idPicture, pictureGalery, title) VALUES (NULL, '$image', '$title')";
					$database = new database();
					$item = $database->executeRun($sql);//результат INSERT
						if($item==true) {
							$result=true;
						}
			}//если данные в форме заполнены
		}//if нажаты кнопка send

		return $result;
	}//end add



	//-----------------------------------detail news
	public static function getNewsDetail($id)  {
		$sql = "SELECT news.*, groups.* FROM news, groups WHERE news.idGroup=groups.idGroup AND news.idNews=$id ";
		$database = new database();
		$row = $database->getOne($sql);
		return $row;
	}

	public static function getEventsDetail($id)  {
		$sql = "SELECT events.*, groups.* FROM events, groups WHERE events.idGroup=groups.idGroup AND events.idEvenet=$id ";
		$database = new database();
		$row = $database->getOne($sql);
		return $row;
	}

	public static function editNews($id){
		$result=false;
		if(isset($_POST['save']))
			{	if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category']) ){
				$title=$_POST['title'];
				$title_est=$_POST['title_est'];
				$description=$_POST['description'];
				$description_est=$_POST['description_est'];
				$idCategory=$_POST['category'];
				$date=$_POST['date'];
				$oldpicture=$_POST['oldpicture'];
				//-------------------images
					$image = $_FILES['picture']['name'];
					if($image!="" and $image!=$oldpicture){//загрузка новой картинки если выбрана
						$uploadfile = '../img/'.basename($_FILES['picture']['name']);
						copy($_FILES['picture']['tmp_name'], $uploadfile);
						unlink("../img/".$oldpicture);//удаляем старую картинку
					}
					else{
						$image = $oldpicture;// оставим старую если нет новой
					}
					//-----------------------------------------------------------------
					$sql="UPDATE news SET news.idGroup = '$idCategory', news.title = '$title', news.title_est = '$title_est', news.newsText = '$description', news.newsText_est = '$description_est', date = '$date', news.newsPicture = '$image' WHERE news.idNews = $id";
					$database = new database();
					$item = $database->executeRun($sql);
						$result=true;

			}//isset $_post
		}//save
		return $result;
	}//function

	public static function getGaleryDetail($id)  {
		$sql = "SELECT picture.* FROM picture WHERE picture.idPicture=$id ";
		$database = new database();
		$row = $database->getOne($sql);
		return $row;
	}

	public static function editGalery($id){
		$result=false;
		if(isset($_POST['save']))
			{	if(isset($_POST['title'])){
				$title=$_POST['title'];
				$oldpicture=$_POST['oldpicture'];
				//-------------------images
					$image = $_FILES['picture']['name'];
					if($image!="" and $image!=$oldpicture){//загрузка новой картинки если выбрана
						$uploadfile = '../img/'.basename($_FILES['picture']['name']);
						copy($_FILES['picture']['tmp_name'], $uploadfile);
						unlink("../img/".$oldpicture);//удаляем старую картинку
					}
					else{
						$image = $oldpicture;// оставим старую если нет новой
					}
					//-----------------------------------------------------------------
					$sql="UPDATE picture SET picture.title = '$title', picture.pictureGalery = '$image' WHERE picture.idPicture = $id";
					$database = new database();
					$item = $database->executeRun($sql);
						$result=true;

			}//isset $_post
		}//save
		return $result;
	}//function

	public static function editEvent($id){
		$result=false;
		if(isset($_POST['save']))
			{	if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['category']) ){
				$title=$_POST['title'];
				$title_est=$_POST['title_est'];
				$description=$_POST['description'];
				$description_est=$_POST['description_est'];
				$idCategory=$_POST['category'];
				$date=$_POST['date'];
				$oldpicture=$_POST['oldpicture'];
				//-------------------images
					$image = $_FILES['picture']['name'];
					if($image!="" and $image!=$oldpicture){//загрузка новой картинки если выбрана
						$uploadfile = '../img/'.basename($_FILES['picture']['name']);
						copy($_FILES['picture']['tmp_name'], $uploadfile);
						unlink("../img/".$oldpicture);//удаляем старую картинку
					}
					else{
						$image = $oldpicture;// оставим старую если нет новой
					}
					//-----------------------------------------------------------------
					$sql="UPDATE events SET events.idGroup = '$idCategory', events.title = '$title', events.title_est = '$title_est', events.comment_rus = '$description', events.comment_est = '$description_est',  date = '$date', events.picture = '$image' WHERE events.idEvenet = $id";
					$database = new database();
					$item = $database->executeRun($sql);
						$result=true;

			}//isset $_post
		}//save
		return $result;
	}//function

	public static function deleteNews($id){
		$result=false;
		if(isset($_POST['save'])){

			//-----------------images
			$oldpicture=$_POST['oldpicture']; // каринка
				unlink("../img/".$oldpicture);//удалить
			//--------------------------------------

			$sql="DELETE FROM news WHERE news.idNews = $id";
			$database = new database();
			$item = $database->executeRun($sql);
			if($item==true){
				$result=true;
			}// item
		}// save
		return $result;
	}// function

	public static function deleteEvent($id){
		$result=false;
		if(isset($_POST['save'])){

			//-----------------images
			$oldpicture=$_POST['oldpicture']; // каринка
				unlink("../img/".$oldpicture);//удалить
			//--------------------------------------

			$sql="DELETE FROM events WHERE events.idEvenet = $id";
			$database = new database();
			$item = $database->executeRun($sql);
			if($item==true){
				$result=true;
			}// item
		}// save
		return $result;
	}// function

	public static function deleteGalery($id){
		$result=false;
		if(isset($_POST['save'])){

			//-----------------images
			$oldpicture=$_POST['oldpicture']; // каринка
				unlink("../img/".$oldpicture);//удалить
			//--------------------------------------

			$sql="DELETE FROM picture WHERE picture.idPicture = $id";
			$database = new database();
			$item = $database->executeRun($sql);
			if($item==true){
				$result=true;
			}// item
		}// save
		return $result;
	}// function
}//end class
//-----------------------Add News
	

?>