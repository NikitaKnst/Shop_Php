<?php
ob_start();
?>
		<div class="dance_teatre_info">
			<p>
				Театр для детей – это не только полезные навыки, ребенок получает возможность, играя и фантазируя, познавать мир, самого себя, окружающих людей.
			</p>
			<ul>Как результат:
				<li>Четкая и правильная речь</li>
				<li>Хорошая координация движений</li>
				<li>Развитие памяти и внимания</li>
				<li>Социальная адаптация и коммуникативность</li>
				<li>Развитие фантазии и воображения</li>
			</ul>
		</div>
		<div id="dance_teatre_img">
			<img src="img/teatrefoto.jpg">
		</div>
		<section class="events">
			<h2>Расписание</h2>
			<div class="schedule_teatre">
				<img src="img/schedule_teatre.png">
			</div>
		</section>
		<section class="events">
			<h2>Мероприятия</h2>
			<?php
			foreach ($rows as $eventth) {
			echo '<article class="event">';
						echo '<div class="event_img">';
							echo '<img src="img/'.$eventth['picture'].'">';
						echo '</div>';
						echo '<div class="event_text">';
							echo '<p><b>Название</b>: '.$eventth['title'].'</p>';
							echo '<p><b>Дата</b>: '.$eventth['date'].'</p>';
							echo '<p style="margin-bottom:5vw;"><b>коментарий</b>: '.$eventth['comment_rus'].'</p>';
						echo '</div>';
					echo '</article>';
				}
			?>
		</section>

		<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
	?>