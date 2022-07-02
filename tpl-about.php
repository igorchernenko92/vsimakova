<?php
/**
* Template Name: About Page*
*
*/
get_header(); ?>
    
    <?php // check if the flexible content field has rows of data
    if( have_rows('about_pages') ):
         // loop through the rows of data
        while ( have_rows('about_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
        
    <section class="about__1">
      <div class="container"> 
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h1 class="title"><?php echo the_title(); ?></h1>
          </div>
          <div class="col m12 s12 l12 xl9 offset-xl3">
 
              <?php if( get_sub_field('content')): ?><!-- if under__the -->
                <?php the_sub_field('content'); ?>
              <?php endif; ?>

          </div>
        </div>
        <div class="row">
         
<?php  $gallerys = get_sub_field('images');
if( $gallerys ): ?>

    <?php foreach( $gallerys as $gallery ): ?>
        
          <div class="col m6 s12 l6 x6">
            <div class="box__images">

             <img src="<?php echo esc_url($gallery['sizes']['about']); ?>" alt="<?php echo esc_attr($gallery['alt']); ?>" />
      
          </div>
       </div>

    <?php endforeach; ?>

<?php endif; ?>

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
    
        <?php elseif( get_row_layout() == 'section_2' ): ?>
    
    <section class="about__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           

  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>

            
          </div>
          <div class="col m12 s12 l12 xl12">
           

  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>

          </div>
          <div class="col m12 s12 l12 xl12">


  <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
    <p><?php the_sub_field('sub_text'); ?></p>
  <?php endif; ?>
  
          </div>
        </div>
      </div>
    </section>

   
          <?php endif;
          endwhile;
      endif; ?>

<?php get_footer();