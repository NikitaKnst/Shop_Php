<?php
ob_start();
?>
		<aside>
			<div id="archive">
				<p>Архив</p>
			</div>
		</aside>
		<section>
			<?php
			foreach ($rows as $row) {
				echo '<article class="news">';
				echo '<div class="news_title">';
					echo '<h3>'.$row['title_est'].'</h3>';
				echo '</div>';
				echo '<div class="news_img">';
					echo '<img src="../img/'.$row['newsPicture'].'">';
				echo '</div>';
				echo '<div class="news_text">';
					echo '<p>'.$row['newsText_est'].'</p>';
				echo '</div>';
				echo '</article>';

			}
			?>
		</section>

<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
	?>