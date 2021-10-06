<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Добавить пользователя</h4>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Запись добавлена</strong><a href="usersAction">Список пользователей</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка добавления записи</strong><a href="usersAction">Список пользователей</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="adduserResult" method="POST" enctype="multipart/form-data">
            <input type="text" name="isikukoodUser" placeholder="isikukood" class="form-control"  required>
            <input type="email" name="email" placeholder="email" class="form-control"  required>
            <select name="role" id="" class="form-control">
            	<option value="admin">admin</option>
            	<option value="client">client</option>
			</select>
			<input type="text" name="username" placeholder='username' class="form-control" required>	
            <input type="submit" class="btn btn-success" value="add user" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>