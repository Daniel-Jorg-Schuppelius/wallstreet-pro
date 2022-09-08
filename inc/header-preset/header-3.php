<?php
$wallstreet_pro_options = theme_data_setup();
$current_options = wp_parse_args(get_option('wallstreet_pro_options', array()), $wallstreet_pro_options); ?>
<div class="navbar-header index2 header-style-<?php echo $current_options['header_presets_stlyle']; ?>">
	<div class="container">
		<!-- logo -->
		<?php if (($current_options['upload_image_logo'] != "") && (!has_custom_logo())) { ?>
			<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
			<img src="<?php echo $current_options['upload_image_logo']; ?>" style="height:<?php if ($current_options['height'] != '') {
        echo $current_options['height'];
    } else {
        "50";
    } ?>px; width:<?php if ($current_options['width'] != '') {
        echo $current_options['width'];
    } else {
        "250";
    } ?>px;" alt="logo" />
			</a>	
			<div class="site-branding-text logo-link-url">
	          <h1 class="site-title">
	              <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
	                  <div class="wallstreet_title_head"><?php bloginfo('name'); ?></div>
	              </a>
	          </h1>
	        </div>
		<?php
} else {
    if (has_custom_logo()):
        $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
			<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
			<img src="<?php echo esc_url($image[0]); ?>" class=" img-responsive custom-logo">
			</a>
			<?php
    endif; ?>
			<?php if (display_header_text()): ?>
			<div class="site-branding-text logo-link-url">
	          <h1 class="site-title">
	              <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
	               <div class="wallstreet_title_head"><?php bloginfo('name'); ?></div>
	              </a>
	          </h1>
			  <?php $wallstreet_description = get_bloginfo('description', 'display');
        if ($wallstreet_description || is_customize_preview()):
?>
	          <p class="site-description"> <?php echo $wallstreet_description; ?> </p>
	        </div>
			    <?php
        endif; ?> 
              <?php
    endif; ?>    
	<?php
} ?>
		<!-- /logo -->
		
			<?php get_template_part('inc/seprate-search-cart'); ?>
        
	</div>
</div>
<!--/Header Details Section-->	
	
<!--Logo & Menu Section-->
      
   <div class="navbar navbar-wrapper navbar-inverse navbar-static-top navbar2 header-style-<?php echo $current_options['header_presets_stlyle']; ?>" role="navigation">
	 <div class="container">
	   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>   

	<!-- Brand and toggle get grouped for better mobile display -->
			
	        <div class="navbar-collapse collapse">
	        	<?php
wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav-collapse collapse navbar-inverse-collapse', 'menu_class' => 'nav navbar-nav navbar-left', 'fallback_cb' => 'webriti_fallback_page_menu', 'walker' => new webriti_nav_walker())); ?>
             </div>
          </div>
        </div>