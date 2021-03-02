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

<!--Song Section-->
<?php if (have_rows('music_section')) : ?>
<?php while (have_rows('music_section')) : the_row(); ?>
<section class="section song-section">
  <div class="container">
    <div class="row song-row">
      <div class="col-lg-8 sol-md-8 col-sm-4 song-col">
        <div class="song-wrapper">
          <div class="media-content">
            <h1><?php the_sub_field('title'); ?></h1>
          </div>
          <div class="media-player">
            <audio src="/wp-content/uploads/2021/02/first_piece.m4a" 
                  type="audio/mpeg" 
                  controls>
                  I'm sorry. You're browser doesn't support HTML5 <code>audio</code>.
            </audio>
          </div>
        </div>
      </div>
      <div class="col-lg-8 sol-md-8 col-sm-4 song-col">
        <div class="song-wrapper">
          <div class="media-content">
            <h1><?php the_sub_field('title'); ?></h1>
          </div>
          <div class="media-player">
            <audio src="/wp-content/uploads/2021/02/first_piece.m4a" 
                  type="audio/mpeg" 
                  controls>
                  I'm sorry. You're browser doesn't support HTML5 <code>audio</code>.
            </audio>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--/Song Section-->


<?php get_footer(); ?>
