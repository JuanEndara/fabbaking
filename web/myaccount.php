<!DOCTYPE HTML>
<html>
	<head>
        <?php include_once 'htmlHeader.php'; ?>
	</head>
	<body>
	<!-- container -->
		  <?php include_once 'navMenu.php'; ?>
	<!---start-content----->
	<div class="account">
          <div class="container">
				<div class="col_1_of_account span_1_of_account">
					<h4 class="title">New Customers</h4>
					<h5 class="sub_title">Register Account</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
					<div class="button1">
					   <a href="register.html"><input type="submit" name="Submit" value="Continue"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_account span_1_of_account">
				  <div class="account-title">
	           		<h4 class="title">Registered Customers</h4>
					 <div class="comments-area">
						<form>
							<p>
								<label>Name</label>
								<span>*</span>
								<input type="text" value="">
							</p>
							<p>
								<label>Password</label>
								<span>*</span>
								<input type="password" value="">
							</p>
							 <p id="account-form-remember">
								<label><a href="#">Forget Your Password ? </a></label>
							 </p>
							 <p>
								<input type="submit" value="Login">
							</p>
						</form>
					</div>
			      </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	<!-- footer -->
<?php include_once 'footer.php'; ?>
	<!-- /footer -->
	</body>
</html>

