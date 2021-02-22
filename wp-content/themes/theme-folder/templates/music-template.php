<?php /* Template Name: Music Page*/ ?>

<?php get_header(); ?>

<!--Hero-->
<?php if (have_rows('music_hero')) : ?>
<?php while (have_rows('music_hero')) : the_row(); ?>
<section class="section music-hero">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hero-content">
          <h1><?php the_sub_field('title'); ?></h1>
          <h3><?php the_sub_field('tag'); ?></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--/Hero-->


<?php get_footer(); ?>
