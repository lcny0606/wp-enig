<style>
.flss{margin:0 20px;padding: 5px 20px 5px 20px;background-color:white;color:#31A3DD;font-size:16px;font-weight:700; }
a.flss:hover{background-color:#31A3DD;color:white;}
.fflss{margin:0 10px 0 230px;color:#31A3DD;font-size:16px;font-weight:700;}
</style>

<?php get_header(); ?>

<div class="enigma_header_breadcrum_title">	<?php if( is_search() ) : $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("s=$s&paged=$paged&cat=10"); endif; ?>
	<div class="container" style="postion:relative;">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1><?php printf( __( '搜索: %s', 'weblizar' ), '<span>' . get_search_query() . '</span>'  ); ?>
			</h1>
			</div>
		<?php endif; ?>
		<?php rewind_posts(); ?>
		</div>
	</div>	
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
	<div class="col-md-8" style="width:100%;" >
	<?php 
	if ( have_posts()): 
	while ( have_posts() ): the_post();
	get_template_part('post','content'); ?>	
	<?php endwhile;
	weblizar_navigation();
	else :
	get_template_part('nocontent');
	endif; 
	the_posts_pagination( array(
        'prev_text'          =>上页,
        'next_text'          =>下页,
        'before_page_number' => '<span class="meta-nav screen-reader-text">第 </span>',
        'after_page_number' => '<span class="meta-nav screen-reader-text"> 页</span>',
    ) );
	?>	 
	</div>	
	
	</div>
</div>
<?php get_footer(); ?>