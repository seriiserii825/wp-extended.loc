<?php get_header(); ?>

<div class="page-title">
    <?php $category = get_the_category(); ?>
    <h1><?php echo $category[0]->name; ?></h1>
    <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /
      <a href="<?php echo get_category_link($category[0]->cat_ID) ?>"><?php echo $category[0]->name; ?></a> / <?php the_title(); ?></p>
  </div>

    <?php $gallery_data = get_post_meta( $post->ID, 'gallery', true ); ?>
    <?php if(!empty($gallery_data)): ?>
        <?php   $gallery_id = explode(  ',', $gallery_data  ); ?>

            <div class="slider-porfolio">
                <div class="flexslider">
                    <ul class="slides">            
                        <?php foreach($gallery_id as $id): ?>
                            <li>                
                                <?php echo wp_get_attachment_image( $id, 'full' ); ?>
                                <img src="<?php bloginfo('template_url'); ?>/images/portfolio-shadow.png" alt="" />
                            </li> 
                        <?php  endforeach; ?>
                    </ul>
                </div>
            </div>
   
    <?php endif;  ?>

<div class="content-main">

    <div class="content-left">
        <h2 class="projeact-descrip"><span><img src="<?php bloginfo('template_url'); ?>/images/progect-descript.jpg" alt="" /> Project Description</span></h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
          <!-- no posts found -->
        <?php endif; ?>
    </div>

    <div class="right-bar">
        <?php if(!dynamic_sidebar( 'single_portfolio' )): ?>
            <h3><span>Сайдбар</span></h3>
        <?php endif; ?>
    </div>

    <div class="clr"></div><br/>

    <h1 class="center-n"><span class="hnc">Related Projects</span></h1> 

    <?php 
        $category_id = get_the_category($post->ID)[0]->cat_ID; 
        $tags = my_list_tags(false);
    ?>

    <?php if(!empty($tags)): ?>
        
        <?php $post_related = new WP_Query([
                'cat' => $category_id,
                'tag' => $tags,
                'posts_per_page' => 4,
                'post__not_in' => [$post->ID]
            ]); ?>
        <div class="our-works-main">
            <?php if ( $post_related->have_posts() ) : while ( $post_related->have_posts() ) : $post_related->the_post(); ?>
                <div class="our-works">
                    <a class="our-work-href" href="<?php the_permalink(); ?>">                    
                        <img class="our-work-img" src="<?php echo get_post_meta($post->ID, 'portfolio_img', true); ?>" alt="" />
                    </a>
                </div>
              <?php endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <h1>Связанных записей не найдено!!!</h1>
            <?php endif; ?>
        </div>        
    <?php endif; ?>

    <!-- <div class="our-works-main">
        <div class="our-works">
            <a class="our-work-href" href="#">                    
                <img class="our-work-img" src="images/our-work1.jpg" alt="" />
            </a>
        </div>
        <div class="our-works">
            <a class="our-work-href" href="#">
                <img class="our-work-img" src="images/our-work2.jpg" alt="" />
            </a>
        </div>
        <div class="our-works">
            <a class="our-work-href" href="#">
                <img class="our-work-img" src="images/our-work3.jpg" alt="" />
            </a>
        </div>
        <div class="our-works">
            <a class="our-work-href" href="#">
                <img class="our-work-img" src="images/our-work4.jpg" alt="" />
            </a>
        </div>
    </div> -->
    <!-- works-main -->
</div>
<!-- content-main -->

<?php get_footer(); ?>