<?php global $wt_cozy; ?>
<div class="parallax colored-bg" style="background-image:url(<?php echo $wt_cozy['newsletter_bg']['url']?>);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <!-- BEGIN NEWSLETTER -->
            <div id="newsletter" class="col-md-7 center">
                <h1 data-animation-direction="from-top" data-animation-delay="50"><?php echo $wt_cozy['section_newsletter_title2']?> <strong><?php echo $wt_cozy['section_newsletter_title']?></strong></h1>
                <p data-animation-direction="from-top" data-animation-delay="50"><?php echo $wt_cozy['section_newsletter_description']?></p>

                <div class="input-group col-md-7 center" data-animation-direction="from-bottom" data-animation-delay="50">
                    <form method="post" action="<?php echo plugin_dir_url('') .'newsletter/do/subscribe.php' ?>" onsubmit="return newsletter_check(this)">
                        <div class="input-group">
                            <input class="newsletter-email form-control" type="email" placeholder="<?php _e( 'Enter your E-mail', 'cozy' );?>" name="ne" size="30" required>
                            <span class="input-group-btn newsletter-td-submit">
                            <input class="newsletter-submit btn btn-default" type="submit" value="<?php echo 'subscribe'; ?>"/>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END NEWSLETTER -->
        </div>
    </div>
</div>