<?php
/**
* Template Name: FACILITATOR Page*
*
*/
get_header(); ?>

    
     
 <?php // check if the flexible content field has rows of data
    if( have_rows('facilitator_pages') ):
         // loop through the rows of data
        while ( have_rows('facilitator_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
    
          <section class="facilitator__1">
            <div class="container">
              <div class="row">
                <div class="col m12 s12 l12 xl12">
                  <h1 class="title"><?php echo the_title(); ?></h1>
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

<!--  facilitator__post  -->
    <section class="facilitator__2">
     
     
     
    <?php if( have_rows('box_list') ): ?>

        <?php while( have_rows('box_list') ): the_row();
            // vars
            $image_2 = get_sub_field('images');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('link');  ?>
            
             <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l6 xl6">
                    <div class="bock__images">
                    
                    
     <?php if( $link ): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

            <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <?php endif; ?> 
                    
    <?php if( !empty( $image_2 ) ): 
           $smoll__imgurl = $image_2['sizes']['facilitator__post'];  ?>
        <img class="images" src="<?php echo $smoll__imgurl; ?>"  alt="<?php echo esc_attr($image_2['alt']); ?>">
    <?php endif; ?>     
              
            <?php if( $link ): ?>
              </a>
         <?php endif; ?> 
                    </div>
                  </div>
                  <div class="col m12 s12 l6 xl6">

         <?php if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self'; ?>
            <a class="title__link_post" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <?php endif; ?> 
                  <?php if( get_sub_field('title')): ?><!-- if under__the -->
                    <h3 class="titlepost"><?php the_sub_field('title'); ?></h3>
                  <?php endif; ?>     
     
            <?php if( $link ): ?>
              </a>
         <?php endif; ?> 
                        
                  <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
                    <p class="subtitle"><?php the_sub_field('paragraph'); ?></p>
                  <?php endif; ?>
                  <?php if( get_sub_field('content')): ?><!-- if under__the -->
                    <?php the_sub_field('content'); ?>
                  <?php endif; ?>    
 
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

      <?php endif; ?>
     
     
    <?php if(0) { ?>
       
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l6 xl6">
              <div class="bock__images"><img class="images" src="<?= get_template_directory_uri(); ?>/img/facilitator_2_foto1.svg" alt="search"></div>
            </div>
            <div class="col m12 s12 l6 xl6">
              <h3 class="titlepost">How To Change Things </h3>
              <p class="subtitle">That Seem Impossible To Change</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor ante, posuere ut dapibus at, rutrum eget elit. Nullam ultrices congue quam non tristique. Ut ornare odio non ante varius iaculis. Proin neque libero, ultricies nec efficitur.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l6 xl6">
              <div class="bock__images"><img class="images" src="<?= get_template_directory_uri(); ?>/img/facilitator_2_foto2.svg" alt="search"></div>
            </div>
            <div class="col m12 s12 l6 xl6">
              <h3 class="titlepost">PBL School</h3>
              <p class="subtitle">for Teachers</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor ante, posuere ut dapibus at, rutrum eget elit. Nullam ultrices congue quam non tristique. Ut ornare odio non ante varius iaculis. Proin neque libero, ultricies nec efficitur.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col m12 s12 l6 xl6">
              <div class="bock__images"><img class="images" src="<?= get_template_directory_uri(); ?>/img/facilitator_2_foto3.svg" alt="search"></div>
            </div>
            <div class="col m12 s12 l6 xl6">
              <h3 class="titlepost">The Art of </h3>
              <p class="subtitle">Giving Feedback</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor ante, posuere ut dapibus at, rutrum eget elit. Nullam ultrices congue quam non tristique. Ut ornare odio non ante varius iaculis. Proin neque libero, ultricies nec efficitur.</p>
            </div>
          </div>
        </div>
      </div>
      
    <?php } ?>
    </section>
    
        <?php elseif( get_row_layout() == 'section_3' ): ?>
    
              <section class="inter__3 facilitator__4">
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
                      <?php echo do_shortcode('[contact-form-7 id="205" title="victoria1simakova"]'); ?>

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