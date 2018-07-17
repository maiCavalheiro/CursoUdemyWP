<?php
/*Template Name: General Template */
 ?>

 <?php get_header(); ?>
 <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
       <div class="content-area">
         <main>
               <section class="middle-area">
                 <div class="container">
                     <aside class="sidebar col-md-4">Barra Lateral</aside>
                     <div class="general-template">
                       <?php // se ouver posts
                       if ( have_posts()):
                         // enquanto houver posts, chama o post
                         while (have_posts()): the_post();
                       ?>

                       <article>
                         <h2><?php the_title(); ?></h2>
                         <?php the_content(); ?>
                       </article>

                       <?php
                     endwhile;
                     //se não houver post
                   else:
                        ?>
                        <p>there's nothing yet...</p>
                      <?php endif; ?>
                     </div>
               </div>
             </section>
         </main>
       </div>
 <?php get_footer(); ?>
