<?php /* Template Name: Music Page*/ ?>

<?php get_header(); ?>

<!--Hero-->
<!-- <?php if (have_rows('music_hero')) : ?>
<?php while (have_rows('music_hero')) : the_row(); ?>
<section class="section music-hero">
  <div class="overlay"></div>
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
<?php endif; ?> -->

<!--/Hero-->

<!--Song Section-->
<?php if (have_rows('music_section')) : ?>
<?php while (have_rows('music_section')) : the_row(); ?>
<section class="section song-section">
  <div class="container-fluid">
    <div class="row song-row">
      <div class="col-lg-8 heading-col">
        <h2>Recordings</h2>
        <p>More Coming Soon!</p>
      </div>
      <div class="col-lg-10 sol-md-10 col-sm-4 song-col">
        <div class="song-wrapper">
          <div class="media-player">
            <div class='spokes'></div>
            <div class='spokes'></div>
            <?php echo do_shortcode("
            [audioalbum title='Jamaroo' detail='Quick jams']
            [audiotrack title='Jamaroo' songwriter='Mike Ritchie' m4a='/wp-content/uploads/2021/03/jambaroo.m4a']
            [audiotrack title='Chill Vibes' songwriter='Mike Ritchie' m4a='/wp-content/uploads/2021/03/chill_vibes.m4a']") ?>
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