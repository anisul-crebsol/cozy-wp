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
						<h1 class="page-title">Blog Detail</h1>
						
						<ul class="breadcrumb">
							<li><a href="index.html">Home </a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="blog-detail.html">Blog Detail</a></li>
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
<?php get_template_part ('/includes/content-sigle'); ?>
					<!-- END MAIN CONTENT -->
					
					
					<!-- BEGIN SIDEBAR -->
					<div class="sidebar gray col-sm-4">
						
						<h2 class="section-title">Categories</h2>
						<ul class="categories">
							<li><a href="#">Business <span>(2)</span></a></li>
							<li><a href="#">Commercial <span>(1)</span></a></li>
							<li><a href="#">Land <span>(3)</span></a></li>
							<li><a href="#">Loans <span>(2)</span></a></li>
							<li><a href="#">News and Updates <span>(6)</span></a></li>
							<li><a href="#">Properties for Sale <span>(1)</span></a></li>
							<li><a href="#">Real Estate <span>(1)</span></a></li>
						</ul>
						
						<!-- BEGIN ARCHIVES ACCORDION -->
						<h2 class="section-title">Archives</h2>
						<div id="accordion" class="panel-group blog-accordion">
							<div class="panel">
								<div class="panel-heading">
									<div class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="">
											<i class="fa fa-chevron-right"></i> 2014 (15)
										</a>
									</div>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										<ul>
											<li><a href="#">July (3)</a></li>
											<li><a href="#">June (4)</a></li>
											<li><a href="#">May (1)</a></li>
											<li><a href="#">April (2)</a></li>
											<li><a href="#">March (3)</a></li>
											<li><a href="#">February (1)</a></li>
											<li><a href="#">January (1)</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading">
									<div class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
											<i class="fa fa-chevron-right"></i> 2013 (6)
										</a>
									</div>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">May (1)</a></li>
											<li><a href="#">April (2)</a></li>
											<li><a href="#">March (1)</a></li>
											<li><a href="#">February (2)</a></li>
											<li><a href="#">January (1)</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel">
								<div class="panel-heading">
									<div class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
											<i class="fa fa-chevron-right"></i> 2012 (5)
										</a>
									</div>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">April (1)</a></li>
											<li><a href="#">March (1)</a></li>
											<li><a href="#">February (2)</a></li>
											<li><a href="#">January (1)</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END  ARCHIVES ACCORDION -->
						
						
						<!-- BEGIN TAGS -->
						<h2 class="section-title">Tags</h2>
						<ul class="tags col-sm-12">
							<li><a href="#">Apartments</a></li>
							<li><a href="#">Residential</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Real estate</a></li>
							<li><a href="#">Land</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Villas</a></li>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Commercial</a></li>
							<li><a href="#">Rent</a></li>
						</ul>
						<!-- BEGIN TAGS -->
						
						
						<!-- BEGIN LATEST NEWS -->
						<h2 class="section-title">Latest News</h2>
						<ul class="latest-news">
							<li class="col-md-12">
								<div class="image">
									<a href="blog-detail.html"></a>
									<img src="http://placehold.it/100x100" alt="" />
								</div>
								
								<ul class="top-info">
									<li><i class="fa fa-calendar"></i> July 30, 2014</li>
								</ul>
									
								<h3><a href="blog-detail.html">How to get your dream property for the best price?</a></h3>
							</li>
							<li class="col-md-12">
								<div class="image">
									<a href="blog-detail.html"></a>
									<img src="http://placehold.it/100x100" alt="" />
								</div>
								
								<ul class="top-info">
									<li><i class="fa fa-calendar"></i> July 24, 2014</li>
								</ul>
									
								<h3><a href="blog-detail.html">7 tips to get the best mortgage.</a></h3>
							</li>
							<li class="col-md-12">
								<div class="image">
									<a href="blog-detail.html"></a>
									<img src="http://placehold.it/100x100" alt="" />
								</div>
								
								<ul class="top-info">
									<li><i class="fa fa-calendar"></i> July 05, 2014</li>
								</ul>
								
								<h3><a href="blog-detail.html">House, location or price: What's the most important factor?</a></h3>
							</li>
						</ul>
						<!-- END LATEST NEWS -->
						
					</div>
					<!-- END SIDEBAR -->

				</div>
			</div>
		</div>
		<!-- END CONTENT WRAPPER -->
		
		
<?php get_footer(); ?>