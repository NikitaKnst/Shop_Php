
		<section id="galery_section">
			<article>
				<?php
				foreach ($rows as $row) {
					echo '<div class="galery_picture">';
						echo '<img src="../img/'.$row['pictureGalery'].'">';
					echo '</div>';
				}
				?>
			</article>
		</section>


<?php
	$content = ob_get_clean();
	include "view/templates/layout.php";
	?>