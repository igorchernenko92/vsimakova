<?php
/**
* Template Name: FEEDBACK Page*
*
*/
get_header(); ?>
    
 
   
    
    <?php // check if the flexible content field has rows of data
    if( have_rows('the_art_of_pages') ):
         // loop through the rows of data
        while ( have_rows('the_art_of_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
    
    <section class="feedback__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
            <?php if( get_sub_field('title')): ?><!-- if under__the -->
              <h1 class="title"><?php the_sub_field('title'); ?></h1>
            <?php endif; ?>
            
            
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_2' ): ?>
    
    <section class="feedback__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l8 xl8">
    <?php $imag__e = get_sub_field('Images__'); ?>

    <?php if( !empty( $imag__e ) ):
            
              $smoll__imgurl = $imag__e['sizes']['feedback__1'];  ?>
          <img class="images"src="<?php echo $smoll__imgurl; ?>"  alt="<?php echo esc_attr($imag__e['alt']); ?>">
    <?php endif; ?>   

          
          </div>
          <div class="col m12 s12 l4 xl4">
          
    <?php $imagesnew__ = get_sub_field('Imagesnew__'); ?>

    <?php if( !empty( $imagesnew__ ) ):
            
              $smoll__imgurl = $imagesnew__['sizes']['feedback__2'];  ?>
            <img class="images" src="<?php echo $smoll__imgurl; ?>"  alt="<?php echo esc_attr($imagesnew__['alt']); ?>">
    <?php endif; ?>  
           
          
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">

                     <?php if( get_sub_field('title')): ?><!-- if under__the -->
     <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
           
          <?php if( get_sub_field('content')): ?><!-- if under__the -->
            <?php the_sub_field('content'); ?>
          <?php endif; ?>
            
            
                       
              <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
            <p style="text-align: center;"><strong><?php the_sub_field('sub_text'); ?></strong></p>
  <?php endif; ?>
         
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_3' ): ?>
   
    <section class="inter__3 feedback__3">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 xl6">

  <?php if( get_sub_field('title')): ?><!-- if under__the -->
     <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>

             <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
    <p class="sub"><?php the_sub_field('sub_text'); ?></p>
  <?php endif; ?>
          </div>
          <div class="col m12 s12 l5 offset-l1 xl5 offset-xl1">
           
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
 

    <?php // check if the flexible content field has rows of data
    if( have_rows('home_pages') ):
         // loop through the rows of data
        while ( have_rows('home_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
 

        <?php elseif( get_row_layout() == 'section_2' ): ?>


        <?php elseif( get_row_layout() == 'section_3' ): ?>
        

        <?php elseif( get_row_layout() == 'section_4' ): ?> 


        <?php elseif( get_row_layout() == 'section_5' ): ?>

       
        <?php elseif( get_row_layout() == 'section_6' ): ?>

       
        <?php elseif( get_row_layout() == 'section_7' ): ?>


        <?php elseif( get_row_layout() == 'section_8' ): ?>
            

        <?php elseif( get_row_layout() == 'section_9' ): ?>


        <?php elseif( get_row_layout() == 'section_10' ): ?>


        <?php elseif( get_row_layout() == 'section_11' ): ?>

   
          <?php endif;
          endwhile;
      endif; ?>


<?php get_footer();