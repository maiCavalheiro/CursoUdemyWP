<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
      <div class="content-area">
        <main>
          <section class="slide">
            <div class="container">
              <div class="row">Slide</div>
            </div>
          </section>
            <section class="services">
              <div class="container">
                <div class="row">Serviços</div>
              </div>
              </section>
              <section class="middle-area">
                <div class="container">
                  <div class="row">
                    <aside class="sidebar col-md-4">Barra Lateral</aside>
                    <div class="news col-md-8">
                      <?php // se ouver posts
                      if ( have_posts()):
                        // enquanto houver posts, chama o post
                        while (have_posts()): the_post();
                      ?>

                      <?php get_template_part('template-parts/content'); ?>

                      <?php
                    endwhile;
                    //se não houver post
                  else:
                       ?>
                       <p>there's nothing yet...</p>
                     <?php endif; ?>
                    </div>
                  </div>
              </div>
              </section>
              <div class="container">
                <div class="row">
                  <section class="map">Mapa</section>
                </div>
              </div>
        </main>
      </div>
<?php get_footer(); ?>
