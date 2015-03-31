<?php
/**
 * @package Cozy
 *
 */


// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php	printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number() ),
									number_format_i18n( get_comments_number() ), '&#8220;' . get_the_title() . '&#8221;' ); ?></h3>
	<br><br>
	<div class="comments">

		<ul>
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
				) );
			?>
		</ul>

	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.'); ?></p>

	<?php endif; ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<div class="col-sm-12">
	<h3><?php comment_form_title( __('Leave a Reply'), __('Leave a Reply to %s' ) ); ?></h3>
	</div>

	<div id="cancel-comment-reply">
		<small><?php cancel_comment_reply_link() ?></small>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() )); ?></p>
	<?php else : ?>

	<form action="<?php echo site_url(); ?>/wp-comments-post.php" method="post" id="commentform" class="form-style">

		<?php if ( is_user_logged_in() ) : ?>

		<div class="col-sm-12">
		<?php printf(__('Logged in as <a href="%1$s">%2$s</a>.'), get_edit_user_link(), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php esc_attr_e('Log out of this account'); ?>"><?php _e('Log out &raquo;'); ?></a> <br><br>
		</div>

		<?php else : ?>

		<div class="col-sm-12">	
		<p>Your email address will no be published. Required fields are marked* <br><br></p>
		</div>
		<div class="col-sm-6">
		<input class="form-control" placeholder="Name*" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		</div>

		<div class="col-sm-6">
		<input placeholder="Email*" class="form-control" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		</div>

		<?php endif; ?>

		<!--<p><small><?php printf(__('<strong>XHTML:</strong> You can use these tags: <code>%s</code>'), allowed_tags()); ?></small></p>-->

		<div class="col-sm-12">
			<textarea name="comment" id="comment" placeholder="Comment*" class="form-control"></textarea> 
		</div>

		<div class="center">
			<input name="submit" type="submit" id="submit" class="btn btn-default-color btn-lg" tabindex="5" value="<?php esc_attr_e('Post Comment'); ?>" />
			<?php comment_id_fields(); ?>
		</div>

		<?php
		/** This filter is documented in wp-includes/comment-template.php */
		do_action( 'comment_form', $post->ID );
		?>

	</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
