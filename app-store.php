<?php
/*
Template Name: appstore
*/
?>
<style>
.enigma_blog-img img{width:60px;height:60px;}
.enigma_fuul_blog_detail_padding{width:300px;}
.flss{margin:0 20px;padding: 5px 20px 5px 20px;background-color:white;color:#31A3DD;font-size:16px;font-weight:700; }
a.flss:hover{background-color:#31A3DD;color:white;}
.fflss{margin:0 10px 0 230px;color:#31A3DD;font-size:16px;font-weight:700;}
</style>

<?php get_header(); ?>
<div class="enigma_header_breadcrum_title" style="margin: 0 0 30px 0;"  >	
		
</div>

<div style="margin:0px 10px 30px 0px;  "   >
		<span  class="fflss"  >分类搜索:</span>
		<a class="flss"   href="http://www.sw64.cn/?s=mysql">mysql</a>
		<a class="flss"   href="http://www.sw64.cn/?s=zip">ZIP</a>
		<a class="flss"   href="http://www.sw64.cn/?s=JAVA">JAVA</a>
		<a class="flss"   href="http://www.sw64.cn/?s=audit">audit</a>

</div>
 

<div class="container">	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8" style="width:100%;">
	<?php  
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        // 控制只显示10篇文章，如果将10改成-1将显示所有文章
        'showposts' => 21,
		'category__in'   => array(11),
        'paged' => $paged,
		'orderby' => ID,
		'order' => asc
    );
    query_posts($args); ?>  
	<?php 
	
	
	if ( have_posts()): 
	
	while ( have_posts() ): the_post();?>
	
        
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
						//echo the_permalink();
					?>
				</div>
			</div>
		</div>	
	
        
    <?php endwhile; 
	endif; // 重置query
    the_posts_pagination( array(
        'prev_text'          =>上页,
        'next_text'          =>下页,
        'before_page_number' => '<span class="meta-nav screen-reader-text">第 </span>',
        'after_page_number' => '<span class="meta-nav screen-reader-text"> 页</span>',
    ) );

	wp_reset_query();
	weblizar_navigation(); ?>
	
	</div>	
	
	</div>
</div>
<?php get_footer(); ?>
