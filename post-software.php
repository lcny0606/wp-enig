<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
	<ul class="blog-date-left">
		<li class="enigma_post_date">
		<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
		<span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
		<?php else : ?>
		<span class="date"><?php echo get_the_date(); ?></span>
		<?php endif; ?>
		</li>
		<li class="enigma_post_author"><?php echo get_avatar(get_the_author_meta( 'ID' ),96); ?></li>
	</ul>
	<div class="post-content-wrap">
		<div class="enigma_fuul_blog_detail_padding" style="line-height:24px;">
		<h2><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
        <?php 
            $Version = get_post_meta($post->ID, 'Version', true); 
            $Release= get_post_meta($post->ID, 'Release', true);
            $Architecture= get_post_meta($post->ID, 'Architecture', true);
            $Install_Date= get_post_meta($post->ID, 'Install Date', true);
            $Group= get_post_meta($post->ID, 'Group', true);
            $License= get_post_meta($post->ID, 'License', true);
            $Signature= get_post_meta($post->ID, 'Signature', true);
            $Source_RPM= get_post_meta($post->ID, 'Source RPM', true);
            $Build_Date = get_post_meta($post->ID, 'Build Date', true); 
            $Build_Host = get_post_meta($post->ID, 'Build Host', true); 
            $Relocations = get_post_meta($post->ID, 'Relocations', true); 
            $URL = get_post_meta($post->ID, 'URL', true); 
            $Summary = get_post_meta($post->ID, 'Summary', true); 
            $Dependency = get_post_meta($post->ID, 'Dependency', true); 
            $Filepath = get_post_meta($post->ID, 'Filepath', true); 
			$Filepath = nl2br($Filepath); 
            if($Version){
				echo '<b>版本：</b>'.$Version.'<br>'.
					'<b>发布号：</b>'.$Release.'<br>'.
					'<b>架构：</b>'.$Architecture.'<br>'.
					'<b>分类：</b>'.$Group.'<br>'.
					'<b>许可证：</b>'.$License.'<br>'.
					'<b>签名：</b>'.$Signature.'<br>'.
					'<b>源码 RPM：</b>'.$Source_RPM.'<br>'.
					'<b>创建日期：</b>'.$Build_Date.'<br>'.
					'<b>创建HOST：</b>'.$Build_Host.'<br>'.
					'<b>迁移：</b>'.$Relocations.'<br>'.
					'<b>源地址：</b>'.$URL.'<br>'.
					'<b>简介：</b>'.$Summary.'<br>';
            }
			if($Dependency){
				echo '<b>依赖：</b>'.$Dependency.'<br>';
			}
        ?>
		
		<?php
			if($Filepath){
				echo '<b>文件信息：</b><p style="max-height:200px; overflow-y:auto;">'.$Filepath.'<p>';
			}
		?>
		<div class="row">
		<div class="col-md-6 col-sm-3">
		<?php if(get_the_tag_list() != '') { ?>
		<p class="enigma_tags"><?php the_tags( __('Tags : ','weblizar'), '', '<br />'); ?></p>
		<?php } ?>
		</div>
		</div>
		<?php the_content( __( 'Read More' , 'weblizar' ) ); 
		$defaults = array(
              'before'           => '<div class="enigma_blog_pagination"><div class="enigma_blog_pagi">' . __( 'Pages:','weblizar'  ),
              'after'            => '</div></div>',
	          'link_before'      => '',
	          'link_after'       => '',
	          'next_or_number'   => 'number',
	          'separator'        => ' ',
	          'nextpagelink'     => __( 'Next page'  ,'weblizar' ),
	          'previouspagelink' => __( 'Previous page' ,'weblizar'),
	          'pagelink'         => '%',
	          'echo'             => 1
	          );
	          wp_link_pages( $defaults ); ?>
		
		</div>
	</div>
</div>	
<div class="push-right">
<hr class="blog-sep header-sep">
</div>