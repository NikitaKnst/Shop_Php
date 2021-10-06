<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Удалить мероприятие</h4>
    <p>News date <?php echo date('d-m-Y'); ?></p>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Запись удалена</strong><a href="eventsAction">Список Мероприятий</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка удаления записи</strong><a href="eventsAction">Список мероприятий</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="deleteeventResult?id=<?php echo $rowNews['idEvenet']; ?>" method="POST" enctype="multipart/form-data">
        	Title *
            <input type="text" name="title" placeholder="title" class="form-control" value="<?php echo $rowNews['title']; ?>" readonly>
            <input type="text" name="title_est" placeholder="title_est" class="form-control" value="<?php echo $rowNews['title_est']; ?>" readonly>
            Group*
            <select name="category" id="" class="form-control" disabled>
            	<?php
            		foreach($rowsCategory as $row){
            			echo '<option value="'.$row['idGroup'].'">';
            			if($row['idGroup']==$rowNews['idGroup']) echo 'selected';
            			echo '>'.$row['nameGroup'].'</option>';
            		}
            	?>                       
			</select>
			<p>Old picture                                     
            <input type="text" name="oldpicture" placeholder="oldpicture" class="form-control" value="<?php echo   $rowNews['picture']; ?>" readonly>
            <img src="../img/<?php echo $rowNews['picture']; ?>" class="thumbnail" width=150px>
        	</p>
        	Text news*
			<textarea name="description" placeholder='text event rus' class="form-control" readonly><?php echo $rowNews['comment_rus']; ?></textarea>
			<textarea name="description_est" placeholder='text event est' class="form-control" readonly><?php echo $rowNews['comment_est']; ?></textarea>
			Event date
			<input type="date" name="date" placeholder="oldPicture" class="form-control" value="<?php echo $rowNews['date']; ?>" readonly>
			<input type="submit" class="btn btn-success" value="delete event" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>