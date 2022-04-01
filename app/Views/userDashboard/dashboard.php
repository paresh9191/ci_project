<?php 
$page_title = "Dashboard"; 
echo view('site/header.php'); ?>
<P>welcome <?php $session = session(); echo $session->get('user_name'); ?></p>
<div class="container">
<button  class="btn btn-primary" id="btnclick" >Log out</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">
 
        $(document).ready(function(){
            $("#btnclick").click(function(){
                $.ajax({
                url: "<?php echo base_url('logout'); ?>",
                type: "post",

                success: function (response) {
                    if(response == '1'){
                        console.log('logout');
                        location.reload();
                    }else{
                        console.log('log');
                    }
                    console.log(response)
                }
    });
            });
        });

</script>
	
<div class="container">
		<h3>user List</h3>
		<table id="table_id" class="table table-bordered table-hover dt-responsive">
			<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>DOB</th>
				<th>Gender</th>
				<th>Action</th>
			
			</tr>
			</thead>
			<tbody>
			<?php 
            if(!empty($products)){
            foreach ($products as $product) { ?>
				<tr>
					<td><?= $product['user_id'] ?></td>
					<td><?= $product['user_name'] ?></td>
					<td><?= $product['user_email'] ?></td>
					<td><?= $product['phone'] ?></td>
					<td><?= $product['DOB'] ?></td>
					<td><?= $product['gender'] ?></td>
					<td>
              <a href="<?php echo base_url('userDashboard/dashboard'.$product['user_id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('/'.$product['user_id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
				</tr>
			<?php }  } else { 
                echo 'No data found';
              }?>
			  </tbody>
		</table>
</div>
	

		<?php echo view('site/footer.php'); ?>