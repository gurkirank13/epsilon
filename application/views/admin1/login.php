<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="container">
		<form action="" method="post">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="heading">
					<span>Sign In</span>
				</div>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" class="form-control" id="username" name="usr" placeholder="Enter username">
				</div>
				<div class="form-group">
					<label for="reg_pswd">Password:</label>
					<input type="password" class="form-control" id="reg_pswd"  name="pswd" placeholder="Enter password">
				</div>
				<div class="row">
					<a id="clg_reg" href="college.php">Not Registered Yet? Register Here</a>
					<button type="submit" class="btn btn-default" class="sign_in" name="sign_in">Sign In</button>
				</div>
			</div>
		</form>
	<div class="clearfix">
	</div>
</div>