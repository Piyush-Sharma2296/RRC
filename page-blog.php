
<?php
/*
Template Name: Blog Page
*/
?>

<?php get_header(); ?>
<header class="navbar">
    <div class="nav-container">

      <!-- Logo -->
       <div class="logo">
      <a href="<?php echo site_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/RRC-Long-logo.webp">
      </a>

      </div>

      <!-- Hamburger -->
      <div class="hamburger" onclick="toggleMenu()">
        ☰
      </div>

      <!-- Menu -->
      <nav class="menu" id="navMenu">
        <a href="<?php echo site_url('/'); ?>">Home</a>
      <a href="<?php echo site_url('/about'); ?>">About</a>
      <a href="<?php echo site_url('/services'); ?>">Services</a>
      <a href="<?php echo site_url('/blog'); ?>">Blog</a>
      <a href="<?php echo site_url('/contact'); ?>">Contact</a>
      <a href="<?php echo site_url('/rental'); ?>">Rental</a>
        <!-- <a href="#ticket" class="mobile-btn">Complaint Ticket</a> -->
      </nav>

      <!-- Desktop Button -->
      <!-- <div class="nav-btn">
        <a href="#ticket">Complaint Ticket</a>
      </div> -->

    </div>
  </header>
<main class="rr-blog-page">

    <!-- HERO -->
    <section class="rr-blog-hero">
        <div class="container">
            <h1>RR Computers Blog</h1>

            <p>
                Latest computer repair tips, laptop rental guides,
                CCTV solutions, networking advice, and IT support insights.
            </p>
        </div>
    </section>

    <!-- BLOG GRID -->
    <section class="rr-blog-section">
        <div class="container">

            <div class="rr-blog-grid">

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                );

                $blog_query = new WP_Query($args);

                if($blog_query->have_posts()) :

                    while($blog_query->have_posts()) :
                        $blog_query->the_post();
                ?>

                <article class="rr-blog-card">

                    <a href="<?php the_permalink(); ?>">

                        <div class="rr-blog-image">

                            <?php if(has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail('large'); ?>

                            <?php else : ?>

                                <img src="<?php echo get_template_directory_uri(); ?>/img/default-blog.jpg" alt="<?php the_title(); ?>">

                            <?php endif; ?>

                        </div>

                        <div class="rr-blog-content">

                            <div class="rr-blog-meta">
                                <span><?php echo get_the_date(); ?></span>
                            </div>

                            <h2><?php the_title(); ?></h2>

                            <p>
                                <?php echo wp_trim_words(get_the_excerpt(), 22); ?>
                            </p>

                            <span class="rr-read-more">
                                Read More →
                            </span>

                        </div>

                    </a>

                </article>

                <?php
                    endwhile;
                    wp_reset_postdata();

                else :
                ?>

                    <p>No blog posts found.</p>

                <?php endif; ?>

            </div>

            <!-- PAGINATION -->

            <div class="rr-pagination">

                <?php
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages
                ));
                ?>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
