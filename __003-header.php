<header class="navbar">
  <!-- sliding  panel -->
  <div class="navbar-background"></div>

  <div class="navbar-content">
    <!-- Mobile Hamburger Toggle -->
    <button class="nav-toggle" onclick="toggleMobileNav()" aria-label="Menu">
      <!-- start with “hamburger” icon -->
      <svg class="icon toggle-icon" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
        <rect fill="none" height="256" width="256"/>
        <path d="M48.8,96A8,8,0,0,1,41,86.3C47.4,55.5,83.9,32,128,32s80.6,23.5,87,54.3a8,8,0,0,1-7.8,9.7Z"
              fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16"/>
        <path d="M208,168v16a32,32,0,0,1-32,32H80a32,32,0,0,1-32-32V168"
              fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16"/>
        <polyline points="28 176 68 160 108 176 148 160 188 176 228 160"
                  fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="16"/>
        <line x1="24" y1="128" x2="232" y2="128"
              fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="16"/>
      </svg>
    </button>

    <!-- Logo -->
    <div class="logo">
      <a href="."><img src="img/bp-logo.png" alt="Brownlee Press"></a>
    </div>

    <!-- Mobile Cart -->
    <div class="mobile-cart">
      <a href="#" aria-label="Cart">
        <svg class="icon cart-icon" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
          <rect fill="none" height="256" width="256"/>
          <path d="M184,184H69.8L41.9,30.6A8,8,0,0,0,34.1,24H16"
                fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16"/>
          <circle cx="80" cy="204" r="20"
                  fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="16"/>
          <circle cx="184" cy="204" r="20"
                  fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="16"/>
          <path d="M62.5,144H188.1a15.9,15.9,0,0,0,15.7-13.1L216,64H48"
                fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16"/>
        </svg>
      </a>
    </div>

    <!-- Desktop Nav -->
    <nav class="nav desktop-nav">
      <a href="print.php">Print</a>
      <a href="shop.php">Shop</a>
      <a href="resources.php">Resources</a>
      <a href="about.php">About</a>
    </nav>

    <!-- Desktop Actions -->
    <div class="nav-actions desktop-nav">
      <a href="#" aria-label="Cart">
        <svg class="icon cart-icon" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
          <!-- same cart paths as above -->
          <rect fill="none" height="256" width="256"/>
          <path d="M184,184H69.8L41.9,30.6A8,8,0,0,0,34.1,24H16"
                fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16"/>
          <circle cx="80" cy="204" r="20"
                  fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="16"/>
          <circle cx="184" cy="204" r="20"
                  fill="none" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="16"/>
          <path d="M62.5,144H188.1a15.9,15.9,0,0,0,15.7-13.1L216,64H48"
                fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="16"/>
        </svg>
      </a>
      <a href="#" class="upload-btn">Login</a>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <nav>
      <a href="print.php">Print</a>
      <a href="#">Shop</a>
      <a href="#">Resources</a>
      <a href="#">About</a>
      <a href="incoming-orders.php">Orders</a>
    </nav>
    <div class="mobile-actions">
      <a href="#" class="upload-btn">Upload</a>
      <a href="#" class="mobile-login-btn">Login / Register</a>
    </div>
  </div>
</header>
