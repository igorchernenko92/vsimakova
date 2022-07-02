<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vsimakova
 */

get_header(); ?>
  


    <section class="section__ blog__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
           
            <h2 class="title">Welcome <span>To My <?php echo  single_cat_title( '', false ); ?></span></h2>

          </div>
        </div>
      </div>
    </section>
    
<?php  
 $argsy = array(
      'order' => 'DESC', // order filter  last post
      'post_type'  => 'post', // Post type category BLOG
            'posts_per_page' => 1, // echo show three post 
  );
  // The Query
  $rthe_query = new WP_Query( $argsy );

  // The Loop
  if ( $rthe_query->have_posts() ) {

      while ( $rthe_query->have_posts() ) {
          $rthe_query->the_post(); ?>

            <section class="section__ blog__2">
              <div class="container">
                <div class="row">
                  <div class="col m12 s12 l7 xl7">
                    <div class="block__image"><img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'blog__top' ); ?>"alt="blog__"></div>
                  </div>
                  <div class="col m12 s12 l5 xl5"> 
                    <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_widt.svg" alt="time">
                     <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div><a class="title" href="<?php echo get_the_permalink(); ?>"><?php $rtitlett = get_the_title(); 
               
$tmt = substr($rtitlett, 0, 85 );
echo $tmt; ?></a>
                    <div class="post__">
                      <p>I’ve just finished reading the book The Gifts of Imperfection by Brene Brown  and can’t stop thinking about the teachings in it, especially all of us living in such disconnecting and, at the same time, connecting times...</p>
                    </div><a class="post__links" href="<?php echo get_the_permalink(); ?>">Read more</a>
                  </div>
                </div>
              </div>
            </section>
    
          
           <?php }

        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();  ?>    
          
    
    <section class="section__ blog__3">
      <div class="container">
        <div class="row">
         
         
  
           <?php  
       $args = array(
            'order' => 'DESC', // order filter  last post
            'post_type'  => 'post', // Post type category BLOG
//            'posts_per_page' => 3, // echo show three post 
        );
        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>

                  <div class="col m6 s12 l4 xl4">
                    <div class="post__">
                      <div class="images__pages">
                         <?php if(get_the_post_thumbnail_url()){ ?>
                          <a class="get_the_post_thumbnail_url" href="<?php echo get_the_permalink(); ?>">
                            <img src="<?= get_the_post_thumbnail_url( get_the_ID(), 'blog__img' ); ?>" alt="images__pages">
                          </a>
                            <?php } ?>
                          </div>
                      <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="post">
                       <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
                      </div><a class="post__links" href="<?php echo get_the_permalink(); ?>"><?php $rtitle = get_the_title(); 
                   
$tm = substr($rtitle, 0, 55 );
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
    
    
    
<footer class="act__">
   <div class="container">
      <div class="row">
         <div class="col">
            <!-- if under__the -->
            <h3 class="title">Call </h3>
            <ul class="phone">
               <!-- if under__the -->
               <li><a href="tel:+16194968297">USA +16194968297</a></li>
               <!-- if under__the -->
               <li><a href="tel:+380631090820">Ukraine +380631090820</a></li>
            </ul>
         </div>
         <div class="col">
            <!-- if under__the -->
            <h3 class="title">Email</h3>
            <ul class="phone">
               <!-- if under__the -->
               <li><a href="mailto:victoria1simakova@gmail.com">victoria1simakova@gmail.com</a></li>
            </ul>
         </div>
         <div class="col">
            <ul class="social">
               <!-- if under__the -->
               <li> <a href="https://www.facebook.com/simakovavictoria" target="_blank"><img class="instagram" src="https://secureservercdn.net/160.153.138.217/ujk.263.myftpupload.com/wp-content/themes/vsimakova/img/fa.svg" alt="Facebook"></a></li>
               <!-- if under__the --> 
               <li> <a href="https://www.instagram.com" target="_blank"><img class="facebook" src="https://secureservercdn.net/160.153.138.217/ujk.263.myftpupload.com/wp-content/themes/vsimakova/img/in.svg" alt="Instagram"></a></li>
            </ul>
         </div>
      </div>
   </div>
</footer>
  
  
<?php if(0){ ?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
<?php } ?>
<?php
//get_sidebar();
get_footer();
