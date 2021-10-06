<html>
<head>
<meta charset="UTF-8">
	<script src="public/js/jquery.js" type="text/javascript"></script>
	<script src="public/js/bootstrap.js" type="text/javascript"></script>
	<link href="public/css/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<header>
			<div class="header_top_part">
				<div class="logo">
					<img src="../img/logo.png">
				</div>
				<div class="firm_title">
					<h1>MTU New Move</h1>
				</div>
				<div class="language_choise">
					<div class="russian_language">
						<a href="../"><img src="../img/rusflag.jpg"></a>
					</div>
					<div class="estonian_language">
						<a><img src="../img/flagestonia.png"></a>
					</div>
				</div>
			</div>
			<nav>
				<?php
					if(isset($_SESSION['role'])){
						if($_SESSION['role']=='admin'){
							echo '<div class="admin_panel_button">
									<p>Управление</p>
								</div>';
						}
					}
				?>
				<ul>
					<li><a href="login" id="first_item" class="nav_button">LogIn</a></li>
					<li><a href="contact" class="nav_button">Kontakt</a></li>
					<li><a href="galery" class="nav_button">Galery</a></li>
					<li><a href="news" class="nav_button">Uudised</a></li>
					<li><a href="teatr" class="nav_button">Teatre</a></li>
					<li><a href="dance" class="nav_button">Tantsud</a></li>
					<li><a href="./" class="nav_button">Koduleht</a></li>
					<?php
					if(isset($_SESSION['role'])){
						if($_SESSION['role']=='admin' OR $_SESSION['role']=='client'){
							echo '<li><a href="logout">Выход</a></li>';
						}
					}
				?>
				</ul>
			</nav>
		</header>
		<main>
			<?php
				if(isset($content))
				{
					echo $content;
				}
			?>
		</main>
		<footer>
			<div class="firm_name">
				<p>MTU New Move</p>
			</div>
			<div class="slogan">
				<p>Slogan: Здесь будет слоган</p>
			</div>
			<div class="footer_info">
				<p>email:move@mail.ru</p>
				<p>Телефон: +372 112112</p>
			</div>
		</footer>


	 
	
		
	


	<!-- 
    	Free Responsive Template by templatemo
    	http://www.templatemo.com
	-->

</body>
</html>