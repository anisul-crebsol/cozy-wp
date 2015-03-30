<?php
/**
 * @package cozy
 */
global $wt_cozy; ?>

<?php get_header(); ?>

</head>
<body>
	<!-- BEGIN WRAPPER -->
	<div id="wrapper">
	
		<!-- BEGIN HEADER -->
<?php get_template_part ('/includes/section-header'); ?>
		<!-- END HEADER -->
		
		
		<!-- BEGIN PAGE TITLE/BREADCRUMB -->
		<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="page-title">Login</h1>
						
						<ul class="breadcrumb">
							<li><a href="index.html">Home </a></li>
							<li><a href="#">Pages</a></li>
							<li><a href="login.html">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE TITLE/BREADCRUMB -->
		
		
		<!-- BEGIN CONTENT WRAPPER -->
		<div class="content">
			<div class="container">
				<div class="row">
				
					<!-- BEGIN MAIN CONTENT -->
					<div class="main col-sm-12">
					
						<div class="login col-sm-5 col-sm-offset-1">
							<h1 class="center">Log in to your Account</h1>
							
							<div class="col-sm-12">
								<form class="form-style">
									<input type="text" name="Email" placeholder="Email Address" class="form-control" />
									<input type="password" name="Password" placeholder="Password" class="form-control" />
									<button type="submit" class="btn btn-fullcolor">Log in</button>
								</form>
							
								<p class="recover-pass"><a href="">Forgot your email address or password?</a></p>
								
								<a href="register.html" class="btn btn-default-color">Create New Account</a>
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