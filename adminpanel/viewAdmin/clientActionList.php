<?php
ob_start();
?>
<!--content -->
	<h4 class="box-title">Client Action List</h4>
	<button class="btn btn-success btn-sm ">
		<a href='addclient' style='color: white'>add client info</a>
	</button>
	<table class="table">
		<thead>
			<tr class="d-flex">
				<th style="width:15%">Child lastname</th>
				<th style="width:15%">Child name</th>
				<th style="width:5%">Child Isikukood</th>
				<th style="width:15%">Parent username</th>
				<th style="width:15%">Parent phone</th>
				<th style="width:15%">Group</th>				
				<th style="width:10%">Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach($rows as $row) {
		?>
			<tr>
				<td><?php echo $row['lastnameChild']; ?></td>
				<td><?php echo $row['firstnameChild']; ?></td>
				<td><?php echo $row['isikukoodChild']; ?></td>
				<td><?php foreach($rowsIsik as $isik){
                              if($isik['isikukoodUser']==$row['isikukoodParent'])
                              echo $isik['username'];
                        } ?></td>
				<td><?php echo $row['phoneParent']; ?></td>
				<td><?php echo $row['nameGroup']; ?></td>
				<td>
								<button class="btn btn-warning btn-sm btn-block">
								<a href='editclient?id=<?php echo $row['isikukoodChild']; ?>' style='color: white'>edit</a>
								</button>							
								<button class="btn btn-danger btn-sm btn-block">
								<a href='deleteclient?id=<?php echo $row['isikukoodChild']; ?>' style='color: white'>delete</a>
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