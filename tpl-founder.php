<?php
/**
* Template Name: Founder Page*
*
*/
get_header(); ?>
    


    <?php // check if the flexible content field has rows of data
    if( have_rows('founder_pages') ):
         // loop through the rows of data
        while ( have_rows('founder_pages') ) : the_row(); ?>
        <?php if( get_row_layout() == 'section_1' ): ?>
    
    <section class="founder__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h1 class="title"><?php echo the_title(); ?></h1>
          </div>
        </div>
        <div class="row">
         
            <?php if( have_rows('box_list') ): ?>

                <?php while( have_rows('box_list') ): the_row();
                    // vars
                    $image = get_sub_field('images');
                    $title = get_sub_field('title');
                    $paragraph = get_sub_field('paragraph');
                    $link = get_sub_field('link');  ?>
                    
                    
         
                <div class="col m12 s12 l4 xl4">
           
           <?php if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self'; ?>
                      
               <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                 
             <?php endif; ?>

                      <div class="block_post">
                        <div class="wrap">

                          <?php if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                          <?php endif; ?>   

                          <p class="info">The English Studio Language School</p>
                        </div>
                      </div>
                
                <?php if( $link ):  ?>
                  </a>
              <?php endif; ?>
              
              <?php if( $title ): ?>
                <p class="name"><?php echo $title; ?></p>
              <?php endif; ?>
          </div>
  

                  <?php endwhile; ?>

              <?php endif; ?>

          
          
          
          
          
          
          <?php if(0){ ?>
          <div class="col m12 s12 l4 xl4">
           
           <a href="https://vsimakova.org/international-leadership-camp-essc/">
            <div class="block_post">
              <div class="wrap"><img src="<?= get_template_directory_uri(); ?>/img/brend_logo_2.svg" alt="EnglishStudio">
                <p class="info">International Leadership Camp ESSC</p>
              </div>
            </div>
          </a>
            
            <p class="name">Camp</p>
          </div>
          <div class="col m12 s12 l4 xl4">
           
           <a href="https://vsimakova.org/non-profit-organization-help-ukraine-now/">
            <div class="block_post">
              <div class="wrap"><img src="<?= get_template_directory_uri(); ?>/img/brend_logo_3.svg" alt="EnglishStudio">
                <p class="info">Non-profit Organization Help Ukraine Now</p>
              </div>
            </div>
          </a>
            
            <p class="name">Non-profitl</p>
          </div>
          <?php } ?>
          
          
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