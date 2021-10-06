<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Добавить данные клиента</h4>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Запись добавлена</strong><a href="clientAction">Список данных</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка добавления записи</strong><a href="clientAction">Список данных</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="addclientResult" method="POST" enctype="multipart/form-data">
        	Выберите ID код родителя по имени пользователя родителя
            <select name="isikukoodParent" id="" class="form-control"	>
            	<?php
            		foreach($rowsIsik as $row){
            			echo '<option value="'.$row['isikukoodUser'].'">'.$row['username'].'</option>';
            		}
            	?>                       
			</select>
			<input type="text" name="phoneParent" placeholder="телефон родителя" class="form-control"  required>
			<input type="text" name="emailParent" placeholder="эмайл родителя" class="form-control"  required>
        	Выберите ID код ребенка по имени пользователя ребенка  
            <select name="isikukoodChild" id="" class="form-control"	>
            	<?php
            		foreach($rowsIsik as $row){
            			echo '<option value="'.$row['isikukoodUser'].'">'.$row['username'].'</option>';
            		}
            	?>                       
			</select>
            <input type="text" name="firstnameChild" placeholder="имя ребенка" class="form-control"  required>
            <input type="text" name="lastnameChild" placeholder="фамилия ребенка" class="form-control"  required>
            Group
            <select name="groupChild" id="" class="form-control"	>
            	<?php
            		foreach($rowsCategory as $row){
            			echo '<option value="'.$row['idGroup'].'">'.$row['nameGroup'].'</option>';
            		}
            	?>                       
			</select>
            <input type="submit" class="btn btn-success" value="add client info" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>