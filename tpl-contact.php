<?php
/**
* Template Name: Contact Page*
*
*/
get_header(); ?>


<?php // check if the flexible content field has rows of data
if( have_rows('contact_pages') ):
     // loop through the rows of data
    while ( have_rows('contact_pages') ) : the_row(); ?>
    
    <?php if( get_row_layout() == 'section_1' ): ?>
    
    <section class="contact__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 xl6">
            <h1 class="title"><?php echo the_title(); ?></h1>
          </div>
          <div class="col m12 s12 l6 xl6">
            <div class="block">
             
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
   <p class="sub_title"><?php the_sub_field('title'); ?></p>
  <?php endif; ?>
        
               <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                  <?php $ell = get_sub_field('sub_text'); ?>
  <a class="link__title" href="meilto:<?php the_sub_field('sub_text'); ?>"><?php the_sub_field('sub_text'); ?></a>
  <?php endif; ?>

      
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact__2">
      <div class="container">
        <div class="row"> 
         
  <?php if( get_sub_field('short_code_form')): ?><!-- if under__the -->
    <?php the_sub_field('short_code_form'); ?>
  <?php endif; ?>
 
         <?php if(0){ ?>
          <form method="POST" action="javascript:void(null);">
            <!-- Hidden Required Fields-->
            <div class="col m8 offset-m2 s12 l6 xl6">
              <div class="form_input"><span class="field">
                  <input class="name" type="text" name="name" required="" value="" placeholder="Name"></span></div>
              <div class="form_input"><span class="field">
                  <input class="mail" type="email" name="email" required="" value="" placeholder="Email"></span></div>
              <div class="form_input"><span class="field">
                  <input class="ferstname" type="text" name="subject" required="" value="" placeholder="Subject"></span></div>
            </div>
            <div class="col m8 offset-m2 s12 l6 xl6">
              <div class="form_input"><span class="field">
                  <textarea class="textarea" name="message" required="" value="" placeholder="Message"></textarea></span></div>
              <button class="red" type="submit" name="send">SEND</button>
            </div>
          </form>
         <?php } ?>
        </div>
      </div>
    </section>
    
   
          <?php endif;
          endwhile;
      endif; ?>



<?php get_footer();