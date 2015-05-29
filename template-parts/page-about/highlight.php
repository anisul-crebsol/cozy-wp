<div class="content">
    <div class="container">
        <div class="row">
            <div class="main col-sm-6">
                <div class="center">

                    <?php if ( have_posts() ) : ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>

            <div class="col-sm-6">
                <img id="about-img" src="<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_large' ); echo $url = $thumb['0']; ?>" alt="" data-animation-direction="from-right" data-animation-delay="200" />
            </div>
        </div>
    </div>
</div>