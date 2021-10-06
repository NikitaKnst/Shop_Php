<?php
ob_start();
?>
	<div class="dance_teatre_info">
			<p>
				Teater lastele – see ei ole ainult kasulikke oskusi, laps saab võimaluse mängides ja фантазируя, avastada maailma, iseennast, teisi inimesi.
			</p>
			<ul>Tulemus:
				<li>Selge ja õige kõne</li>
				<li>Hea liigutuste koordinatsioon</li>
				<li>Mälude ja tähelepanu areng</li>
				<li>Sotsiaalne kohanemine ja kommunikatsioon</li>
				<li>Fantaasia ja kujutlusvõime areng</li>
			</ul>
		</div>
		<div class="dance_teatre_img">
			<img src="../img/teatrefoto.jpg">
		</div>
		<section class="events">
			<h2>Мероприятия</h2>
			<?php
				foreach ($rows as $eventh){
					echo '<article class="event">';
						echo '<div class="event_img">';
							echo '<img src="../img/'.$eventh['picture'].'">';
						echo '</div>';
						echo '<div class="event_text">';
							echo '<p><b>Название</b>: '.$eventh['title_est'].'</p>';
							echo '<p><b>Дата</b>: '.$eventh['date'].'</p>';
							echo '<p style="margin-bottom:5vw;"><b>Коментарий</b>: '.$eventh['comment_est'].'</p>';
						echo '</div>';
					echo '</article>';
				}
			?>
		</section>

	<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
	?>