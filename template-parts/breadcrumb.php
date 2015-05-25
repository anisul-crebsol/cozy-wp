<div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if ( is_single()) { ?>
                    <h1 class="page-title"><?php _e( 'Details', 'cozy' );?></h1>
                <?php }
                else { ?>
                    <h1 class="page-title">
                        <?php
                        if ( is_category() ) { echo single_cat_title('', false); }
                        elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
                            $post_type = get_post_type_object(get_post_type());
                            $slug = $post_type->rewrite;
                            echo $post_type->labels->singular_name;
                        }
                        else { the_title(); }

                        ?></h1>
                <?php } ?>
                <ul class="breadcrumb">
                    <?php if (function_exists('wt_cozy_breadcrumb')){
                        wt_cozy_breadcrumb();
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>