<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>
<!--Hero-->
<?php if (have_rows('contact_section')) : ?>
<?php while (have_rows('contact_section')) : the_row(); ?>
<section class="section hero-section">
  <div class="container">
    <div class="row hero-row">
      <div class="col-4">
        <div class="hero-content">
          <h1><?php the_sub_field('contact_title'); ?></h1>
          <p><?php the_sub_field('contact_content');?></p>
          <img src="/wp-content/uploads/2021/03/O4YILM0.jpg" />
        </div>
      </div>
      <div class="col-5 form-column">
          <?php echo do_shortcode("[contact-form-7 id=97 title=ContactForm tabindex=50]"); ?>
      </div>
    </div>
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<!--/Hero-->

<?php get_footer(); ?>