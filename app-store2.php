<?php
/*
Template Name: appstore2
*/
?>

<style>
.enigma_blog-img img{width:60px;height:60px;}
.enigma_fuul_blog_detail_padding{width:300px;}


</style>

<?php get_header(); ?>
<div class="enigma_header_breadcrum_title">	
		
</div>
<div class="container" style="position:relative">	
    <a href="<?php echo home_url(); ?>/?page_id=182" style="position:absolute;top:-30px;right:0;width:100px;height:40px;line-height:40px; text-align:center;background:#31A3DD; font-size:16px;color:#fff;box-shadow: 3px 3px 0 rgba(201, 201, 201, 1);z-index:999;display:none;">发布软件</a>
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8" style="width:100%;">
	<?php 
    $mPosts = new WP_Query('cat=12');
	if ( have_posts()): 
	while ( $mPosts->have_posts() ): $mPosts->the_post();?>
	
        
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

        
        
	<?php endwhile; 
	endif; 
	weblizar_navigation(); ?>
	</div>	
	</div>
</div>
<?php get_footer(); ?>