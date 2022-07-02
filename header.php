<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vsimakova
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


    

<?php if( is_front_page() ) { ?>
   
   



  

     
    <div class="right__menu">
    
     <a class="close" href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/close.svg" alt="close"></a>
        <?php
            $argsm = array(
               'menu' => 'menu',
      //        'container' => 'nav',
              'container_class' => 'menu__',
      //        'before' => '<h2>', 
      //        'after'  => '</h2>',
            );
          ?>
          <?php  wp_nav_menu( $argsm );?>
    </div>
    <header>
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">

                  <?php $image_logo = get_field('smoll_logo', 'options'); ?>
          
      <?php if( !empty( $image_logo ) ): ?>
          <a class="logo" href="/"><img class=""src="<?php echo esc_url($image_logo['url']); ?>"  alt="<?php echo esc_attr($image_logo['alt']); ?>"></a>
    <?php endif; ?>      
          

              <?php
                $argsm = array(
                   'menu' => 'menu',
          //        'container' => 'nav',
                  'container_class' => 'menu__',
          //        'before' => '<h2>', 
          //        'after'  => '</h2>',
                );
              ?>
              <?php  wp_nav_menu( $argsm );?>

        
            <div class="lang">  <?php echo do_shortcode("[wpml_custom_lang]"); ?>
              
               <?php if(0){ ?> <a class="lang__link" href="javascript:;"> <?php // echo ICL_LANGUAGE_CODE; ?></a>
               <div class="lang__menu">
                  <?php echo do_shortcode("[wpml_custom_lang]"); ?>
              </div>
              <?php } ?>
             </div>
             <a class="mobile__" href="javascript:;">
              <svg width="19" height="14" viewbox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1H18" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                <path d="M6 7L18 7" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                <path d="M1 13H18" stroke="white" stroke-width="2" stroke-linecap="round"></path>
              </svg></a>
          </div>
        </div>
      </div>
    </header>
    
  <?php }else{  ?>  

    <div class="right__menu">
     <a class="close" href="javascript:;"><img class="images" src="<?= get_template_directory_uri(); ?>/img/close.svg" alt="close"></a>
        <?php
            $argsm = array(
               'menu' => 'menu',
      //        'container' => 'nav',
              'container_class' => 'menu__',
      //        'before' => '<h2>', 
      //        'after'  => '</h2>',
            );
          ?>
          <?php  wp_nav_menu( $argsm );?>
    </div>
    <header class="grey">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
          
           <?php $image_logo = get_field('smoll_logo', 'options'); ?>
          
      <?php if( !empty( $image_logo ) ): ?>
          <a class="logo" href="/"><img class=""src="<?php echo esc_url($image_logo['url']); ?>"  alt="<?php echo esc_attr($image_logo['alt']); ?>"></a>
    <?php endif; ?>      
          

              <?php
                $argsm = array(
                   'menu' => 'menu',
          //        'container' => 'nav',
                  'container_class' => 'menu__',
          //        'before' => '<h2>', 
          //        'after'  => '</h2>',
                );
              ?>
              <?php  wp_nav_menu( $argsm );?>

        
            <div class="lang">  <?php echo do_shortcode("[wpml_custom_lang]"); ?>
            
             </div>
              
              
              <a class="mobile__" href="javascript:;">
              <svg width="19" height="14" viewbox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1H18" stroke="#000000" stroke-width="2" stroke-linecap="round"></path>
                <path d="M6 7L18 7" stroke="#000000" stroke-width="2" stroke-linecap="round"></path>
                <path d="M1 13H18" stroke="#000000" stroke-width="2" stroke-linecap="round"></path>
              </svg></a>
          </div>
        </div>
      </div>
    </header>
  
  <?php }  ?>  




<?php if(0){ ?>
      <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'vsimakova' ); ?></a>

        <header id="masthead" class="site-header">
          <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
              ?>
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php
            else :
              ?>
              <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php
            endif;
            $vsimakova_description = get_bloginfo( 'description', 'display' );
            if ( $vsimakova_description || is_customize_preview() ) :
              ?>
              <p class="site-description"><?php echo $vsimakova_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
          </div><!-- .site-branding -->

          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'vsimakova' ); ?></button>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
          </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
<?php } ?>