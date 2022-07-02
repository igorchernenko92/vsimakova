<?php
/**
* Template Name: NON PROFIT Page*
*
*/
get_header(); ?>
    

  <?php // check if the flexible content field has rows of data
  if( have_rows('non-profit') ):
       // loop through the rows of data
      while ( have_rows('non-profit') ) : the_row(); ?>
      <?php if( get_row_layout() == 'section_1' ): ?>
        
    <section class="profit__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">

              <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h1 class="title"><?php the_sub_field('title'); ?></h1>
  <?php endif; ?>
          
          
  <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
            <p class="sub"><?php the_sub_field('sub_text'); ?></p>
  <?php endif; ?>
            
            
    <?php $link = get_sub_field('link_but'); ?>
 
    <?php if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

        <a href="<?php echo esc_url( $link_url ); ?>" class="red" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>     

            
            <a class="scroll__" href="#profit__2"><img class="middle" src="<?= get_template_directory_uri(); ?>/img/str.svg" alt="search"></a>
          </div>
          <div class="col m12 s12 l12 xl12">
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
  
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_2' ): ?>
    
    <section class="profit__2" id="profit__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <div class="profit__slider__top slider__top">
               <?php 
          $images = get_sub_field('sliter_top');
          if( $images ): ?>

                  <?php foreach( $images as $image ): ?>

                        <div>
                          <div class="block__img">
                            <img class="slider" src="<?php echo esc_url($image['sizes']['images_1170_374']); ?>"alt="<?php echo esc_attr($image['alt']); ?>" />
                          </div>
                        </div>

                  <?php endforeach; ?>

          <?php endif; ?>  
           
            </div>
            <div class="slid__arrow"><a class="prev__ top" href="javascript:;">
                <svg width="62" height="62" viewbox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="31" cy="31" r="31" fill="#E2454C"></circle>
                  <g clip-path="url(#clip0_12990_482)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0288 39.4489L20.5803 31L29.0288 22.5511L30.0331 23.5551L23.2985 30.2897L43.4199 30.2897L43.4199 31.71L23.2985 31.71L30.0331 38.4446L29.0288 39.4489Z" fill="white"></path>
                  </g>
                  <defs>
                    <clippath id="clip0_12990_482">
                      <rect width="30" height="30" fill="white" transform="translate(44 16) rotate(90)"></rect>
                    </clippath>
                  </defs>
                </svg></a><a class="next__ top" href="javascript:;">
                <svg width="62" height="62" viewbox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="31" cy="31" r="31" fill="#fff"></circle>
                  <g clip-path="url(#clip0_12990_482)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.0288 39.4489L20.5803 31L29.0288 22.5511L30.0331 23.5551L23.2985 30.2897L43.4199 30.2897L43.4199 31.71L23.2985 31.71L30.0331 38.4446L29.0288 39.4489Z" fill="#000"></path>
                  </g>
                  <defs>
                    <clippath id="clip0_12990_482">
                      <rect width="30" height="30" fill="white" transform="translate(44 16) rotate(90)"></rect>
                    </clippath>
                  </defs>
                </svg></a></div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
           

        <?php $imagebrand = get_sub_field('brand'); ?>

        <?php if( !empty( $imagebrand ) ): ?>
                <div class="box__band"><img src="<?php echo esc_url($imagebrand['url']); ?>"  alt="<?php echo esc_attr($imagebrand['alt']); ?>"></div>
        <?php endif; ?>        
         
          </div>
        </div>
        <div class="row">    
          <div class="col m12 s12 l12 xl12">
            <div class="inter__2_slider slider__bottom">
                  <?php if( have_rows('box_list') ): ?>

        <?php while( have_rows('box_list') ): the_row();
            // vars
            $imagesr = get_sub_field('images');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('url_link');  ?>
            
              <div>
                <div class="block__images">
                

        <?php if( $link ): ?>

            <a data-fancybox=""  href="<?php echo $link; ?>">
        <?php endif; ?>

               
                   <?php if( !empty( $imagesr ) ): ?>
        <img class="images"  src="<?php echo esc_url($imagesr['url']); ?>"  alt="<?php echo esc_attr($imagesr['alt']); ?>">
    <?php endif; ?>      
    
                  
                  
               <?php if( $link ): ?>     
                  </a>
        <?php endif; ?>
               
                </div>
              </div>
          <?php endwhile; ?>

      <?php endif; ?>
            </div>
            <div class="slid__arrow"><a class="prev__ bottom" href="javascript:;">
                <svg width="30" height="22" viewbox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9637 0.297888L29.665 10.9998L18.9637 21.7017L17.6915 20.43L26.222 11.8995L0.734863 11.8995L0.734863 10.1004L26.222 10.1004L17.6915 1.56997L18.9637 0.297888Z" fill="black"></path>
                </svg></a><a class="next__ bottom" href="javascript:;">
                <svg width="30" height="22" viewbox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9637 0.297888L29.665 10.9998L18.9637 21.7017L17.6915 20.43L26.222 11.8995L0.734863 11.8995L0.734863 10.1004L26.222 10.1004L17.6915 1.56997L18.9637 0.297888Z" fill="black"></path>
                </svg></a></div>
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_3' ): ?>
    
    <section class="inter__3 founder_2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l5 offset-l1 xl5 offset-xl1">

              <?php if( get_sub_field('title')): ?><!-- if under__the -->
     <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>

             <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
    <p class="sub"><?php the_sub_field('sub_text'); ?></p>
  <?php endif; ?>
          </div>
          <div class="col m12 s12 l4 offset-l1 xl4 offset-xl1">
           
          <?php if( get_sub_field('short_code_form')): ?><!-- if under__the -->
    <?php the_sub_field('short_code_form'); ?>
  <?php endif; ?>
          
           <?php if(0){ ?>
            <form method="POST" action="javascript:void(null);">
              <div class="form_input">
                 <span class="field">
                  <input class="name" type="text" name="name" required="" value="" placeholder="Your Name">
                  </span>
                </div>
              <div class="form_input"><span class="field">
                  <input class="mail" type="email" name="email" required="" value="" placeholder="Your Email"></span></div>
              <button class="red" type="submit" name="send">Send</button>
            </form>
           <?php } ?>
            
            
          </div>
        </div>
      </div>
    </section>
    
   
          <?php endif;
          endwhile;
      endif; ?>




<?php get_footer();