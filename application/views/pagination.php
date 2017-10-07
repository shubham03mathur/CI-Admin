<table class="table table-hover" id="datatable-main">
	<thead>
		<tr>
		  <th>Project Id</th>
		  <th>Project</th>
		  <th>Manager</th>
		  <th>Status</th>
		  <th>Progress</th>
		  <th>Remarks</th>
		  <th>Uploads</th>
		  <th>Initiated at</th>
	  	</tr>
    </thead>
    <tbody>
		<?php 
		if(is_array($client_info) && count($client_info) ) {
         foreach($client_info as $client){
		?>
		<tr>
		  <td><?php echo $client->id ?></td>
		  <td><?php echo $client->project ?></td>
		  <td><?php echo $client->type ?></td> 
		  <td><span class="label label-danger"><?php echo $client->status ?></span></td>
		  <td><span class="badge badge-info"><?php echo $client->progress ?></span></td>
		  <td><?php echo $client->remarks ?></span></td>
		  <td><a class="badge badge-info" href="#"><?php echo $client->file; ?></a></td>
		  <td><?php echo $client->started_at ?></span></td>
		  <td><a class="label label-danger" href="<?php echo base_url().'index.php/add?id='.$client->id ?>">Edit</a></td>
	  	</tr>
	  	<?php } }else {?>
	  	<tr><td colspan="7"><?php echo('No Records Found!'); ?></td></tr>
	  	<?php } ?>
  	</tbody> 
</table>
<ul class="row pagination">
   <li class="row"><?php echo $this->pagination->create_links(); ?></li>
</ul>