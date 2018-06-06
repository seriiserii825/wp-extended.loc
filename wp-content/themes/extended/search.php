<?php get_header(); ?>

<div class="page-title">
    <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /  <?php the_title(); ?></p>
</div>

<?php if ( have_posts() ) : ?> 
  <div class="content-main">
      <?php while ( have_posts() ) : the_post(); ?>
          <div class="artical-anons-main">

            <div class="artical-head">
                <h1><?php the_title(); ?></h1>
                <p><?php my_list_tags(); ?></p>
            </div>
            <p><?php the_excerpt(); ?></p>
            <p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
        </div>
    <?php endwhile; ?>
    
    <div class="pager">
        <?php my_pagenavi(); ?>    
    </div>

</div>  
<?php else: ?>
    <div class="content-main">Ничего не найдено</div>
<?php endif; ?>

<?php get_footer(); ?>
