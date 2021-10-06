<?php
ob_start();
?>
<!--content -->
	<h4 class="box-title">Category Action List</h4>
	<button class="btn btn-success btn-sm ">
		<a href='addgroup' style='color: white'>add group</a>
	</button>
	<table class="table">
		<thead>
			<tr class="d-flex">
				<th style="width:5%">#</th>
				<th style="width:25%">Title</th>				
				<th style="width:10%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($rows as $row) {
		?>
			<tr>
				<td><?php echo $row['idGroup']; ?></td>
				<td><?php echo $row['nameGroup']; ?></td>
				<td>
								<button class="btn btn-warning btn-sm btn-block">
								<a href='editgroup?id=<?php echo $row['idGroup']; ?>' style='color: white'>edit</a>
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