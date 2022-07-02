<?php
/**
* Template Name: How To Change Page*
*
*/
get_header(); ?>

    
    <?php // check if the flexible content field has rows of data
    if( have_rows('how_to_change_things__pages') ):
         // loop through the rows of data
        while ( have_rows('how_to_change_things__pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
 

<!--    how_to_change_1-->
    <section class="howtochange__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12">

            <?php if( get_sub_field('title')): ?><!-- if under__the -->
              <h1 class="title"><?php the_sub_field('title'); ?></h1>
            <?php endif; ?>
         
          </div>
          <div class="col m12 s12">
            <div class="block__">
            
            <?php  $imagerimages = get_sub_field('images');   ?>
            
          <?php if( !empty( $imagerimages ) ): 
              $smoll__imgurl = $imagerimages['sizes']['how_to_change_1'];  ?>
            <img src="<?php echo $smoll__imgurl; ?>"  alt="<?php echo esc_attr($imagerimages['alt']); ?>"> 
          <?php endif; ?>   

           
            
            
            </div>
          </div>
          <div class="col m12 s12">
            <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
              <p class="sub"><?php the_sub_field('sub_text'); ?></p>
            <?php endif; ?>
    
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_2' ): ?>
    
    <section class="howtochange__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
 
          <?php if( get_sub_field('title')): ?><!-- if under__the -->
            <h2 class="title"><?php the_sub_field('title'); ?></h2>
          <?php endif; ?>

          <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
            <h3 class="red__text"><?php the_sub_field('sub_text'); ?></h3>
          <?php endif; ?>


          <?php if( get_sub_field('content')): ?><!-- if under__the -->
            <?php the_sub_field('content'); ?>
          <?php endif; ?>
          
          </div>
        </div>
        
<!--        how_to_change_2  -->
        <div class="row">
         
      <?php $imagesgallerys = get_sub_field('gallery');
      if( $imagesgallerys ): ?>

        <?php foreach( $imagesgallerys as $imagesgallery ): ?>
                
          <div class="col m6 s12 l6 xl6">
            <div class="box__images">
                <img src="<?php echo esc_url($imagesgallery['sizes']['how_to_change_2']); ?>" alt="<?php echo esc_attr($imagesgallery['alt']); ?>" />
            </div>
          </div>

         <?php endforeach; ?>

      <?php endif; ?>


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
           
             <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
        <?php the_sub_field('paragraph'); ?>
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