<?php include 'admin/db_connect.php' ?>
<div class="container">
	<div class="col-lg-25">
		<div class="card bg-dark">
			<div class="card-body">
				<h3 class="text-center text-warning"><b>Welcome to Registrar Queuing Management System</b></h3>
			</div>
		</div>
		<div class="card mt-4">
			<div class="card-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8">
							<a href="index.php?page=queue_registration" class="btn btn btn-warning btn-sm col-md-8 float-right"><b>Go to Queue Registration</b> <i class="fa fa-angle-right">
							</i></a>
						</div>
					</div>
					<hr>
					<h4 class="text-center text-dark"><b>Select Customer Queue Serving Display</b></h4>
					<hr class="divider">
					<div class="row">

						<?php 
						$trans = $conn->query("SELECT * FROM transactions where status = 1 order by name asc");
							while($row=$trans->fetch_assoc()):
						?>
						<div class="col-md-4 mt-4">
						<a href="index.php?page=display&id=<?php echo $row['id'] ?>" class="btn btn btn-warning btn-block "><?php echo ucwords($row['name']); ?> <i class="fa fa-angle-right">
							</i></a>
						</div>
					<?php endwhile; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>