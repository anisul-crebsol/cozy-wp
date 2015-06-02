<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Cozy
 *
 */


// Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');

    if ( post_password_required() ) { ?>
        <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','cozy'); ?></p>
    <?php
        return;
    }
?>

<!-- You can start editing here. -->


<?php if ( have_comments() ) : ?>

    <h3 id="comments"><?php printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number() ), number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' ); ?></h3>
    <br><br>

    <?php
        wp_list_comments( array(
            'style'         => 'ul',
            'short_ping'    => true,
            'avatar_size'   => 68,
            'walker'        => new WT_Cozy_Walker_Comment(),
        ) );
    ?>

 <?php else : // this is displayed if there are no comments so far ?>

    <?php if ( comments_open() ) : ?>
        <!-- If comments are open, but there are no comments. -->

    <?php else : // comments are closed ?>
        <!-- If comments are closed. -->
        <p class="nocomments"><?php _e('Comments are closed.','cozy'); ?></p>

    <?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
<div class="row">
    <div class="comments-form">
        <?php 
            $commenter = wp_get_current_commenter();
            $req = get_option( 'require_name_email' );
            $aria_req = ( $req ? " aria-required='true'" : '' );
            $fields =  array(
                'author' => '<div class="col-sm-6"><input id="author" class="form-control" name="author" type="text" placeholder="Name*" value="" size="30"' . $aria_req . '/></div>',
                'email'  => '<div class="col-sm-6"><input id="email" class="form-control" name="email" type="text" placeholder="Email*" value="" size="30"' . $aria_req . '/></div>',
            );
             
            $comments_args = array(
                'fields' =>  $fields,
                'comment_notes_before'      => '',
                'comment_notes_after'       => '',
                'comment_field'             => '<div class="col-sm-12"><textarea name="comment" id="comment" placeholder="Comment*" class="form-control"></textarea></div>',
                'label_submit'              => 'Post Comment',
                'class_submit'              => 'btn btn-default-color btn-lg',
                'id_form'                   => 'commentform',
                'title_reply'               => sprintf( __( 'Leave a Reply','cozy')),
                'cancel_reply_link'         => sprintf( __( 'Cancel reply','cozy')),
                'logged_in_as'              => '<p class="logged-in-as col-sm-12">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
                'must_log_in'         => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
                'comment_notes_before'      => '<p class="comment-notes col-sm-12">' . __( 'Your email address will no be published. Required fields are marked*','cozy' ) . '</p>',
            );

            ob_start();
            comment_form($comments_args);
            $search = array('class="form-submit"','class="comment-form"', 'comment-reply-title');
            $replace = array('class="form-submit center"','class="comment-form form-style"', 'comment-reply-title col-sm-12');
            echo str_replace($search,$replace,ob_get_clean());
        ?>
    </div>
</div>
<?php endif; // if you delete this the sky will fall on your head ?>