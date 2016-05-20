<style>
.form-submit{float:right;
#wp-comment-editor-container{position: absolute;
  top: 90px;
  width: 750px;
  border-style: solid;
border-color: #31A3DD;}


</style>

<?php if ( post_password_required() ) : ?>
	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'weblizar' ); ?></p>
	<?php return; endif; ?>
    <?php if ( have_comments() ) : ?>
	<div class="enigma_comment_section">		
	<div class="enigma_comment_title"><h3><i class="fa fa-comments"></i><?php echo comments_number(__('No Comments','weblizar'), __('1 条回复','weblizar'), '% Comments'); ?></h3></div>
	<?php wp_list_comments( array( 'callback' => 'weblizar_comment' ) ); ?>		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'weblizar' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'weblizar' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'weblizar' ) ); ?></div>
		</nav>
		<?php endif;  ?>
	</div>		
	<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div class="enigma_comment_form_section" style="position:relative;">
	<?php $fields=array(
		/**'author' => '<div class="enigma_form_group"><label for="exampleInputEmail1">'. __( 'Name','weblizar').'<small>*</small></label><input name="author" id="name" type="text" id="exampleInputEmail1" class="enigma_con_input_control"></div>',
		'email' => '<div class="enigma_form_group"><label for="exampleInputPassword1">'. __( 'Email','weblizar').'<small>*</small></label><input  name="email" id="email" type="text" class="enigma_con_input_control"></div>',**/
	);
	function my_fields($fields) { 
		return $fields;
	}
	
	
	
	add_filter('wl_comment_form_default_fields','my_fields');
		$defaults = array(
		'fields'=> apply_filters( 'wl_comment_form_default_fields', $fields ),
		'comment_field'=> '<div class="enigma_form_group"><label for="message"> </label> 
		<textarea id="comment" name="comment" class="enigma_con_textarea_control" rows="5" style="max-width:750px;min-width:750px;"></textarea></div>',		
		'logged_in_as' => '<p class="logged-in-as" style="display:none;">' . __( "Logged in as ",'weblizar' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Log out of this account">'.__(" Log out?",'weblizar').'</a>' . '</p>',
		'title_reply_to' => __( '回复给 %s','weblizar'),
		'id_submit' => 'enigma_send_button',
		'label_submit'=>__( '发表','weblizar'),
		'comment_notes_before'=> '',
		'comment_notes_after'=>'',
		'title_reply'=> '<h2>'.__('评论','weblizar').'</h2>',	   	
		'role_form'=> 'form',		
		);
		comment_form($defaults); ?>		
		
</div>
<?php endif; // If registration required and not logged in ?>