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
        <div class="hamburger" onclick="toggleMenu()">☰</div>

        <!-- Menu -->
        <nav class="menu" id="navMenu">
           <a href="<?php echo site_url('/'); ?>">Home</a>
    <a href="<?php echo site_url('/about'); ?>">About</a>
    <a href="<?php echo site_url('/services'); ?>">Services</a>
    <a href="<?php echo esc_url(home_url('/blog/')); ?>"> Blog </a> 
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
    <!-- rental 1-->
    <div class="cards">
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/3400-dell-logo.webp" alt="Dell-3400">
         <div class="card-body">
          <h3>Dell Latitude 3400</h3>
          <p class="specs"><span class="Processor">Processor:</span> Typically features 7th or 8th Generation Intel Core processors
            <br>
          <span class="Display">Display:</span> 14-inch screen, with some models offering Full HD (1920 x 1080) resolution and touchscreen capabilities
            <br>
         <span class="Memory&Storage">Memory & Storage:</span> Commonly configured with 8GB Ram & 256GB SSD
            <br>
           <span class="Features">Features:</span>Often runs Windows 10 or 11 Pro and includes HDMI and USB ports for connectivity.
          </p>

          <div class="card-bottom">
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/5400-dell-logo.webp" alt="Dell-5400">
        <div class="card-body">
          <h3>Dell Latitude 5400</h3>
          <p class="specs"><span class="Processor">Processor:</span> Typically features 7th or 8th Generation Intel Core processors
            <br>
          <span class="Display">Display:</span> 14-inch screen, with some models offering Full HD (1920 x 1080) resolution and touchscreen capabilities
            <br>
         <span class="Memory&Storage">Memory & Storage:</span> Commonly configured with 8GB Ram & 256GB SSD
            <br>
           <span class="Features">Features:</span>Often runs Windows 10 or 11 Pro and includes HDMI and USB ports for connectivity.
          </p>

          <div class="card-bottom">
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
          </div>
        </div>
      </div>
      
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/m2-logo.webp" alt="Dell-5400">
        <div class="card-body">
          <h3>Apple MacBook Air M2</h3>
          <p class="specs"><span class="Processor">Processor:</span> Apple M2 chip with 8-core CPU and up to 10-core GPU
            <br>
          <span class="Display">Display:</span> 13.6-inch Liquid Retina display, 2560 x 1664 resolution with True Tone
            <br>
         <span class="Memory&Storage">Memory & Storage:</span> 8GB RAM (configurable to 24GB) & 256GB SSD (expandable options available)
            <br>
           <span class="Features">Features:</span>Ultra-slim premium design, powerful performance, long battery life, MagSafe charging, ideal for professionals and students
          </p>

          <div class="card-bottom">
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/m1-logo.webp" alt="Dell-5400">
        <div class="card-body">
        <h3>Apple MacBook Air M1</h3>
          <p class="specs"><span class="Processor">Processor:</span> Apple M1 chip with 8-core CPU and 7/8-core GPU
            <br>
          <span class="Display">Display:</span> 13.3-inch Retina display, 2560 x 1600 resolution with True Tone
            <br>
         <span class="Memory&Storage">Memory & Storage:</span> 8GB RAM (configurable to 16GB) & 256GB SSD (expandable options available)
            <br>
           <span class="Features">Features:</span> Ultra-lightweight premium laptop, silent fanless design, long battery life, ideal for professionals and students
          </p>

          <div class="card-bottom">
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
          </div>
        </div>
      </div>
      <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/img/5300-dell-logo.webp" alt="Dell-5400">
        <div class="card-body">
          <h3>Dell Latitude 5300 (Touch)</h3>
          <p class="specs"><span class="Processor">Processor:</span>8th Generation Intel Core i5/i7 processors (i5-8265U / i7-8665U)
            <br>
          <span class="Display">Display:</span> 13.3-inch screen, available in HD (1366 x 768) and Full HD (1920 x 1080) anti-glare display
            <br>
         <span class="Memory&Storage">Memory & Storage:</span> 8GB RAM (expandable up to 32GB) & 256GB SSD (expandable)
            <br>
           <span class="Features">Features:</span>Lightweight business laptop, fast SSD performance, multiple ports (USB, HDMI, Type-C), ideal for office work and students
          </p>

          <div class="card-bottom">
            <a href="<?php echo site_url('/contact'); ?>"><button class="btn">Rent Now</button></a>
          </div>
        </div>
      </div>
      </div>
    </div>

    <!-- Footer-->
    <footer class="site-footer">
      <div class="footer-container">
        <!-- Column 1: Address & Contact -->
        <div class="footer-col">
          <p>
            G-9/ 85 RATIYA MARG SANGAM VIHAR <br />
            NEW DELHI
          </p>

          <p class="footer-email">
            Email:
            <a href="mailto:sales@rrcomputers.net" target="_blank">sales@rrcomputers.net</a>
          </p>

          <div class="footer-social">
           <a href="#"  aria-label="Facebook" target = "_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-logo.webp" alt="Facebook-logo"></a>
          <a href="https://www.instagram.com/rrcomputers.official/" aria-label="Instagram" target = "_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram-logo.webp" alt="Instagram Logo"></a>
          <a href="#" aria-label="Twitter" target = "_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter-logo.webp" alt="Twitter-logo"></a>
        </div>
        </div>

        <!-- Column 2: Pages -->
        <div class="footer-col">
          <h4>Qucik Links</h4>
          <ul>
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
           <li><a href="<?php echo site_url('/about'); ?>">About</a></li>
           <li><a href="<?php echo site_url('/services'); ?>">Services</a></li>
           <li> <a href="<?php echo esc_url(home_url('/blog/')); ?>"> Blog </a> </li>
           <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
           <li><a href="<?php echo site_url('/rental'); ?>">Rental</a></li>
          </ul>
        </div>

        <!-- Column 3: Services -->
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
          <li><a href="<?php echo site_url('/services'); ?>">Laptop Repair / Computer Repair</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">Cleaning Laptops / Replacing Thermal Paste</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">Data Recovery</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">OS Installation</a></li>
          <li><a href="<?php echo site_url('/services'); ?>">Assembling a Personal Computer at Home</a></li>
        </ul>
        </div>
      </div>

      <!-- Bottom -->
      <div class="footer-bottom">© 2026 RR COMPUTERS.</div>
    </footer>
      <!-- script 1-->
  <script>
    function toggleMenu() {
      document.getElementById("navMenu").classList.toggle("show");
    }
  </script>
  <?php get_footer(); ?>