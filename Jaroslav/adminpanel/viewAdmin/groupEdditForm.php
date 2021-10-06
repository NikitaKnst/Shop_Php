<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Редактировать данные</h4>
    <p>News date <?php echo date('d-m-Y'); ?></p>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Данные изменены</strong><a href="groupAction"> К галерее</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка изменения записи</strong><a href="newsAction">Список новостей</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="editgroupResult?id=<?php echo $rowNews['idGroup']; ?>" method="POST" enctype="multipart/form-data">
        	Title *
            <input type="text" name="title" placeholder="title" class="form-control" value="<?php echo $rowNews['nameGroup']; ?>" required>
			<input type="submit" class="btn btn-success" value="edit group" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>