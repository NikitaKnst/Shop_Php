<?php
/*
 * для выборки данных из базы данных используем запросы,
 * class database из папки inc
 * сохраняем в переменную выбранный массив
 */

class Model {
	//--------------------------------------------
	public static function getNewsDetail($id) {
		$sql = "SELECT news.*, category.category FROM news, category WHERE news.idCategory=category.idCategory AND news.idNews=".$id;

		$database = new database();
		$row = $database->getOne($sql);// получаем одну запись
		//----------------------------------
		return $row;
	}

	public static function getNews() {
		$sql = "SELECT * FROM news ORDER BY news.date DESC";
		$database = new database();
		$rows = $database->getAll($sql);
		//----------------------------------
		return $rows;
	}

	public static function getGalery() {
		$sql = "SELECT * FROM picture ORDER BY picture.idPicture DESC";
		$database = new database();
		$rows = $database->getAll($sql);
		//----------------------------------
		return $rows;
	}

	public static function getTopProduct() {
		$sql = "SELECT * FROM product ORDER BY product.rating DESC LIMIT 12";
		$database = new database();
		$rows = $database->getAll($sql);
		//----------------------------------
		return $rows;
	}

	public static function getEeventsTeatre() {
		$sql = "SELECT * FROM events WHERE events.idGroup='2' ORDER BY events.date DESC";
		$database = new database();
		$rows = $database->getAll($sql);
		//----------------------------------
		return $rows;
	}

	

		//---------------------добавить коментарий
		public static function getCommentsAdd($id){
			$result=false;
			if (isset($_SESSION['sessionId'])){
				if(isset($_POST['send'])){
					$body=trim($_POST['body']);
					if($body!=""){
						$userId=$_SESSION['userId'];
						$sql = "INSERT INTO comments (id, userId, newsId, body, date) VALUES (NULL, '$userId', '$id', '$body', CURRENT_TIMESTAMP)";
						$database = new database();
						$result = $database->executeRun($sql);
					}
				}
			}
			return $result;
		}

		public static function getSearch($text){
			$sql = "SELECT news.*, category.category FROM `news`,category WHERE news.idCategory=category.idCategory AND news.`newsText` LIKE '%".$text."%' ORDER BY `news`.`date` DESC";
			$database = new database();
			$rows = $database->getAll($sql);//$rows = массив данных
			//-----------------------------------------------------
			return $rows;
		}
	}
//END CLASS


?>