<?php get_header(); ?>

<div class="page-title">
    <h1><?php single_cat_title(); ?></h1>
    <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /  <?php single_cat_title(); ?></p>
</div>

<?php 

$cat_id = get_query_var( 'cat' );

$tags = get_tags_in_cat($cat_id);
?>

<?php if($tags): ?>

    <div class="page-nav">

        <ul>            
            <?php foreach ($tags as $key => $value) : ?>
                <li><a href="<?php echo get_tag_link($key); ?>"><?php echo $value; ?></a></li>
            <?php endforeach; ?>
        </ul>

    </div>

<?php endif; ?>

<?php if ( have_posts() ) : ?> 
  <div class="content-main">
      <?php while ( have_posts() ) : the_post(); ?>
          <div class="artical-anons-main">
            <?php the_post_thumbnail( 'full', ['class' => 'artical-img'] ); ?>

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

          <!--<ul class="pager">          
            <li><a href="#" class="now">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>             
        </ul>-->
    </div>  
<?php else: ?>
  <div class="content-main">В рубрике нет постов</div>
<?php endif; ?>

<?php get_footer(); ?>
