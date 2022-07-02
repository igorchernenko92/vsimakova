<?php
/**
* Template Name: Research Page*
*
*/
get_header(); ?>
    

<?php // check if the flexible content field has rows of data
if( have_rows('research_pages') ):
     // loop through the rows of data
    while ( have_rows('research_pages') ) : the_row(); ?>
    <?php if( get_row_layout() == 'section_1' ): ?>
 
    
    <section class="closingequity__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l5 xl5">
           
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
   <h1 class="title"> <?php the_sub_field('title'); ?></h1>
  <?php endif; ?>

          </div>
          <div class="col m12 s12 l7 xl7">
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
   
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_2' ): ?>
    
    <section class="closingequity__2">
      <div class="container"> 
       
    <?php if( have_rows('box_list') ): ?>

        <?php while( have_rows('box_list') ): the_row();
            // vars
            $image = get_sub_field('imag');
//            $title = get_sub_field('title');
//            $paragraph = get_sub_field('paragraph');
          //  $link = get_sub_field('link');  ?>
            
        <div class="row">
          <div class="col m12 s12 l4 offset-l1 xl4 offset-xl1">
           
            <?php if( get_sub_field('title')): ?><!-- if under__the -->
              <h2 class="title"> <?php the_sub_field('title'); ?></h2>
            <?php endif; ?>

   
          </div>
          <div class="col m12 s12 l7 x7">
          
          
  <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
            <p><?php the_sub_field('paragraph'); ?></p>
  <?php endif; ?>
         
         
          </div>
        </div>

          <?php endwhile; ?>

      <?php endif; ?>
       
 
        
        
        
        
        
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
   <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
            <p class="bottom__title"><?php the_sub_field('sub_text'); ?></p>
  <?php endif; ?>
 
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
          </div>

        </div>
        
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_3' ): ?>
    
    <section class="closingequity__4">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
           
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"> <?php the_sub_field('title'); ?></h2>
  <?php endif; ?>

          </div>
        </div>

        <div class="row">
        
        
      <?php if( have_rows('box_list') ): ?>

        <?php while( have_rows('box_list') ): the_row();
            // vars   ?>
            
            <div class="col m12 s12 l6 xl6">


                <?php if( get_sub_field('title')): ?><!-- if under__the -->
                   <h3 class="sub_title"><?php the_sub_field('title'); ?></h3>
                <?php endif; ?>


                  <?php if( have_rows('li_list') ): ?>
                     <ul class="list">
                      <?php while( have_rows('li_list') ): the_row();
                          // vars
                          $paragraph = get_sub_field('paragraph');  ?>

                                   <li><?php echo $paragraph?></li>

                        <?php endwhile; ?>
                      </ul>
                    <?php endif; ?>


              </div>

          <?php endwhile; ?>

      <?php endif; ?>
         
          
          
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
  
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_4' ): ?> 
    
    <section class="closingequity__5">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>
         
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 offset-l1 xl10 offset-xl1">
          
            <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                <h4 class="sub__title"><?php the_sub_field('sub_text'); ?></h4>
            <?php endif; ?>

             
              <?php if( have_rows('box_list') ): ?>
                      <ul class="list">
                  <?php while( have_rows('box_list') ): the_row();
                      // vars
                      $image = get_sub_field('imag');
                      $title = get_sub_field('title');
                      $paragraph = get_sub_field('paragraph');
                      $link = get_sub_field('link');  ?>

                      <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
                        <li><?php the_sub_field('paragraph'); ?></li>
                      <?php endif; ?>


                    <?php endwhile; ?>
                      </ul>
                <?php endif; ?>

          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">

              <?php if( get_sub_field('content')): ?><!-- if under__the -->
                <?php the_sub_field('content'); ?>
              <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           

  <?php if( get_sub_field('new_title')): ?><!-- if under__the -->
            <h2 class="title"><?php the_sub_field('new_title'); ?></h2>
  <?php endif; ?>

          </div>
        </div>
        <div class="row">
        
        
    <?php if( have_rows('list_new') ): ?>

        <?php while( have_rows('list_new') ): the_row();
            // vars  ?>
            
          <div class="col m12 s12 l4 xl4">
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
      <h4 class="sub__title"><?php the_sub_field('title'); ?></h4>
  <?php endif; ?>

                <?php if( have_rows('column') ): ?>
      <ul class="list">
        <?php while( have_rows('column') ): the_row();
            // vars
            $image = get_sub_field('imag');
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $link = get_sub_field('link');  ?>
            
                          <li><?php echo $paragraph; ?></li>

          <?php endwhile; ?>

      <?php endif; ?>
      

            </ul>
          </div>

          <?php endwhile; ?>

      <?php endif; ?>
         

          
          
          
          <?php if(0){ ?>
          <div class="col m12 s12 l4 xl4">
            <h4 class="sub__title">Curriculum</h4>
            <ul class="list">
              <li>provide EL coordinators with a step-by-step system in teaching English</li>
              <li>provide supports for EL coordinators</li>
            </ul>
          </div>
          <div class="col m12 s12 l4 xl4">
            <h4 class="sub__title">Video course for EL Coordinators </h4>
            <ul class="list">
              <li>enhance EL coordinators’ teacher capacity</li>
            </ul>
          </div>
          <?php } ?>
          
          
        </div>
        <div class="row">           
          <div class="col m12 s12 l12 xl12">  
           
            <?php if( get_sub_field('content_new')): ?><!-- if under__the -->
              <?php the_sub_field('content_new'); ?>
            <?php endif; ?>
            
            
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_5' ): ?>
    
    <section class="closingequity__6">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
  <?php if( get_sub_field('title')): ?><!-- if under__the -->
            <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>
      
          </div>
        </div>
        <div class="row"> 
 
          
    <?php if( have_rows('list_new') ): ?>

        <?php while( have_rows('list_new') ): the_row();
            // vars  ?>
            
          <div class="col m6 s12 l4 xl4">
            <div class="block__  <?php if(get_row_index() == '1'){ echo 'reds'; } ?>">
              
               <?php if( get_sub_field('title')): ?><!-- if under__the -->
                <h4 class="ul__title"><?php the_sub_field('title'); ?></h4>
              <?php endif; ?>
    
    <?php if( have_rows('column') ): ?>
              <ul>
        <?php while( have_rows('column') ): the_row();
            // vars  ?>
            
             <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
              <li><?php the_sub_field('paragraph'); ?></li>
            <?php endif; ?>

          <?php endwhile; ?>
              </ul>
      <?php endif; ?>
         
            
              
              
            </div>
          </div>

          <?php endwhile; ?>

      <?php endif; ?>
          
          
          <?php if(0){ ?>
          <div class="col m6 s12 l4 xl4">
            <div class="block__">
              <h4 class="ul__title">Curriculum</h4>
              <ul>
                <li>provide EL coordinators with a step-</li>
                <li>by-step system in teaching English</li>
                <li>provide supports for EL coordinators</li>
              </ul>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="block__">
              <h4 class="ul__title">Video course for EL Coordinators
                <ul>
                  <li>enhance EL coordinators’ teacher capacity</li>
                </ul>
              </h4>
            </div>
          </div>
          <?php } ?>
          
          
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_6' ): ?>
    
    <section class="closingequity__7">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
 <?php if( get_sub_field('title')): ?><!-- if under__the -->
    <h2 class="title"><?php the_sub_field('title'); ?></h2>
  <?php endif; ?>

        <?php $link_bottum = get_sub_field('link_bottum'); ?>
 
    <?php if( $link_bottum ): 
          $link_url = $link_bottum['url'];
          $link_title = $link_bottum['title'];
          $link_target = $link_bottum['target'] ? $link_bottum['target'] : '_self'; ?>

        <a  class="red"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
          
            

  <?php if( get_sub_field('conteiner')): ?><!-- if under__the -->
            <p><?php the_sub_field('conteiner'); ?></p>
  <?php endif; ?>
  
    <?php if( have_rows('box_list') ): ?>
            <ul class="list">
        <?php while( have_rows('box_list') ): the_row();
            // vars  ?>
            
  <?php if( get_sub_field('paragraph')): ?><!-- if under__the -->
             <li> <?php the_sub_field('paragraph'); ?></li>
  <?php endif; ?>
            
            

          <?php endwhile; ?>
            </ul>
      <?php endif; ?>
            
            
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
              <?php if( get_sub_field('content')): ?><!-- if under__the -->
                <?php the_sub_field('content'); ?>
              <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
          
        <?php $link_bottum_new= get_sub_field('link_bottum_new'); ?>
 
    <?php if( $link_bottum_new ): 
          $link_url = $link_bottum_new['url'];
          $link_title = $link_bottum_new['title'];
          $link_target = $link_bottum_new['target'] ? $link_bottum_new['target'] : '_self'; ?>

        <a  class="red"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
          
          
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
           
         <?php if( get_sub_field('content_new')): ?><!-- if under__the -->
                <?php the_sub_field('content_new'); ?>
              <?php endif; ?>
            
            
          </div>
        </div>
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            
                 <?php if( get_sub_field('sub_text')): ?><!-- if under__the -->
                <p><?php the_sub_field('sub_text'); ?></p>
              <?php endif; ?>
            
        <?php $link_bot = get_sub_field('link'); ?>
 
    <?php if( $link_bottum_new ): 
          $link_url = $link_bot['url'];
          $link_title = $link_bot['title'];
          $link_target = $link_bot['target'] ? $link_bot['target'] : '_self'; ?>

        <a  class="red"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
            
          </div>
        </div>
      </div>
    </section>
    
        <?php elseif( get_row_layout() == 'section_7' ): ?>
    
    <section class="closingequity__8">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">

  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
            <div class="blockimg">
            
    <?php $link_images = get_sub_field('link_images'); ?>
 
    <?php if( $link_images ): 
          $link_url = $link_images['url'];
          $link_title = $link_images['title'];
          $link_target = $link_images['target'] ? $link_images['target'] : '_self'; ?>

        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
    <?php endif; ?>
    
    
    <?php $imageimagesimages = get_sub_field('images_1'); ?>

    <?php if( !empty( $imageimagesimages ) ): ?>
        <img src="<?php echo esc_url($imageimagesimages['url']); ?>"  alt="<?php echo esc_attr($imageimagesimages['alt']); ?>">
    <?php endif; ?>      
            
             <?php if( $link_images ): ?></a>    <?php endif; ?>
            
            
            </div>
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