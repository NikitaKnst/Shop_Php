<?php
ob_start();
?>
<!--content-->
<div class="col-xs-9">
    <h4 class="box-title">Добавить мероприятие</h4>
    <p>Current date <?php echo date('d-m-Y'); ?></p>
<?php
//Результат добавить запись - ответ
	if(isset($result)){
		if($result==true){
?>  
		<div class="alert alert-info">
			<strong>Запись добавлена</strong><a href="eventsAction">Список Мероприятий</a>
		</div>
		<?php
		}
		else if($result==false){
		?>
			<div class="alert alert-warning">
				<strong>Ошибка добавления записи</strong><a href="eventsAction">Список мероприятий</a>
			</div>
		<?php
		}
	}
	else{
		?>
        <form action="addeventsResult" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="title" class="form-control"  required>
             <input type="text" name="title_est" placeholder="title_est" class="form-control"  required>
             <input type="date" name="date" placeholder="event date" class="form-control"  required>	
            <select name="category" id="" class="form-control"	>
            	<?php
            		foreach($rowsCategory as $row){
            			echo '<option value="'.$row['idGroup'].'">'.$row['nameGroup'].'</option>';
            		}
            	?>                       
			</select>                                     
            <input type="file" name="picture"  class="form-control" required>
			<textarea name="description" placeholder='text event rus' class="form-control" required=></textarea>
			<textarea name="description_est" placeholder='text event est' class="form-control" required=></textarea>	
            <input type="submit" class="btn btn-success" value="add events" name="save">
            </form>
<?php
	}//end else
?>
</div>
<!--end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"; ?>