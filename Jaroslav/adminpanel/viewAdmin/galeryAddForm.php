<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Добавить картинку</h4>
    <p>Picture date <?php echo date('d-m-Y'); ?></p>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Картинка добавлена</strong><a href="galery">К галерее</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка добавления картинки</strong><a href="galery">К галерее</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="addgaleryResult" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="title" class="form-control"  required>
            <input type="file" name="picture"  class="form-control" required>
            <input type="submit" class="btn btn-success" value="add picture" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>