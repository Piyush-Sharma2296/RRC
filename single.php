<?php get_header(); ?>

<main class="rr-single-page">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="rr-single-hero">
    <div class="container">
      <p class="rr-single-date"><?php echo get_the_date(); ?></p>
      <h1><?php the_title(); ?></h1>
    </div>
  </section>

  <?php if (has_post_thumbnail()) : ?>
    <section class="rr-single-featured">
      <div class="container">
        <?php the_post_thumbnail('full'); ?>
      </div>
    </section>
  <?php endif; ?>

  <section class="rr-single-body">
    <div class="container rr-single-layout">

      <article class="rr-single-content">
        <?php the_content(); ?>
      </article>

      <aside class="rr-single-sidebar">
        <div class="rr-sidebar-box">
          <h3>Need Computer Support?</h3>
          <p>Get laptop repair, desktop repair, CCTV installation, networking, rental laptops, and AMC support across Delhi NCR.</p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>
        </div>

        <div class="rr-sidebar-box">
          <h3>Our Services</h3>
          <ul>
            <li>Laptop Repair</li>
            <li>Desktop Repair</li>
            <li>Laptop Rental</li>
            <li>CCTV Installation</li>
            <li>Networking Support</li>
            <li>AMC Support</li>
          </ul>
        </div>
      </aside>

    </div>
  </section>

<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>