<?php include 'includes/header.php'; ?>

<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-sm-4 border rounded border-default py-5">
			<?php if (validation_errors()) { ?>
			<div class="alert alert-danger text-center" role="alert">
				<p><?php echo validation_errors(); ?></p>
			</div>
			<?php } ?>
			<h3 class="text-center text-primary pb-3"><i class="fas fa-sign-in-alt"> Login</i></h3>
			<form action="<?php echo site_url('main_controller/verify_login'); ?>" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="Enter Username">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Enter Password">
				</div>
				<div class="form-group">
					<input type="submit" class="btn form-control btn-primary" name="login" value="Login">
				</div>
				<div class="form-group text-center">
					<a href="javascript:void(0);" data-toggle="modal" data-target="#registerAccountModal">Sign Up</a>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerAccountModal" tabindex="-1" role="dialog" aria-labelledby="registerAccountModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
		        <h5 class="modal-title text-primary" id="registerAccountModalLabel"><i class="fas fa-user-plus"></i> Sign Up</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<div class="modal-body">
	        	<form action="" method="POST" name="registerAccount">
	        		<div class="form-group">
	        			<input type="text" class="form-control" name="username" placeholder="Enter Username">
	        		</div>
	        		<div class="form-group">
	        			<input type="email" class="form-control" name="emailAddr" placeholder="Enter Email Address">
	        		</div>
	        		<div class="form-group">
	        			<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
	        		</div>
	        		<div class="form-group">
	        			<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
	        		</div>
	        		<div class="row">
	        			<div class="col-sm-6">
	        				<div class="form-group">
	        					<input type="text" class="form-control" name="fName" placeholder="Enter Firstname">
	        				</div>
	        			</div>
	        			<div class="col-sm-6">
	        				<div class="form-group">
	        					<input type="text" class="form-control" name="lName" placeholder="Enter Lastname">
	        				</div>
	        			</div>
	        			<div class="col-sm-6">
	        				 <div class="form-group">
	        				 	<input type="text" class="form-control" name="contactNum" placeholder="Enter Contact Number">
	        				 </div>
	        			</div>
	        		</div>
	        	</form>
	      	</div>
	      	<div class="modal-footer justify-content-center">
		        <button type="button" class="btn btn-primary" onclick="document.registerAccount.submit();">Submit</button>
	      	</div>
	    </div>
  	</div>
</div>

<?php include 'includes/footer.php'; ?>

