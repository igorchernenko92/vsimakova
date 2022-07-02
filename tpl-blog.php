<?php
/**
* Template Name: Blog Page*
*
*/
get_header(); ?>
    
 
    

    <section class="section__ blog__1">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l12 xl12">
            <h2 class="title">Welcome <span>To My Blog</span></h2>
          </div>
        </div>
      </div>
    </section>
    <section class="section__ blog__2">
      <div class="container">
        <div class="row">
          <div class="col m12 s12 l7 xl7">
            <div class="block__image"><img src="<?= get_template_directory_uri(); ?>/img/blog__.png" alt="blog__"></div>
          </div>
          <div class="col m12 s12 l5 xl5"> 
            <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_widt.svg" alt="time">April 4, 2021</div><a class="title" href="javascript:;">The Gifts of Imperfection by Brene Brown</a>
            <div class="post__">
              <p>I’ve just finished reading the book The Gifts of Imperfection by Brene Brown  and can’t stop thinking about the teachings in it, especially all of us living in such disconnecting and, at the same time, connecting times...</p>
            </div><a class="post__links" href="javascript:;">Read more</a>
          </div>
        </div>
      </div>
    </section>
    <section class="section__ blog__3">
      <div class="container">
        <div class="row">
          <div class="col m6 s12 l4 xl4">
            <div class="post__">
              <div class="images__pages"><img src="<?= get_template_directory_uri(); ?>/img/images__pages.png" alt="images__pages"></div>
              <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="time">
                <April>4, 2021</April>
              </div><a class="post__links" href="javascript:;">The Gifts of Imperfection by Brene Brown</a>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="post__">
              <div class="images__pages"><img src="<?= get_template_directory_uri(); ?>/img/images__pages.png" alt="images__pages"></div>
              <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="time">
                <April>4, 2021</April>
              </div><a class="post__links" href="javascript:;">The Gifts of Imperfection by Brene Brown</a>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="post__">
              <div class="images__pages"><img src="<?= get_template_directory_uri(); ?>/img/images__pages.png" alt="images__pages"></div>
              <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="time">
                <April>4, 2021</April>
              </div><a class="post__links" href="javascript:;">The Gifts of Imperfection by Brene Brown</a>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="post__">
              <div class="images__pages"><img src="<?= get_template_directory_uri(); ?>/img/images__pages.png" alt="images__pages"></div>
              <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="time">
                <April>4, 2021</April>
              </div><a class="post__links" href="javascript:;">The Gifts of Imperfection by Brene Brown</a>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="post__">
              <div class="images__pages"><img src="<?= get_template_directory_uri(); ?>/img/images__pages.png" alt="images__pages"></div>
              <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="time">
                <April>4, 2021</April>
              </div><a class="post__links" href="javascript:;">The Gifts of Imperfection by Brene Brown</a>
            </div>
          </div>
          <div class="col m6 s12 l4 xl4">
            <div class="post__">
              <div class="images__pages"><img src="<?= get_template_directory_uri(); ?>/img/images__pages.png" alt="images__pages"></div>
              <div class="data"><img src="<?= get_template_directory_uri(); ?>/img/time_grey.svg" alt="time">
                <April>4, 2021</April>
              </div><a class="post__links" href="javascript:;">The Gifts of Imperfection by Brene Brown</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    


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