



<div style="width:380px;float:left;margin:0;" id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
	
	<div class="post-content-wrap" style="width:380px;">
		<?php if(has_post_thumbnail()): 
		$img = array('class' => 'enigma_img_responsive'); ?>
		<div class="enigma_blog_thumb_wrapper_showcase" style="width:70px;float:left;">						
			<div class="enigma_blog-img">
			<?php the_post_thumbnail('blog_2c_thumb',$img); ?>						
			</div>
		</div>
		<?php endif; ?>
		<div class="enigma_fuul_blog_detail_padding" style="width:300px;padding:0;">
		<h2 style="margin:0"><?php if(!is_single()) {?><a  style="font-size:18px;line-height:20px;" href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
		<?php 
            $Version = get_post_meta($post->ID, 'Version', true); 
            $Summary= get_post_meta($post->ID, 'Summary', true);
            echo $Version."<br><span style='width:260px;height:20px;overflow:hidden;display:block'>".$Summary.'</span>';
        ?>
		
			</div>
		</div>
		
		
</div>	
