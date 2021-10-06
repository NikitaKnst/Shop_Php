
			<div id="index_foto">
				<img src="../img/mainpagefoto.jpg">
			</div>
			<div id="index_info">	
				<ul>
					<li>Аадресс:</li>
					<li>Телефон: </li>
					<li>Email: </li>
					<li>Банковский счет :</li>
					<li>Тренер:</li>
					<li>Телефон тренера::</li>
				</ul>
			</div>

		<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
	?>