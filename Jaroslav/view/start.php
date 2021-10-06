<?php
ob_start();
$title = 'Главная';
?>
<div class="container">
			<div id="index_foto">
				<img src="img/mainpagefoto.jpg">
			</div>
			<div id="index_info">
				<p>
					Здесь будет общая информация о том чем занимаются в нашей студии. Здесь будет находится информация о том чем занимаются на уроках танцев.
				</p>
				<p>	
				<ul>Список почему мы особенные
					<li>Причина 1</li>
					<li>Причина 2</li>
					<li>Причина 3</li>
				</ul>
			</div>
</div>

<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";