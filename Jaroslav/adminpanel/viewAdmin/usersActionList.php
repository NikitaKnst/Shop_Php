<?php
ob_start();
?>
<!--content -->
	<h4 class="box-title">Users Action List</h4>
	<button class="btn btn-success btn-sm ">
		<a href='adduser' style='color: white'>add user</a>
	</button>
	<table class="table">
		<thead>
			<tr class="d-flex">
				<th style="width:20%">Username</th>
				<th style="width:5%">Isikukood</th>
				<th style="width:25%">Email</th>
				<th style="width:20%">Role</th>				
				<th style="width:10%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($rows as $row) {
		?>
			<tr>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['isikukoodUser']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['role']; ?></td>
				<td>
								<button class="btn btn-warning btn-sm btn-block">
								<a href='edituser?id=<?php echo $row['isikukoodUser']; ?>' style='color: white'>edit</a>
								</button>							
								<button class="btn btn-danger btn-sm btn-block">
								<a href='deleteuser?id=<?php echo $row['isikukoodUser']; ?>' style='color: white'>delete</a>
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