<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Редактировать данные</h4>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Запись изменена</strong><a href="clientAction">Список данных</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка изменения записи</strong><a href="clientAction">Список данных</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="editclientResult?id=<?php echo $rowNews['isikukoodChild']; ?>" method="POST" enctype="multipart/form-data">
        	Выберите ID код родителя по имени пользователя родителя
            <select name="isikukoodParent" id="" class="form-control"   >
                  <?php
                        foreach($rowsIsik as $row){
                              echo '<option value="'.$row['isikukoodUser'].'">';
                              if($row['isikukoodUser']==$rowNews['isikukoodParent']) echo 'selected';
                              echo '>'.$row['username'].'</option>';
                        }
                  ?>                       
            </select>
            Телефон родителя
            <input type="text" name="phoneParent" placeholder="phoneParent" class="form-control" value="<?php echo $rowNews['phoneParent']; ?>" required>
            Эмайл родителя
            <input type="text" name="emailParent" placeholder="emailParent" class="form-control" value="<?php echo $rowNews['emailParent']; ?>" required>
            Выберите ID код ребенка по имени пользователя ребенка
            <select name="isikukoodChild" id="" class="form-control"	>
            	<?php
            		foreach($rowsIsik as $row){
            			echo '<option value="'.$row['isikukoodUser'].'">';
                              if($row['isikukoodUser']==$rowNews['isikukoodChild']) echo 'selected';
                              echo '>'.$row['username'].'</option>';
            		}
            	?>                       
			</select>
		Имя ребенка
            <input type="text" name="firstnameChild" placeholder="firstnameChild" class="form-control" value="<?php echo $rowNews['firstnameChild']; ?>" required>
            Фамилия ребенка
            <input type="text" name="lastnameChild" placeholder="lastnameChild" class="form-control" value="<?php echo $rowNews['lastnameChild']; ?>" required>
            Group*
            <select name="groupChild" id="" class="form-control"	>
            	<?php
            		foreach($rowsCategory as $row){
            			echo '<option value="'.$row['idGroup'].'">';
            			if($row['idGroup']==$rowNews['groupChild']) echo 'selected';
            			echo '>'.$row['nameGroup'].'</option>';
            		}
            	?>                       
		</select>
		<input type="submit" class="btn btn-success" value="edit data" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>