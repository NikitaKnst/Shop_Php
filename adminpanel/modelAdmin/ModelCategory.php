<?php
class ModelCategory{

	//--------------------------List category
	public static function getCategoryActionList(){
		$sql = "SELECT * FROM groups ORDER BY groups.nameGroup ASC";
			$database = new database();
			$rows = $database->getAll($sql);
				return $rows;
	}

	public static function addGroup() {
		$result=false;
		if(isset($_POST['save'])){
			if(isset($_POST['title'])) {
				$title=$_POST['title'];
					//-------------------запрос insert в бд
					$sql="INSERT INTO groups (idGroup, nameGroup) VALUES (NULL, '$title')";
					$database = new database();
					$item = $database->executeRun($sql);//результат INSERT
						if($item==true) {
							$result=true;
						}
			}//если данные в форме заполнены
		}//if нажаты кнопка send

		return $result;
	}//end add

	public static function getGroupDetail($id)  {
		$sql = "SELECT groups.* FROM groups WHERE groups.idGroup=$id ";
		$database = new database();
		$row = $database->getOne($sql);
		return $row;
	}

	public static function editGroup($id){
		$result=false;
		if(isset($_POST['save']))
			{	if(isset($_POST['title'])){
				$title=$_POST['title'];
					//-----------------------------------------------------------------
					$sql="UPDATE groups SET groups.nameGroup = '$title' WHERE groups.idGroup = $id";
					$database = new database();
					$item = $database->executeRun($sql);
						$result=true;

			}//isset $_post
		}//save
		return $result;
	}//function

	
}


?>