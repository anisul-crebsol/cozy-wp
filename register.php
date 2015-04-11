<?php
/**
 * Template Name: Register
 * @package cozy
 */
global $wt_cozy;
?>

<?php get_header(); ?>
</head>
<body>
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">

        <!-- BEGIN HEADER -->
        <?php get_template_part('/includes/section-header'); ?>
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
                                <form class="form-style" name="register_new_user">
                                    <input type="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname']; ?>" placeholder="First Name*" class="form-control" />
                                    <input type="text" id="lastname" name="lastname" value="<?php echo $_POST['lastname']; ?>" placeholder="Last Name*" class="form-control" />
                                    <input type="text" id="address" name="address" value="<?php echo $_POST['address']; ?>" placeholder="Address" class="form-control" />
                                    <input type="text" id="postcode" name="postcode" value="<?php echo $_POST['postcode']; ?>" placeholder="Postcode" class="form-control" />
                                    <input type="text" id="city"  name="city" value="<?php echo $_POST['city']; ?>" placeholder="City" class="form-control" />
                                    <input type="text" id="country" name="country" value="<?php echo $_POST['country']; ?>" placeholder="Country" class="form-control" />
                                    <input type="text" id="phone" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="Phone*" class="form-control" />
                                    <input type="email" id="email"  name="email" value="<?php echo $_POST['email']; ?>" placeholder="Email Address*" class="form-control" />
                                    <input type="email" id="confirm_email"  name="confirm_email" placeholder="Confirm Email Address*" class="form-control" />
                                    <input type="password" id="Password" name="Password" placeholder="Password*" class="form-control" />
                                    <input type="password" id="confirm_Password" name="confirm_Password" placeholder="Confirm Password*" class="form-control" />

                                    <div class="checkbox">
                                        <label>
                                            <input id="terms" type="checkbox" name="terms"> I confirm that I have read, understood and accept the <a href="#">Terms of Use</a> and the <a href="#">Privacy Policy</a>.
                                        </label>
                                    </div>
                                    <h5 class="text-center phpmsg"></h5>
                                    <?php
                                    if (!empty($registration_error)) {
                                        echo '<br/><h5 class="text-center">' . ucfirst($registration_error) . '*</h5>';
                                    }
                                    ?>
                                    <button type="button" class="btn btn-fullcolor register_new_user">Create Account</button>
                                </form>

                            </div>

                        </div>

                        <div class="login-info col-sm-4 col-sm-offset-1">
                            <?php echo $post->post_content; ?>

                        </div>
                    </div>  
                    <!-- END MAIN CONTENT -->

                </div>
            </div>
        </div>
        <!-- END CONTENT WRAPPER -->
<script>
    var ajaxHomeUrl = '<?php echo get_site_url(); ?>';
</script>

        <?php get_footer(); ?>