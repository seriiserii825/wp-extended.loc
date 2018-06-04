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
      <!-- no posts found -->
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
            <!-- no posts found -->
        <?php endif; ?>
       <!-- <div class="whatwedo">
            <div>
                <h1><span>Flexibility</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div> 
            <div>
                <h1><span>Mobile Friendly</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div>
            <div>
                <h1><span>Very Powerful</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div>
            <div>
                <h1><span>Drag Modules</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div>       
        </div>-->
        
        <h1 class="center-n"><span class="hnc">Our Latest Work</span> <span class="hnl">/ <a href="#">View All Portfolio</a></span></h1> 
        <div class="our-works-main">
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work1.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work2.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work3.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work4.jpg" alt="" />
                </a>
            </div>
        </div>
        
        <div class="advance">
            
            <div class="why-us">
                <!-- Accordion -->
                <h1 class="center-n"><span class="hnc">Why Choose Us</span></h1>
                <div id="accordion">
                    <h3>Accordion Title 1</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
                    
                    <h3>Accordion Title 2</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
                    
                    <h3>Accordion Title 3</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>                    
                </div>
            
            </div>
           
           <div class="our-services"> 
                <!-- Tabs -->
                <h1 class="center-n"><span class="hnc">Our Services</span></h1>
                <div id="tabs">                 
                    <ul>
                        <li><a href="#tabs-1">Tab Title 1</a></li>
                        <li><a href="#tabs-2">Tab Title 2</a></li>
                        <li><a href="#tabs-3">Tab Title 3</a></li>
                        <li><a href="#tabs-4">Tab Title 4</a></li>
                    </ul>
                    <div id="tabs-1"><img class="img-righter" src="<?php bloginfo('template_url'); ?>/images/tabs-img1.jpg" alt="" />Cum sociis natoque penatibus et magnis dis partent montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis disamet non magna.</div>
                    <div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
                    <div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
                    <div id="tabs-4">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
                </div>
            </div>
        
        </div>
           
    </div>
    
    <?php get_footer(); ?>