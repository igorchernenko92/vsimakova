<?php
/**
* Template Name: Home Page*
*
*/
get_header(); ?>
    
  
    
    <?php // check if the flexible content field has rows of data
    if( have_rows('home_pages') ):
         // loop through the rows of data
        while ( have_rows('home_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
    
    <section class="section__ home__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
             <?php if( get_sub_field('title')): ?><!-- if under__the -->
                <h1 class="title"> <?php the_sub_field('title'); ?> </h1>
              <?php endif; ?>
              <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
               <p class="sub"> <?php the_sub_field('sub_text'); ?></p>
              <?php endif; ?>

          </div>
        </div>
        <div class="slider__home">
         
    <?php if( have_rows('box_list') ): ?>
        <!-- if box_list -->
        <?php while( have_rows('box_list') ): the_row();
            // vars
            $images_1 = get_sub_field('images');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('link');  ?>
            
                <div>
                  <div class="row">
                    <div class="col m12 s12 l6 xl6">
                      <?php if( $paragraph): ?><!-- if under__the -->
                        <?php echo $paragraph; ?>
                      <?php endif; ?>
                    </div>
                    <div class="col m12 s12 l6 xl6">

                     <?php if( !empty( $images_1 ) ): ?><!-- if $images -->
                             
                             <?php   $smoll__imgurl = $images_1['sizes']['home__1']; ?>
                              <div class="block_img">
                                  <img class="slider" src="<?php echo $smoll__imgurl; ?>"  alt="<?php echo esc_attr($images_1['alt']); ?>">
                               </div>
                        <?php endif; ?>  
                        
                       
                    </div>
                  </div>
                </div>

          <?php endwhile; ?>

      <?php endif; ?>

        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12"> 
            <div class="slide-count-wrap cunt"><span class="current"></span> / <span class="total"></span></div>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12"><a class="arrow" href="#home__2">DISCOVER</a></div>
        </div>
      </div>
    </section>
    
    
            <?php elseif( get_row_layout() == 'section_2' ): ?>
    

    
    
    <section class="section__ home__2" id="home__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
             <?php if( get_sub_field('title')): ?><!-- if under__the -->
                <h2 class="title"> <?php the_sub_field('title'); ?> </h2>
              <?php endif; ?>

          </div>
          <div class="col m12 s12 l6 xl5">
           
            <?php $image_2 = get_sub_field('images'); ?><!-- if images -->

            <?php if( !empty( $image_2 ) ): ?>
               <div class="box__img">  <img class="search__img"  src="<?php echo esc_url($image_2['url']); ?>"  alt="<?php echo esc_attr($image_2['alt']); ?>"> </div>
            <?php endif; ?>        

          </div>
          <div class="col m12 s12 l6 xl7">
              <?php if( get_sub_field('content')): ?><!-- if under__the -->
                 <?php the_sub_field('content'); ?>
              <?php endif; ?>

          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
              <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
                 <?php the_sub_field('paragraph'); ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    
    
                 <?php endif;
          endwhile;
      endif; ?> 
    


<?php get_footer();