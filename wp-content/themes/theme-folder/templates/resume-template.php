<?php /* Template Name: Resume Page*/ ?>

<?php get_header(); ?>

<!--Hero-->
<?php if (have_rows('resume_section')) : ?>
<?php while (have_rows('resume_section')) : the_row(); ?>
<section class="section resume-section">
  <div class="container">
    <div class="row">
      <div class="col-12 resume-col">  
          <h1><?php the_sub_field('header'); ?></h1>
          <h3><?php the_sub_field('side_note'); ?></h3>
          <?php $image = get_sub_field('image'); ?>
          <?php $image_two = get_sub_field('image_two'); ?>
          <div class="img-wrapper">
            <img src="<?php echo $image['url']; ?>" target="_blank" alt="<?php echo $image['title']; ?>"/>
          </div>
          <div class="img-wrapper">
            <img src="<?php echo $image_two['url']; ?>" target="_blank" alt="<?php echo $image_two['title']; ?>"/>
          </div>
          <?php $link = get_sub_field('link'); ?>
          <a href="<?php echo $link['url']; ?>" target="_blank" rel="noreferrer noopener"><?php echo $link['title']; ?></a>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--/Hero-->

<?php get_footer(); ?>