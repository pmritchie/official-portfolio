<?php /* Template Name: Project Page*/ ?>

<?php get_header(); ?>

<!--Hero-->
<?php if (have_rows('hero')) : ?>
<?php while (have_rows('hero')) : the_row(); ?>
<section class="section hero-section">
  <div class="container">
    <div class="row hero-row">
      <div class="col-12 hero-col">  
          <h1><?php the_sub_field('hero_title'); ?></h1>
          <p><?php the_sub_field('hero_content'); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--/Hero-->

<!--Project Section-->
<?php if (have_rows('project_section')) : ?>
<?php while (have_rows('project_section')) : the_row(); ?>
<section class="section project-section">
  <div class="container">
    <?php if (have_rows('project_one')) : ?>
    <?php while (have_rows('project_one')) : the_row(); ?> 
    <div class="row project-row">
        <div class="col-5 project-col"> 
            <?php $image_one = get_sub_field('image_one'); 
                    $image_two = get_sub_field('image_two'); ?> 
            <div class="img-wrapper">
                <img src="<?php echo $image_one['url']; ?>"/> 
            </div> 
            <div class="img-wrapper">
                <img src="<?php echo $image_two['url'];?>"  />
            </div>
        </div>
        <div class="col-5 project-col">  
            <h3><?php the_sub_field('project_title'); ?></h3>
            <p class="content"><?php the_sub_field('project_content');?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('project_two')) : ?>
    <?php while (have_rows('project_two')) : the_row(); ?> 
    <div class="row project-row">
        <div class="col-5 project-col"> 
            <?php $image_one = get_sub_field('image_one'); 
                    $image_two = get_sub_field('image_two'); ?> 
            <div class="img-wrapper">
                <img src="<?php echo $image_one['url']; ?>"/> 
            </div> 
            <div class="img-wrapper">
                <img src="<?php echo $image_two['url'];?>" />
            </div>
        </div>
        <div class="col-5 project-col">  
            <h3><?php the_sub_field('project_title'); ?></h3>
            <p class="content"><?php the_sub_field('project_content');?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('project_three')) : ?>
    <?php while (have_rows('project_three')) : the_row(); ?>      
    <div class="row project-row">
        <div class="col-5 project-col"> 
            <?php $image_one = get_sub_field('image_one'); 
                    $image_two = get_sub_field('image_two'); ?> 
            <div class="img-wrapper">
                <img src="<?php echo $image_one['url']; ?>"/> 
            </div> 
            <div class="img-wrapper">
                <img src="<?php echo $image_two['url'];?>"/>
            </div>
        </div>
        <div class="col-5 project-col">  
            <h3><?php the_sub_field('project_title'); ?></h3>
            <p class="content"><?php the_sub_field('project_content');?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('project_four')) : ?>
    <?php while (have_rows('project_four')) : the_row(); ?>
    <div class="row project-row">
        <div class="col-5 project-col"> 
            <?php $image_one = get_sub_field('image_one'); 
                    $image_two = get_sub_field('image_two'); ?> 
            <div class="img-wrapper">
                <img src="<?php echo $image_one['url']; ?>"/> 
            </div> 
            <div class="img-wrapper">
                <img src="<?php echo $image_two['url'];?>"/>
            </div>
        </div>
        <div class="col-5 project-col">  
            <h3><?php the_sub_field('project_title'); ?></h3>
            <p class="content"><?php the_sub_field('project_content');?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?> 
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<!--/Project Section-->

<?php get_footer(); ?>