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
  <div class="container-fluid">

    <?php if (have_rows('project_one')) : ?>
    <?php while (have_rows('project_one')) : the_row(); ?> 
    <div class="row project-row">
        <div class="col-lg-6 project-col"> 
            <div class="wrapper">
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/ott_3.png" alt="website screen shot"/> 
                </div> 
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/ott_2.png"   alt="website screen shot"/>
                </div>
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/ott_1.png"   alt="website screen shot"/>
                </div>
            </div>
        </div>
        <div class="col-lg-6 content-col">  
            <h3><?php the_sub_field('title'); ?></h3>
            <p class="content"><?php the_sub_field('content');?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('project_two')) : ?>
    <?php while (have_rows('project_two')) : the_row(); ?> 
    <div class="row project-row">
        <div class="col-lg-6 project-col"> 
            <div class="wrapper">
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/emindful_1.png" alt="website screen shot"/> 
                </div> 
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/emindful_2.png"   alt="website screen shot"/>
                </div>
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/emindful_3.png"   alt="website screen shot"/>
                </div>
            </div>
        </div>
        <div class="col-lg-6 content-col">  
            <h3><?php the_sub_field('title'); ?></h3>
            <p class="content"><?php the_sub_field('content');?></p>
        </div>
   
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('project_three')) : ?>
    <?php while (have_rows('project_three')) : the_row(); ?>      
    <div class="row project-row">
        <div class="col-lg-6  project-col"> 
            <div class="wrapper">
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/sscf_1.png" alt="website screen shot"/> 
                </div> 
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/sscf_2.png"   alt="website screen shot"/>
                </div>
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/sscf_3.png"   alt="website screen shot"/>
                </div>
            </div>
        </div>
        <div class="col-lg-6 content-col">  
            <h3><?php the_sub_field('title'); ?></h3>
            <p class="content"><?php the_sub_field('content');?></p>
        </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('project_four')) : ?>
    <?php while (have_rows('project_four')) : the_row(); ?>
    <div class="row project-row">
        <div class="col-lg-6 project-col"> 
            <div class="wrapper">
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/bio_1.png" alt="website screen shot"/> 
                </div> 
                <div class="img-wrapper">
                    <img src="/wp-content/uploads/2021/03/bio_2.png"   alt="website screen shot"/>
                </div>
                <!-- <div class="img-wrapper mobile-img">
                    <img src="/wp-content/uploads/2021/03/bio_mobile1.png"   alt="website screen shot"/>
                </div> -->
                <div class="img-wrapper mobile-img">
                    <img src="/wp-content/uploads/2021/03/bio_mobile2.png"   alt="website screen shot"/>
                </div>
            </div>
        </div>
        <div class="col-lg-6 content-col">  
            <h3><?php the_sub_field('title'); ?></h3>
            <p class="content"><?php the_sub_field('content');?></p>
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