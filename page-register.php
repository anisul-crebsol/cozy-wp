<?php
/**
 * Template Name: Register
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
<?php get_template_part ('/includes/section-header'); ?>
		<!-- END HEADER -->
		
		
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part ('/includes/breadcrumb'); ?>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">
					
						<div class="login col-sm-5 col-sm-offset-1">
							<h1 class="center">Create New Account</h1>
							
							<div class="col-sm-12">
								<form class="form-style">
									<input type="text" name="firstname" placeholder="First Name*" class="form-control" />
									<input type="text" name="lastname" placeholder="Last Name*" class="form-control" />
									<input type="text" name="address" placeholder="Address" class="form-control" />
									<input type="text" name="postcode" placeholder="Postcode" class="form-control" />
									<input type="text" name="city" placeholder="City" class="form-control" />
									<input type="text" name="country" placeholder="Country" class="form-control" />
									<input type="text" name="phone" placeholder="Phone*" class="form-control" />
									<input type="email" name="email" placeholder="Email Address*" class="form-control" />
									<input type="email" name="Email" placeholder="Confirm Email Address*" class="form-control" />
									<input type="password" name="Password" placeholder="Password*" class="form-control" />
									<input type="password" name="Password" placeholder="Confirm Password*" class="form-control" />
									
									<div class="checkbox">
										<label>
											<input type="checkbox" name="terms"> I confirm that I have read, understood and accept the <a href="#">Terms of Use</a> and the <a href="#">Privacy Policy</a>.
										</label>
									</div>
									
									<button type="submit" class="btn btn-fullcolor">Create Account</button>
								</form>
							</div>
							
							
						</div>
						
						<div class="login-info col-sm-4 col-sm-offset-1">
							<h1>Why should you create an account?</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse facilisis purus sed justo egestas dapibus. Etiam vel sagittis nisi. Curabitur ac egestas lorem. Sed ut odio iaculis, interdum magna non, mattis dolor. Vestibulum id dignissim elit. Cras ut scelerisque dolor.</p>
							
							<h1>Sell you property with us.</h1>
							<p>Vestibulum rhoncus consequat aliquet. Mauris varius posuere mattis. Duis vitae molestie arcu. Curabitur sollicitudin, velit ut eleifend auctor, nibh orci pharetra risus, a malesuada nisi felis vel turpis. Aliquam fermentum nulla felis, sed molestie libero porttitor in. Vestibulum aliquet eu purus quis pellentesque. Nam eget lacus dolor.</p>
						</div>
					</div>	
					<!-- END MAIN CONTENT -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>