<?php /* Template Name: Javascript Template */ ?>

<?php get_header(); ?>
<!--Hero-->
<?php if (have_rows('javascript_hero')) : ?>
<?php while (have_rows('javascript_hero')) : the_row(); ?>
<section class="section hero-section">
  <div class="container">
    <div class="row hero-row">
      <div class="col-lg-5 col-md-6 col-sm-12 content-col">
        <div class="hero-content">
          <h1><?php the_sub_field('title'); ?></h1>
          <p><?php the_sub_field('content');?></p>   
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Hero-->
<!--Projects-->
<?php if (have_rows('project')) : ?>
<?php while (have_rows('project')) : the_row(); ?>
<section class="section project-section">
  <div class="container">
    <div class="row project-row">
      <div class="col-lg-10 col-md-10 col-sm-12 content-col">
  
      </div>
    </div>
    <div class="row project-row">
      <div class="col-lg-10 col-md-10 col-sm-12 content-col">
  
      </div>
    </div>
    <div class="row project-row">
      <div class="col-lg-10 col-md-10 col-sm-12 content-col">
  
      </div>
    </div>

  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--Projects-->

<?php get_footer(); ?>