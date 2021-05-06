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
          <h1><?php the_sub_field('page_heading'); ?></h1>
          <p><?php the_sub_field('page_description');?></p>   
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
<section class="section project-section">
  <div class="container">
  <?php if (have_rows('project_one')) : ?>
  <?php while (have_rows('project_one')) : the_row(); ?>
    <div class="row project-row">
      <div class="heading-col col-lg-10 col-md-10 col-sm-12 ">
        <h1><?php the_sub_field('project_one_title'); ?></h1>
        <p><?php the_sub_field('project_one_description');?></p> 
      </div>
      <div class="col-lg-10 col-md-10 col-sm-12 content-col">
        <div id="clock" class="calculator"></div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php if (have_rows('project_two')) : ?>
  <?php while (have_rows('project_two')) : the_row(); ?>
    <div class="row project-row">  
      <div class="heading-col col-lg-10 col-md-10 col-sm-12 ">
        <h1><?php the_sub_field('project_one_title'); ?></h1>
        <p><?php the_sub_field('project_one_description');?></p> 
      </div>
      <div class="col-lg-10 col-md-10 col-sm-12 content-col">
      <div class="matching-game"></div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php if (have_rows('project_three')) : ?>
    <?php while (have_rows('project_three')) : the_row(); ?>
    <div class="row project-row">
      <div class="heading-col col-lg-10 col-md-10 col-sm-12 ">
        <h1><?php the_sub_field('project_one_title'); ?></h1>
        <p><?php the_sub_field('project_one_description');?></p> 
      </div>
      <div class="col-lg-10 col-md-10 col-sm-12 content-col">
        <div class="quotes"></div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<!--Projects-->

<?php get_footer(); ?>