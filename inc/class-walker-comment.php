<?php

/** COMMENTS WALKER */
class WT_Cozy_Walker_Comment extends Walker_Comment {
    
    // init classwide variables
    var $tree_type = 'comment';
    var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

    /** CONSTRUCTOR
     * You'll have to use this if you plan to get to the top of the comments list, as
     * start_lvl() only goes as high as 1 deep nested comments */
    function __construct() { ?>
        
        <ul id="comment-list">
        
    <?php }
    
    /** START_LVL 
     * Starts the list before the CHILD elements are added. Unlike most of the walkers,
     * the start_lvl function means the start of a nested comment. It applies to the first
     * new level under the comments that are not replies. Also, it appear that, by default,
     * WordPress just echos the walk instead of passing it to &$output properly. Go figure.  */
    function start_lvl( &$output, $depth = 0, $args = array() ) {       
        $GLOBALS['comment_depth'] = $depth + 1; ?>

                <ul class="children clearfix">
    <?php }

    /** END_LVL 
     * Ends the children list of after the elements are added. */
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $GLOBALS['comment_depth'] = $depth + 1; ?>

        </ul><!-- /.children -->
        
    <?php }
    
    /** START_EL */
    public function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
        $depth++;
        $GLOBALS['comment_depth'] = $depth;
        $GLOBALS['comment'] = $comment; 
        $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); ?>
        
        <li <?php comment_class( $parent_class ); ?> id="comment-<?php comment_ID() ?>">
        <?php echo ( $args['avatar_size'] != 0 ? get_avatar( $comment, $args['avatar_size'] ) :'' ); ?>
            <div id="comment-body-<?php comment_ID() ?>" class="comment-body">
            
                <div class="comment-author vcard author">
                    <?php //echo ( $args['avatar_size'] != 0 ? get_avatar( $comment, $args['avatar_size'] ) :'' ); ?>
                <div class="">
                    <?php $reply_args = array(
                        'depth' => $depth,
                        'max_depth' => $args['max_depth'] );
    
                    comment_reply_link( array_merge( $args, $reply_args ) );  ?>
                </div><!-- /.reply -->
                    <h3><?php echo get_comment_author_link(); ?>
                <small>
                    <?php comment_date(); ?> <?php edit_comment_link( '(Edit)' ); ?>
                </small><!-- /.comment-meta -->
                </h3>
                </div><!-- /.comment-author -->
                
                <div id="comment-content-<?php comment_ID(); ?>" class="comment-content">
                    <?php if( !$comment->comment_approved ) : ?>
                    <em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em>
                    
                    <?php else: comment_text(); ?>
                    <?php endif; ?>
                </div><!-- /.comment-content -->


            </div><!-- /.comment-body -->

    <?php }

    function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>
        
        </li><!-- /#comment-' . get_comment_ID() . ' -->
        
    <?php }
    
    /** DESTRUCTOR
     * I just using this since we needed to use the constructor to reach the top 
     * of the comments list, just seems to balance out :) */
    function __destruct() { ?>
    
    </ul><!-- /#comment-list -->
    <div class="comments-pagination">
        <?php paginate_comments_links(); ?>
    </div>

    <?php }
}

// filter to replace class on reply link
add_filter('comment_reply_link', 'replace_reply_link_class');

function replace_reply_link_class($class){
    $class = preg_replace("/comment-reply-link/", "btn btn-default-color", $class);
    return $class;
}