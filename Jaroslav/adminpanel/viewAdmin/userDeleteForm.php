<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Удалить данные пользователя</h4>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Запись удалена</strong><a href="usersAction">Список пользователей</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка удаления записи</strong><a href="usersAction">Список пользователей</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="deleteuserResult?id=<?php echo $rowNews['isikukoodUser']; ?>" method="POST" enctype="multipart/form-data">
        	Isikukood *
            <input type="text" name="isikukoodUser" placeholder="isikood" class="form-control" value="<?php echo $rowNews['isikukoodUser']; ?>" readonly>
            Email *
            <input type="text" name="email" placeholder="email" class="form-control" value="<?php echo $rowNews['email']; ?>" readonly>
            Role*
            <select name="role" id="" class="form-control" readonly>
            	<option value="admin">admin</option>
            	<option value="client">client</option>                      
			</select>
        	User_name*
        	<input type="text" name="username" placeholder="username" class="form-control" value="<?php echo $rowNews['username']; ?>" readonly>
			<input type="submit" class="btn btn-success" value="delete user" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>