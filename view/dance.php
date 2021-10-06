<?php
ob_start();
?>
		<div class="dance_teatre_info">
			<p>
				Stuudio New Move pakub kõigile võimaluse alustada tantsida. Lapsed iga ettevalmistamisega vanuses 6-10 aastat saavad õppida nii tantsuliste stiile, nagu:
			</p>
			<ul>
				<li>детский эстрадный танец</li>
				<li>шоу</li>
				<li>джаз</li>
				<li>модерн</li>
			</ul>
			<p>
				Занятия ведёт дипломированный хореограф и тренер Ярослав Галицкий по средам и пятницам в 15.00-16.00 по адресу Madara 33. Для дополнительной информации обращайтесь stuudionewmove@gmail.com
			</p>
		</div>
		<div class="dance_teatre_img">
			<img src="img/dancefoto.jpeg">
		</div>
		<section class="events">
			<h2>Мероприятия</h2>
			<?php
				foreach ($rows as $eventd){
					echo '<article class="event">';
						echo '<div class="event_img">';
							echo '<img src="img/'.$eventd['picture'].'">';
						echo '</div>';
						echo '<div class="event_text">';
							echo '<p><b>Название</b>: '.$eventd['title'].'</p>';
							echo '<p><b>Дата</b>: '.$eventd['date'].'</p>';
							echo '<p style="margin-bottom:5vw;"><b>Коментарий</b>: '.$eventd['comment_rus'].'</p>';
						echo '</div>';
					echo '</article>';
				}
			?>
		</section>

	<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
	?>