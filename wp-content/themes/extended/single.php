<?php 

  if(in_category( 'our-work' )){
    include __DIR__ . '/portfolio.php';
    exit;
  }

?>
<?php get_header(); ?>
<div class="page-title">
    <?php $category = get_the_category(); ?>
    <h1><?php echo $category[0]->name; ?></h1>
    <p class="page-title-map"><a href="<?php echo home_url(); ?>">Home</a>  /
      <a href="<?php echo get_category_link($category[0]->cat_ID) ?>"><?php echo $category[0]->name; ?></a> / <?php the_title(); ?></p>
</div>

<div class="content-main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_post_thumbnail( 'full', ['class' => 'img-lefter'] ); ?>
      <h1 class="center-n"><span class="hnc"><?php the_title(); ?></span></h1>
      <?php the_content(); ?>

  <?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

<?php 

$id = 4; 
$posts_team = new WP_Query(['cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC']);

?>

<h1 class="center-n"><span class="hnc">Meet Our Team</span> <span class="hnl">/ <a href="<?php echo get_category_link($id); ?>">View The Team</a></span></h1>
<div class="our-team-main">      

<?php if ( $posts_team->have_posts() ) : ?>   
  <?php while ( $posts_team->have_posts() ) : $posts_team->the_post(); ?>
    <div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <br />
            <?php the_title(); ?><br />
            <span><?php my_list_tags(); ?></span></h2>
            <p><?php the_excerpt(); ?></p>
    </div>
  <?php endwhile; ?>
</div>
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

    <h1 class="center-n"><span class="hnc">Our Clients</span></h1>

    <div class="our-clients">
        <?php if(!dynamic_sidebar( 'clients' )): ?>
            <h1 class="center-n"><span class="hnc">Блок клиентов</span></h1>            
        <?php endif; ?>
    </div>

</div>
<?php get_footer(); ?>