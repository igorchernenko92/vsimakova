<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vsimakova
 */

get_header();  ?>
  

    
  
      
    <section class="section__ single__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time.svg" alt="time">
              <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
            </div>
            <?php if(get_the_title()){ ?>
              <h1 class="title"><?php echo the_title(); ?></h1>
            <?php } ?>
          </div>
          <div class="col m12 s12 l12 xl12">
            <?php if(get_the_post_thumbnail_url()){ ?>
              <div class="images__pages">
                <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'images_1170_374' ); ?>" alt="single">
              </div>
            <?php } ?>
     
          </div>
        </div>
        
        <div class="row content__post" >
<?php // check if the flexible content field has rows of data
if( have_rows('post_pages') ):
     // loop through the rows of data
    while ( have_rows('post_pages') ) : the_row(); ?>
    
    <?php if( get_row_layout() == 'section_1' ): ?>
           <div class="col m12 s12 l12 xl12">
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
          </div>
    <?php elseif( get_row_layout() == 'section_2' ): ?>    
          <div class="col m12 s12 l6 xl6">
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
          </div>    
          <div class="col m12 s12 l6 xl6">
  <?php if( get_sub_field('content_2')): ?><!-- if under__the -->
    <?php the_sub_field('content_2'); ?>
  <?php endif; ?>
          </div>
         
    <?php elseif( get_row_layout() == 'section_3' ): ?>   
          <div class="col m12 s12 l4 xl4">
  <?php if( get_sub_field('content')): ?><!-- if under__the -->
    <?php the_sub_field('content'); ?>
  <?php endif; ?>
          </div>   
          <div class="col m12 s12 l4 xl4">
  <?php if( get_sub_field('content_2')): ?><!-- if under__the -->
    <?php the_sub_field('content_2'); ?>
  <?php endif; ?>
          </div>   
          <div class="col m12 s12 l4 xl4">
  <?php if( get_sub_field('content_3')): ?><!-- if under__the -->
    <?php the_sub_field('content_3'); ?>
  <?php endif; ?>
          </div>
   
          <?php endif;
          endwhile;
      endif; ?>  
          
          
        </div>
        
        
        <div class="row">
         
         
  
     <?php  
       $last__post = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'post', // Post type category BLOG
            'posts_per_page' => 3, // echo show three post 
        );
        // The Query
        $the_querylast__post = new WP_Query( $last__post );

        // The Loop
        if ( $the_querylast__post->have_posts() ) {

            while ( $the_querylast__post->have_posts() ) {
                $the_querylast__post->the_post(); ?>
         
          <div class="col m6 s12 l4 xl4">
            <div class="post__">
                  <div class="images__pages">
                         <?php if(get_the_post_thumbnail_url()){ ?>
                          <a class="get_the_post_thumbnail_url" href="<?php echo get_the_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'single__last' ); ?>" alt="images__pages">
                          </a>
                            <?php } ?>
                          </div>
              
              <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="time">
                <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
              </div><a class="post__links" href="<?php echo get_the_permalink(); ?>"><?php $rtitle = get_the_title(); 
                   
$tm = substr($rtitle, 0, 65 );
echo $tm; ?></a>
            </div>
          </div>

          
           <?php }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
      ?>    
 
        </div>
      </div>
</section>
         
         <?php 

  //  
  //$args = array(
  //    'post_id' => 174,   // Use post_id, not post_ID
  //        'count'   => true // Return only the count
  //);
  //$comments_count = get_comments( $args );
  //echo $comments_count;


  $args = array(
  //    'status'  => 'hold',
//                              'number'  => '5',
      'post_id' => get_the_ID(), // use post_id, not post_ID
  );
  $comments = get_comments( $args );
      
      if($comments) { ?> 
     
        <section class="section__ single__3">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
          
            <h2 class="title">Previous Comments</h2>
    
 

                        <?php  foreach ( $comments as $comment ) : ?>
                              
                              <div class="comments__new">
                                <div class="bloc__img">
                                <img class="instagram none" src="<?= get_template_directory_uri(); ?>/img/fa.svg" alt="Facebook"></div>
                                <div class="conment__">
                                  <div class="top">
                                    <h3 class="name"><?= $comment->comment_author; ?></h3>
                                    <p class="email"><?= $comment->comment_author_email; ?></p>  
                                  </div>
                                  <div class="tima"><img src="<?= get_template_directory_uri(); ?>/img/time.svg" alt="time">
                                    <?= $comment->comment_date; ?>  
                                  </div>
                                  <div class="content">
                                    <p><?php echo  $comment->comment_content; ?> </p>
                                  </div>
                                </div>
                              </div>

                


                          <?php endforeach;
                            // print_r($comments);  ?>
                              
          </div>
        </div>
          </div>
</section>
   
    <?php } ?> 
    
    
    
        <section class="section__ single__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l6 offset-l3 xl6 offset-xl3">
          		<?php
            
          
		while ( have_posts() ) :
			the_post();
            
            
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
              
    
		?>
          
          </div>
        </div>
          </div>
</section>
    
  <?php if(0){ ?>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'vsimakova' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'vsimakova' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
  <?php } ?>
<?php
//get_sidebar();
get_footer();
