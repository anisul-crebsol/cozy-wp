<?php
/**
 * Template Name: Login
 * @package Cozy
 */
global $wt_cozy;

if ($_POST) {
    $login_data = array();
    $login_data['user_login'] = $_POST['Email'];
    $login_data['user_password'] = $_POST['Password'];

    $user_verify = wp_signon($login_data, false);

    if (is_wp_error($user_verify)) {
        if (headers_sent()) {
            die("Redirect failed. Please click on this link: <a href='#'>");
        } else {
            exit(header("Location: /user.php"));
        }
    } else {
        echo "<script type='text/javascript'>window.location='" . home_url() . "'</script>";
        exit();
    }
}
?>

<?php get_header(); ?>

</head>
<body>
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">

        <!-- BEGIN HEADER -->
<?php get_template_part('/template-parts/section-header'); ?>
        <!-- END HEADER -->


        <!-- BEGIN PAGE TITLE/BREADCRUMB -->
<?php get_template_part ('/template-parts/breadcrumb'); ?>
        <!-- END PAGE TITLE/BREADCRUMB -->
        <!-- BEGIN CONTENT WRAPPER -->
        <div class="content">
            <div class="container">
                <div class="row">

                    <!-- BEGIN MAIN CONTENT -->
                    <div class="main col-sm-12">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                    ?>
                        <div class = "login col-sm-5 col-sm-offset-1">
                            <h1 class = "center"><?php _e( 'Log in to your Account', 'cozy' ); ?></h1>

                            <div class = "col-sm-12">
                                <form class = "form-style" action = "#" method = "POST">
                                    <input type = "text" name = "Email" placeholder = "Email Address" class = "form-control" />
                                    <input type = "password" name = "Password" placeholder = "Password" class = "form-control" />
                                    <button type = "submit" class = "btn btn-fullcolor"><?php _e( 'Log in', 'cozy' ); ?></button>
                                </form>

                                <p class = "recover-pass"><a href = ""><?php _e( 'Forgot your email address or password?', 'cozy' ); ?></a></p>

                                <a href = "<?php echo esc_url( home_url( '/register/' ) ); ?>" class = "btn btn-default-color"><?php _e( 'Create New Account', 'cozy' ); ?></a>
                            </div>

                        </div>
                        <div class = "login-info col-sm-4 col-sm-offset-1">
                        <?php the_content(); ?>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                    <!--END MAIN CONTENT -->

                </div>
            </div>
        </div>
        <!--END CONTENT WRAPPER -->

<?php get_footer(); ?>