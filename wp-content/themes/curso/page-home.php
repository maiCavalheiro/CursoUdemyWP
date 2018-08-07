<?php get_header(); ?>
      <div class="content-area">
        <main>
          <section class="slide">
            <div class="container">
              <div class="row">Slide</div>
            </div>
          </section>
            <section class="services">
              <div class="container">
                <h1>Our Services</h1>
                <div class="row">
                  <div class="col-md-4">
                    <div class="services-item">
                      <?php if(is_active_sidebar('service-1') ){
                              dynamic_sidebar('service-1'); }
                          ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="services-item">
                      <?php if(is_active_sidebar('service-2') ){
                      	       dynamic_sidebar('service-2'); }?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="services-item">
                      <?php if(is_active_sidebar('service-3') ){
                      		      dynamic_sidebar('service-3'); } ?>
                    </div>
                  </div>
                </div>
              </div>
              </section>
              <section class="middle-area">
                <div class="container">
                  <div class="row">
                    <?php get_sidebar('home');?>
                    <div class="news col-md-8">
                      <div class="row">
                        <?php
                        /*busca no bd os posts que vao ser mostrados*/
                                                /*tipo=(post ou page) - qtd de posts - categoria=id */
                        $featured = new WP_Query('post_type=post&posts_per_page=1$cat8,2');

                        if($featured->have_posts()):
                          while ($featured->have_posts()): $featured->the_post(); ?>

                          <div class="col-12">
                            <?php get_template_part('template-parts/content', 'featured'); ?>
                          </div>
                          <?php
                        endwhile;
                        wp_reset_postdata();
                      endif;
                         ?>

                          <?php
                          /*segundo loop*/
                          $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                          //  'category__not_in' => array(5),
                          //  'category__in' => array(8, 2),
                            'category__not_in' => array(6),
                            'category__in' => array(3, 9),
                            'offset' => 1
                           );
                          $secondary = new WP_Query( $args);

                          if($secondary->have_posts()):
                            while ($secondary->have_posts()): $secondary->the_post(); ?>

                            <div class="col-sm-6">
                              <?php get_template_part('template-parts/content', 'secondary'); ?>
                            </div>

                          <?php
                        endwhile;
                        wp_reset_postdata();
                      endif;
                         ?>
                      </div>
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
