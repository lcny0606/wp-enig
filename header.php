<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta name="keywords"  content="申威 申威处理器 申威社区" />
	<meta name="description"  content="申威社区是国产服务器软件共享平台"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="<?php bloginfo('charset'); ?>" />	
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" /> 
	<?php } ?>
	<link id="favicon" href="http://www.sw64.cn/favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
	<meta property="qc:admins" content="146605630763764636" />
	<script src="/wp-content/themes/enigma/js/respond.js"></script>
	</head>

<body <?php body_class(); ?>>
<p style="font-size:14px;text-align:center;margin:0;display:none" id="top_tip">您的浏览器版本过低，请升级至<a style="color:#31A3DD;text-decoration:underline;" href="http://dlsw.baidu.com/sw-search-sp/soft/dc/23360/IE11-Setup-Full64.1422605207.EXE">最新版</a>，或使用<a style="color:#31A3DD;text-decoration:underline;" href="http://dlsw.baidu.com/sw-search-sp/soft/78/17803/GoogleChromeframeStandaloneEnterprise.4144293914.msi">chrome浏览器</a></p>
<script>
var top_tip = document.getElementById('top_tip');
var isIE=!!window.ActiveXObject; 
var isIE6=isIE&&!window.XMLHttpRequest; 
var isIE8=isIE&&!!document.documentMode; 
var isIE7=isIE&&!isIE6&&!isIE8; 
if (isIE){ 
	if (isIE6 || isIE7 || isIE8){ 
		top_tip.style.display = 'block';
	} 
} 
</script>
<div>
	<!-- Header Section -->
	<div class="header_section" >
		<div class="container" >
			<!-- Logo & Contact Info -->
			<div class="row ">
				<div class="col-md-6 col-sm-12 wl_rtl"  >					
					<div claSS="logo">						
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($wl_theme_options['upload_image_logo']){ ?>
						<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } else {
							echo get_bloginfo('name');
						} ?>
					</a>
					<p><?php bloginfo( 'description' ); ?></p>
					</div>
				</div>
				<?php if($wl_theme_options['header_social_media_in_enabled']=='1') { ?>
				<div class="col-md-6 col-sm-12" style="display:none;" >
				<?php if($wl_theme_options['email_id'] || $wl_theme_options['phone_no'] !='') { ?>
				<ul class="head-contact-info">
						<?php if($wl_theme_options['email_id'] !='') { ?><li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $wl_theme_options['email_id']; ?>"><?php echo esc_attr($wl_theme_options['email_id']); ?></a></li><?php } ?>
						<?php if($wl_theme_options['phone_no'] !='') { ?><li><i class="fa fa-phone"></i><a href="tel:<?php echo $wl_theme_options['phone_no']; ?>"><?php echo esc_attr($wl_theme_options['phone_no']); ?></a></li><?php } ?>
				</ul>
				<?php } ?>
					<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
					   <li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a  href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php } if($wl_theme_options['twitter_link']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twiiter"><a href="<?php echo esc_url($wl_theme_options['twitter_link']); ?>"><i class="fa fa-twitter"></i></a></li>
					<?php } if($wl_theme_options['linkedin_link']!='') { ?>					
					<li class="linkedin" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><a href="<?php echo esc_url($wl_theme_options['linkedin_link']); ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php } if($wl_theme_options['youtube_link']!='') { ?>
					<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="Youtube"><a href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"><i class="fa fa-youtube"></i></a></li>
	                <?php } if($wl_theme_options['gplus']!='') { ?>
					<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="gplus"><a href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"><i class="fa fa-google-plus"></i></a></li>
	                <?php } if($wl_theme_options['instagram']!='') { ?>
					<li class="facebook" data-toggle="tooltip" data-placement="bottom" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"><i class="fa fa-instagram"></i></a></li>
	                <?php } ?>
					</ul>	
				</div>
				<?php } ?>
			</div>
			<!-- /Logo & Contact Info -->
		</div>	
	</div>	
	<!-- /Header Section -->
	<!-- Navigation  menus -->
	<div class="navigation_menu "  data-spy="affix" data-offset-top="95" id="enigma_nav_top">
		<span id="header_shadow"></span>
		<div class="container navbar-container">
			<nav class="navbar navbar-default " role="navigation" style="position:relative;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					 
					  <span class="sr-only"><?php _e('Toggle navigation','weblizar');?></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>
				<?php 
					if ( is_user_logged_in() ) { echo ''; 
					} else { 
							echo   
								'<div class="dlzc"   >
									<a    href="/wp-login.php" >登录</a>/
									<a href="'.home_url().'/?page_id=185"  >注册</a>
								</div>';} 
							?>
				

				<div style="position:relative;">
					<?php //是否显示软件管理入口
						if ( is_user_logged_in() ) { 
							global $current_user;
							get_currentuserinfo();
							$user_id = $current_user->ID;
							$querystr = "SELECT meta_value FROM wp_usermeta where user_id = '$user_id' and meta_key = 'software_manage'";
							$results = $wpdb->get_var($querystr); 	
							if($results == ''){
							}else if($results == 0){
								echo "<a href='http://www.sw64.cn/smgp/index.php' target='_blank' style='
								position:absolute;top: -50px;right:-30px;'><img src='http://www.sw64.cn/wp-content/themes/enigma/images/soft_enter.png' style='width:140px;'></a>";
							}
						}
					?> 
				</div>
			
				<div id="menu" class="collapse navbar-collapse ">	
					<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'weblizar_fallback_page_menu',
							'walker' => new weblizar_nav_walker(),
							)
						);	
					?>				
				
						
				<div style="position:absolute;top:8px;right:20px;">
					<?php 
						if ( is_active_sidebar( 'footer-widget-area' ) ){ 
							dynamic_sidebar( 'footer-widget-area' );
						} else 
						{ 
							$args = array(
							'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column" style="width:280px;">aaa',
							'after_widget'  => '</div>',
							'before_title'  => '<div class="enigma_footer_widget_title">',
							'after_title'   => '<div class="enigma-footer-separator"></div></div>' );
							the_widget('WP_Widget_Pages', null, $args);			
						} 
					?>
				</div>
			</nav>
		</div>
	</div>