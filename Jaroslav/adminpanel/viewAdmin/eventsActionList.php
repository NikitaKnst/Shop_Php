<?php
ob_start();
?>
<!--content -->
	<h4 class="box-title">Events Action List</h4>
	<button class="btn btn-success btn-sm ">
		<a href='addevents' style='color: white'>add events</a>
	</button>
	<table class="table">
		<thead>
			<tr class="d-flex">
				<th style="width:5%">#</th>
				<th style="width:25%">Title</th>
				<th style="width:20%">Group</th>
				<th style="width:20%">Date</th>
				<th style="width:20%">Picture</th>				
				<th style="width:10%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($rows as $row) {
		?>
			<tr>
				<td><?php echo $row['idEvenet']; ?></td>
				<td><?php echo $row['title']; ?></td>

				<td><?php echo $row['nameGroup']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><img src="../img/<?php echo $row['picture']; ?>" alt='' width='100px'></td>
				<td>
								<button class="btn btn-warning btn-sm btn-block">
								<a href='editevent?id=<?php echo $row['idEvenet']; ?>' style='color: white'>edit</a>
								</button>							
								<button class="btn btn-danger btn-sm btn-block">
								<a href='deleteevent?id=<?php echo $row['idEvenet']; ?>' style='color: white'>delete</a>
								</button>
							</td>
						</tr>   
					<?php
						} //end foreach
					?>		                            
					</tbody>
					<tfoot>
						<tr>
							<td colspan=6></td>
						</tr>
					</tfoot>
				</table>
				<!-- end content -->
<?php
	$content = ob_get_clean();
	include "viewAdmin/templates/layout.php"

?>