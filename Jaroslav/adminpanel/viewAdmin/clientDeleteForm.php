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
			<strong>Запись удалена</strong><a href="clientAction">Список данных</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка удаления записи</strong><a href="clientAction">Список данных</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="deleteclientResult?id=<?php echo $rowNews['isikukoodChild']; ?>" method="POST" enctype="multipart/form-data">
        	Child Isikukood
            <select name="isikukoodChild" id="" class="form-control"	readonly>
            	<?php
            		foreach($rowsIsik as $row){
            			echo '<option value="'.$row['isikukoodUser'].'">'.$row['isikukoodUser'].'</option>';
            		}
            	?>                       
			</select>
			Child's First Name
            <input type="text" name="firstnameChild" placeholder="firstnameChild" class="form-control" value="<?php echo $rowNews['firstnameChild']; ?>" readonly>
            Child's Last Name
            <input type="text" name="lastnameChild" placeholder="lastnameChild" class="form-control" value="<?php echo $rowNews['lastnameChild']; ?>" readonly>
            Group*
            <select name="groupChild" id="" class="form-control"	readonly>
            	<?php
            		foreach($rowsCategory as $row){
            			echo '<option value="'.$row['idGroup'].'">';
            			if($row['idGroup']==$rowNews['groupChild']) echo 'selected';
            			echo '>'.$row['nameGroup'].'</option>';
            		}
            	?>                       
		</select>
		Parent's Isikukood
		<select name="isikukoodParent" id="" class="form-control"	readonly>
            	<?php
            		foreach($rowsIsik as $row){
            			echo '<option value="'.$row['isikukoodUser'].'">'.$row['isikukoodUser'].'</option>';
            		}
            	?>                       
			</select>
            Parent's phone
            <input type="text" name="phoneParent" placeholder="phoneParent" class="form-control" value="<?php echo $rowNews['phoneParent']; ?>" readonly>
            Parent's email
            <input type="text" name="emailParent" placeholder="emailParent" class="form-control" value="<?php echo $rowNews['emailParent']; ?>" readonly>
			<input type="submit" class="btn btn-success" value="delete data" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>