<?php get_header(); ?>
    
       <div class="slider">
        <div class="flexslider">
          <ul class="slides">
            <?php $slider_index = new WP_Query([
                    'post_type' => 'slider'
                ]);?>

            <?php if ( $slider_index->have_posts() ) : while ( $slider_index->have_posts() ) : $slider_index->the_post(); ?>
                <li>
                    <div class="slide-content">
                        <?php the_content(); ?>
                    </div>
                    <img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" />
                </li>              
              <?php endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
            <?php endif; ?>

          </ul>
        </div>
      </div>

    <div class="under-slider">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php endwhile; ?>
       <h1><?php the_title(); ?></h1>
       <?php the_content(); ?>
      <?php else: ?>
      <h1><span class="hnc">Место для контента старницы</span></h1>          
    <?php endif; ?>
    </div>
    
    <div class="content-main">
        <?php 
            $id = 3;
            $posts_about = new WP_Query(['cat' => $id, 'posts_per_page' => 4, 'order' => 'ASC']); 
        ?>
        
        <?php if ( $posts_about->have_posts() ) : ?> 
            <div class="whatwedo">
                <?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
                    <div>
                        <h1><span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span></h1>
                        <p><?php the_excerpt(); ?></p>
                    </div>     
                <?php endwhile; ?>
            </div>
            <?php else: ?>
            <h1><span class="hnc">Место для записей из рубрики About Us</span></h1>          
        <?php endif; ?>


        <?php 
            $id = 5;
            $posts_about = new WP_Query(['cat' => $id, 'posts_per_page' => 4, 'order' => 'ASC']); 
        ?>

        <?php if ( $posts_about->have_posts() ) : ?> 
            <h1 class="center-n">
                <span class="hnc">Our Latest Work</span> 
                <span class="hnl">
                    / <a href="<?php echo get_category_link($id); ?>">View All Portfolio</a>
                </span>
            </h1> 

            <div class="our-works-main">    
            <?php while ( $posts_about->have_posts() ) : $posts_about->the_post(); ?>
                <div class="our-works">
                    <a class="our-work-href" href="<?php the_permalink(); ?>">
                        <div class="our-work-short">
                            <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                            <h3><?php the_title(); ?></h3>
                            <p><?php my_list_tags(); ?></p>
                            <!--<p>Photoshop, Lightroom</p>-->
                        </div>
                        <img class="our-work-img" src="<?php echo get_post_meta(get_the_ID(), 'portfolio_img', true); ?>" alt="" />
                    </a>
                </div>    
            <?php endwhile; ?>
            </div>
          <?php else: ?>
            <h1><span class="hnc">Место для записей из рубрики Wour Works</span></h1>          
        <?php endif; ?>
        
        <div class="advance">

            <?php 
                $id = 11;
                $posts_accordeon = new WP_Query(['cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC']); 
            ?>

            <?php if ( $posts_accordeon->have_posts() ) : ?> 
                <div class="why-us">
                    <h1 class="center-n"><span class="hnc">Why Choose Us</span></h1>
                    <div id="accordion">    
                      <?php while ( $posts_accordeon->have_posts() ) : $posts_accordeon->the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>
                      <?php endwhile; ?>
                    </div>
                </div>
              <?php else: ?>
                <h1 class="center-n"><span class="hnc">Записи в формате аккордеон</span></h1>
            <?php endif; ?>
            
            <?php 
                $id = 12;
                $posts_tabs = new WP_Query(['cat' => $id, 'posts_per_page' => 4, 'order' => 'ASC']); 
            ?>      

            <?php if ( $posts_tabs->have_posts() ) : ?> 
                <div class="our-services"> 
                    <h1 class="center-n"><span class="hnc">Our Services</span></h1>
                    <div id="tabs">                 
                        <ul>
                            <?php while ( $posts_tabs->have_posts() ) : $posts_tabs->the_post(); ?>
                                <li><a href="#tabs-<?php the_ID();?>"><?php the_title(); ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                        
                        <?php while ( $posts_tabs->have_posts() ) : $posts_tabs->the_post(); ?>
                            <div id="tabs-<?php the_ID();?>"><?php the_content(); ?></div>    
                        <?php endwhile; ?>

                    </div>
                </div>
                <?php else: ?>
                <h1 class="center-n"><span class="hnc">Записи в формате вкладок</span></h1>
              <?php endif; ?>      
           
        </div>
           
    </div>
    
    <?php get_footer(); ?>