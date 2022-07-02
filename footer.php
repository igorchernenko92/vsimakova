<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vsimakova
 */

?>


    
        <?php // check if the flexible content field has rows of data
    if( have_rows('footer__') ):  
         // loop through the rows of data  ?>
    <footer>
      <div class="container">
        <div class="row">
        
     <?php   while ( have_rows('footer__') ) : the_row(); ?>
        <?php if( get_row_layout() == 'footer__address' ): ?>
 
          <div class="col">

            <?php if( get_sub_field('address_text')): ?><!-- if under__the -->
                 <h3 class="title"><?php the_sub_field('address_text'); ?> </h3>
            <?php endif; ?>
           
            <ul class="phone">
             
              <?php if( have_rows('repeater_address__') ): ?>

                  <?php while( have_rows('repeater_address__') ): the_row();
                      // vars
                      $image = get_sub_field('imag');
                      $title = get_sub_field('title');
                      $paragraph = get_sub_field('paragraph');
                      $link = get_sub_field('address__');  ?>

                        <?php if( $link ): 
                              $link_url = $link['url'];
                              $link_title = $link['title'];
                              $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                            <li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                        <?php endif; ?>

                    <?php endwhile; ?>

                <?php endif; ?>
             
    
            </ul>
          </div>

        <?php elseif( get_row_layout() == 'footer__call' ): ?>

        
          <div class="col">
             <?php if( get_sub_field('call_text')): ?><!-- if under__the -->
                 <h3 class="title"><?php the_sub_field('call_text'); ?> </h3>
            <?php endif; ?>
            
            
            <ul class="phone">
             
             <?php if( have_rows('repeater_call__') ): ?>

                  <?php while( have_rows('repeater_call__') ): the_row();
                      // vars
                      $image = get_sub_field('imag');
                      $title = get_sub_field('title');
                      $paragraph = get_sub_field('paragraph');  ?>
                        

                        <?php if( get_sub_field('call__')): ?><!-- if under__the -->
                           <?php $ell = get_sub_field('call__'); ?>

                               <li><a href="tel:<?php echo preg_replace('![^0-9+]+!', '', $ell);  ?>"><?php the_sub_field('call__'); ?></a></li>
                               
                        <?php endif; ?>



                    <?php endwhile; ?>

                <?php endif; ?>

              
            </ul>
          </div>

        <?php elseif( get_row_layout() == 'footer__contact' ): ?>
        
          <div class="col">
           
              <?php if( get_sub_field('email_text')): ?><!-- if under__the -->
                 <h3 class="title"><?php the_sub_field('email_text'); ?> </h3>
            <?php endif; ?>

            <ul class="phone">
             
             <?php if( have_rows('repeater_email__') ): ?>

                  <?php while( have_rows('repeater_email__') ): the_row();
                      // vars
                      $image = get_sub_field('imag');
                      $title = get_sub_field('title');
                      $paragraph = get_sub_field('paragraph');
                      $link = get_sub_field('call__');  ?>

                           <?php if( get_sub_field('email__')): ?><!-- if under__the -->
                           <?php $ell = get_sub_field('email__'); ?>

                               <li><a href="mailto:<?php the_sub_field('email__'); ?>"><?php the_sub_field('email__'); ?></a></li>
                               
                        <?php endif; ?>


                          
             

                    <?php endwhile; ?>

                <?php endif; ?>

              
            </ul>
 
         
          </div>
       
        <?php elseif( get_row_layout() == 'footer__soseal' ): ?> 
         
          <div class="col">
            <ul class="social"> 
             
             
             
             
             
  <?php if( get_sub_field('facebook')): ?><!-- if under__the -->
     <li> <a href="<?php the_sub_field('facebook'); ?>" target="_blank"><img class="instagram" src="<?= get_template_directory_uri(); ?>/img/fa.svg" alt="Facebook"></a></li>
  <?php endif; ?>
 
              <?php if( get_sub_field('instagram')): ?><!-- if under__the --> 
                      <li> <a href="<?php the_sub_field('instagram'); ?>"  target="_blank"><img class="facebook" src="<?= get_template_directory_uri(); ?>/img/in.svg" alt="Instagram"></a></li>
                <?php endif; ?>
            </ul>
          </div>
   
          <?php endif;
          endwhile; ?>
          </div>
        </div>
      </footer>
   <?php endif; ?>

    

         

          






<?php if(0){ ?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'vsimakova' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'vsimakova' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'vsimakova' ), 'vsimakova', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php } ?>

<?php wp_footer(); ?>

</body>
</html>
