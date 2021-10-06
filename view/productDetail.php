<?php
ob_start();
$title = 'Главная';
?>



<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";