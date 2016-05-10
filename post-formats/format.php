              <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
              ?>

              <div id="main" class="wrapper style1">
                <div class="container">
                  <header class="major">
                    <h2><?php the_title(); ?></h2>
                  </header>

                  <!-- Content -->
                    <section id="content">
                      <a href="" class="image fit"><?php the_post_thumbnail('post-thumbnail'); ?></a>
                      <?php the_content(); ?>
                    </section>

                    <?php
                      wp_link_pages( array(
                        'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                        'after'       => '</div>',
                        'link_before' => '<span>',
                        'link_after'  => '</span>',
                      ) );
                    ?>
                </div>
              </div>
