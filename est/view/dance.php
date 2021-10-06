<?php
ob_start();
?>
		<div class="dance_teatre_info">
			<p>
				Stuudio New Move pakub kõigile võimaluse alustada tantsida. Lapsed iga ettevalmistamisega vanuses 6-10 aastat saavad õppida nii tantsuliste stiile, nagu:
			</p>
			<ul>
				<li>laste estraadi tants</li>
				<li>show </li>
				<li>jazz</li>
				<li>modern</li>
			</ul>
			<p>
				Tunnid viib diplomeeritud koreograaf ja treener Jaroslav Галицкий kolmapäeviti ja reedeti kell 15.00-16.00 aadressil Madara 33. Täiendava informatsiooni saamiseks võtke ühendust stuudionewmove@gmail.com:
			</p>
		</div>
		<div class="dance_teatre_img">
			<img src="../img/dancefoto.jpeg">
		</div>
		<section class="events">
			<h2>Мероприятия</h2>
			<?php
				foreach ($rows as $eventd){
					echo '<article class="event">';
						echo '<div class="event_img">';
							echo '<img src="../img/'.$eventd['picture'].'">';
						echo '</div>';
						echo '<div class="event_text">';
							echo '<p><b>Название</b>: '.$eventd['title_est'].'</p>';
							echo '<p><b>Дата</b>: '.$eventd['date'].'</p>';
							echo '<p style="margin-bottom:5vw;"><b>Коментарий</b>: '.$eventd['comment_est'].'</p>';
						echo '</div>';
					echo '</article>';
				}
			?>
		</section>

	<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
	?>