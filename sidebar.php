<div  class="cbl"  style="float:right;width:310px;">
<div style="width: 338px;height: 190px;background-color: #31A3DD;font-size: 22px;text-align: center;color: white;border:4px solid #31A3DD;border-radius: 5px;margin-bottom:20px;">
	<span style="padding-bottom:3px;display:block">最新资讯</span>
	<?php  
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$sides_args = array(
			// 控制只显示10篇文章，如果将10改成-1将显示所有文章
			'showposts' => 5,
			'category__in'   => array(9),
			'paged' => $paged,
			'orderby' => ID,
			'order' => asc
		);
		query_posts($sides_args); 
	?> 
	<ul style=" background-color: white;
			  width: 330px;
			  height: 149px;
			  margin: 0px;background-image:url(http://www.sw64.cn/wp-content/themes/enigma/images/overdd.png); background-repeat: repeat-y;
			  float: right;background-position: 8px 14px;
			  font-size: 16px;text-align:left;
			  padding: 5px 0px 0px 40px;color:#31A3DD;
			  ;">
		<?php 
			if ( have_posts()): 
			while ( have_posts() ): the_post();?>
			<li style="width: 280px; height: 26px;overflow:hidden;line-height:32px;margin-bottom:2px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php 
			endwhile; 
			endif; 
		?>
	</ul> 
 </div>

<div style="width: 338px;height: 190px;background-color: #31A3DD;font-size: 22px;text-align: center;color: white;border:4px solid #31A3DD;border-radius: 5px;">
	<span style="padding-bottom:3px;display:block">热门软件</span>
	  
			<?php  
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$sides_args2 = array(
					// 控制只显示10篇文章，如果将10改成-1将显示所有文章
					'showposts' => 5,
					'category__in'   => array(11),
					'paged' => $paged,
					'orderby' => ID,
					'order' => asc
				);
				query_posts($sides_args2); 
			?> 
			<ul style=" background-color: white;
					  width: 330px;
					  height: 149px;
					  margin: 0px;background-image:url(http://www.sw64.cn/wp-content/themes/enigma/images/overdd.png); background-repeat: repeat-y;
					  float: right;background-position: 8px 14px;
					  font-size: 16px;text-align:left;
					  padding: 5px 0px 0px 40px;color:#31A3DD;
					  line-height: 26px;">
				<?php 
					if ( have_posts()): 
					while ( have_posts() ): the_post();?>
					<li style="width: 280px; height: 26px;overflow:hidden;line-height:32px;margin-bottom:2px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php 
					endwhile; 
					endif; 
				?>
			</ul> 
	 </div>
</div>
