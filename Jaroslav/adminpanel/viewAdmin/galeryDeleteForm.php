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
			<strong>Данные изменены</strong><a href="galery"> К галерее</a>
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
        <form action="deletegaleryResult?id=<?php echo $rowNews['idPicture']; ?>" method="POST" enctype="multipart/form-data">
        	Title *
            <input type="text" name="title" placeholder="title" class="form-control" value="<?php echo $rowNews['title']; ?>" readonly>
			<p>Old picture                                     
            <input type="text" name="oldpicture" placeholder="oldpicture" class="form-control" value="<?php echo   $rowNews['pictureGalery']; ?>" readonly>
            <img src="../img/<?php echo $rowNews['pictureGalery']; ?>" class="thumbnail" width=150px>
        	</p>
			<input type="submit" class="btn btn-success" value="delete picture" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>