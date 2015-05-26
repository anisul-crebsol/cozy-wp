<?php
/**
 * Template Name: Register
 * @package Cozy
 */
global $wt_cozy;

get_header(); ?>

<!-- BEGIN HEADER -->
<?php get_template_part('/template-parts/section-header'); ?>
<!-- END HEADER -->


<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part('/template-parts/breadcrumb'); ?>
<!-- END PAGE TITLE/BREADCRUMB -->


<!-- BEGIN CONTENT WRAPPER -->
<div class="content">
    <div class="container">
        <div class="row">

            <!-- BEGIN MAIN CONTENT -->
            <div class="main col-sm-12">

                <div class="login col-sm-5 col-sm-offset-1">
                    <h1 class="center"><?php _e( 'Create New Account', 'cozy' ); ?></h1>
                    <div class="col-sm-12">
                        <form class="form-style" name="register_new_user">
                            <input type="text" id="firstname" name="firstname" value="<?php
                            if(isset($_POST['firstname'])){ echo $_POST['firstname']; } ?>" placeholder="First Name*" class="form-control" />
                            <input type="text" id="lastname" name="lastname" value="<?php
                            if(isset($_POST['lastname'])){ echo $_POST['lastname']; } ?>" placeholder="Last Name*" class="form-control" />
                            <input type="text" id="address" name="address" value="<?php
                            if(isset($_POST['address'])){ echo $_POST['address']; } ?>" placeholder="Address" class="form-control" />
                            <input type="text" id="postcode" name="postcode" value="<?php
                            if(isset($_POST['postcode'])){ echo $_POST['postcode']; } ?>" placeholder="Postcode" class="form-control" />
                            <input type="text" id="city"  name="city" value="<?php
                            if(isset($_POST['city'])){ echo $_POST['city']; } ?>" placeholder="City" class="form-control" />
                            <input type="text" id="country" name="country" value="<?php
                            if(isset($_POST['country'])){ echo $_POST['country']; } ?>" placeholder="Country" class="form-control" />
                            <input type="text" id="phone" name="phone" value="<?php
                            if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" placeholder="Phone*" class="form-control" />
                            <input type="text" id="username"  name="username" value="<?php
                            if(isset($_POST['username'])){ echo $_POST['username']; } ?>" placeholder="Username*" class="form-control" />
                            <input type="email" id="email"  name="email" value="<?php
                            if(isset($_POST['email'])){ echo $_POST['email']; } ?>" placeholder="Email Address*" class="form-control" />
                            <input type="email" id="confirm_email"  name="confirm_email" placeholder="Confirm Email Address*" class="form-control" />
                            <input type="password" id="Password" name="Password" placeholder="Password*" class="form-control" />
                            <input type="password" id="confirm_Password" name="confirm_Password" placeholder="Confirm Password*" class="form-control" />

                            <div class="checkbox">
                                <label>
                                    <input id="terms" type="checkbox" name="terms"><?php _e( 'I confirm that I have read, understood and accept the <a href="#">Terms of Use</a> and the <a href="#">Privacy Policy</a>.', 'cozy' ); ?>
                                </label>
                            </div>
                            <h5 class="text-center phpmsg"></h5>
                            <?php
                            if (!empty($registration_error)) {
                                echo '<br/><h5 class="text-center">' . ucfirst($registration_error) . '*</h5>';
                            }
                            ?>
                            <button type="button" class="btn btn-fullcolor register_new_user"><?php _e( 'Create Account', 'cozy' ); ?></button>
                        </form>

                    </div>

                </div>

                <div class="login-info col-sm-4 col-sm-offset-1">
                    <?php
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile
                    ?>
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