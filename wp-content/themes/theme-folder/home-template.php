<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>

<div class="modal fade"
  id="homePageVideoModal"
  tabindex="-1"
  role="dialog"
  aria-labelledby="homePageVideoModalLabel"
  aria-hidden="true">
  <div class="modal-dialog"
    role="document">
    <button type="button"
      class="close"
      data-dismiss="modal"
      aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <div class="modal-content">
      <div class="modal-body">
        <div class="video-wrapper embed-responsive embed-responsive-16by9">

        </div>
      </div>
    </div>
  </div>
</div>
<!--Hero-->
<?php if (have_rows('hero')) : ?>
<?php while (have_rows('hero')) : the_row(); ?>
<section class="section hero-section">
  <div class="container">
    <div class="row title-row">
      <div class="col-12">
        <div class="hero-content hello">
          <h1><?php the_sub_field('hero_title'); ?></h1>
        </div>
      </div>
    </div>
    <div class="row content-row">
      <div class="col-lg-5">
        <p><?php the_sub_field('hero_content'); ?></p>
      </div>
    </div>
    <div class="row cta-row">
      <div class="col-lg-4">
        <div class="link-wrapper">
          <a href="#about-me" id="hero-button">Have A Gander</a>
        </div>
      </div>
    </div>

  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Hero-->

<!--About Section-->
<?php if (have_rows('about_section')) : ?>
<?php while (have_rows('about_section')) : the_row(); ?>
<section class="section about-section" id="about-me">
  <div id="box-one" class="box"><span>&lt;html&gt;</span></div>
  <div id="box-two" class="box"><span>function(){ .... }</span></div>
  <div id="box-three" class="box"><span>Hello World!</span></div>
  <div id="box-four" class="box"><img src="/wp-content/uploads/2021/03/wordpress_logo.png"/></div>
  <div id="box-five" class="box"><img src="/wp-content/uploads/2021/03/react-logo-1000-transparent.png"/><span>React JS</span></div>
  <div id="box-six" class="box"><span>JS</span></div>
  <div class="container">
    <div class="row about-row">
      <div class="col-lg-8 col-sm-12">
        <div class="about-content">
          <h3><?php the_sub_field('about_title'); ?></h3>
          <p><?php the_sub_field('about_content'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/About Section-->

<!--Experience Section-->
<?php if (have_rows('experience_section')) : ?>
<?php while (have_rows('experience_section')) : the_row(); ?>
<section class="section experience-section">
  <div class="container">
    <div class="row title-row">
      <div class="col-12">
        <div class="experience-content">
          <h3><?php the_sub_field('title'); ?></h3>
          <p><?php the_sub_field('about_content'); ?></p>
        </div>
      </div>
    </div>
    <div class="row feature-row">
    <?php if (have_rows('website_one')) : ?>
      <?php while (have_rows('website_one')) : the_row(); ?> 
        <div class="col-lg-5 col-md-6 col-sm-6 feature-col">
          <div class="feature-box">
            <div class="fade-in-1">
            <?php $img_one = get_sub_field('image_one'); ?>
              <img src="<?php echo $img_one['url'] ?>" alt=""/>
            </div>
            <h3><?php the_sub_field('website_title'); ?></h3>
            <p><?php the_sub_field('website_content'); ?></p>
            <?php $website_link = get_sub_field('website_link'); ?>
            <a href="<?php echo $website_link['url'] ?>" target="_blank"><?php echo $website_link['title']?></a>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if (have_rows('website_two')) : ?>
      <?php while (have_rows('website_two')) : the_row(); ?> 
      <?php $img_two = get_sub_field('image_two');?>
        <div class="col-lg-5 col-md-6 col-sm-6 feature-col">
          <div class="feature-box">
            <div class="fade-in-2">
              <img src="<?php echo $img_two['url'] ?>" alt=""/>
            </div>
            <h3><?php the_sub_field('website_title'); ?></h3>
            <p><?php the_sub_field('website_content'); ?></p>
            <?php $website_link = get_sub_field('website_link'); ?>
            <a href="<?php echo $website_link['url'] ?>" target="_blank" ><?php echo $website_link['title']?></a>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if (have_rows('website_three')) : ?>
      <?php while (have_rows('website_three')) : the_row(); ?> 
      <?php $img_three = get_sub_field('image_three'); ?>
        <div class="col-lg-5 col-md-6 col-sm-6 feature-col">
          <div class="feature-box">
            <div class="fade-in-3">
              <img src="<?php echo $img_three['url'] ?>" alt=""/>
            </div>
            <h3><?php the_sub_field('website_title'); ?></h3>
            <p><?php the_sub_field('website_content'); ?></p>
            <?php $website_link = get_sub_field('website_link'); ?>
            <a href="<?php echo $website_link['url'] ?>" target="_blank"><?php echo $website_link['title']?></a>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if (have_rows('website_four')) : ?>
      <?php while (have_rows('website_four')) : the_row(); ?> 
      <?php $img_four = get_sub_field('image_four');?>
        <div class="col-lg-5 col-md-6 col-sm-6 feature-col">
          <div class="feature-box">
            <div class="fade-in-4">
              <img src="<?php echo $img_four['url'] ?>" alt=""/>
            </div>
            <h3><?php the_sub_field('website_title'); ?></h3>
            <p><?php the_sub_field('website_content'); ?></p>
            <?php $website_link = get_sub_field('website_link'); ?>
            <a href="<?php echo $website_link['url'] ?>" target="_blank"><?php echo $website_link['title']?></a>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-lg-12 link-col">
        <a href="mike-ritchie.com/projects" target="_blank">Go To Projects page</a>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Experience Section-->

<?php get_footer(); ?>
