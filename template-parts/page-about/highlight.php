<div class="content">
    <div class="container">

        <?php if ( have_posts() ) : ?>

        <div class="row">
            <div class="main col-sm-6">
                <div class="center">

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                </div>
            </div>

            <div class="col-sm-6">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('blog-listing', array('id' => 'about-img', 'data-animation-direction' => 'from-right', 'data-animation-delay' => '200', 'class' => 'animate-from-right animation-from-right'));
                }
                else {
                    echo '<img src="http://placehold.it/670x592" alt="placeholder" />';
                }
                ?>
            </div>
        </div>

        <?php endif; ?>

    </div>
</div>