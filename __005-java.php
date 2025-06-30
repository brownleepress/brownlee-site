<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- START NAV BAR -->
<script>
// SVG markup for hamburger & close icons:
const hamSVG = `<svg class="icon toggle-icon" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="256" width="256"/><path d="M48.8,96A8,8,0,0,1,41,86.3C47.4,55.5,83.9,32,128,32s80.6,23.5,87,54.3a8,8,0,0,1-7.8,9.7Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,168v16a32,32,0,0,1-32,32H80a32,32,0,0,1-32-32V168" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="28 176 68 160 108 176 148 160 188 176 228 160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="24" y1="128" x2="232" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>`;

const closeSVG = `<svg class="icon toggle-icon" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"><rect fill="none" height="256" width="256"/><circle cx="128" cy="128" fill="none" r="96" stroke="currentColor" stroke-miterlimit="10" stroke-width="16"/><line x1="160" y1="96" x2="96" y2="160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="160" y1="160" x2="96" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>`;

const header = document.querySelector('header.navbar');
const navToggleBtn = document.querySelector('.nav-toggle');

// on scroll: toggle “scrolled” class
window.addEventListener('scroll', () => {
  header.classList.toggle('scrolled', window.scrollY > 0);
});

// toggle mobile menu & swap icons
function toggleMobileNav() {
  const nav = document.getElementById('mobileMenu');
  const isActive = nav.classList.toggle('active');
  navToggleBtn.innerHTML = isActive ? closeSVG : hamSVG;
}

// on resize: ensure closed state & reset icon
window.addEventListener('resize', () => {
  const nav = document.getElementById('mobileMenu');
  if (window.innerWidth > 720 && nav.classList.contains('active')) {
    nav.classList.remove('active');
    navToggleBtn.innerHTML = hamSVG;
  }
});

// initialize the toggle button SVG
navToggleBtn.innerHTML = hamSVG;
</script>
<!-- END NAV BAR -->


<!-- START ACCORDION -->
<script>
  $(document).ready(function () {
    $('.accordion-header').click(function () {
      console.log("CLICKED:", this); // ✅ debug line
      
      var $content = $(this).next('.accordion-content');

      $('.accordion-content').not($content).slideUp(200);
      $('.accordion-header').not(this).removeClass('active');

      $content.slideToggle(200);
      $(this).toggleClass('active');
    });
  });
</script>

<!-- END ACCORDION -->




<!-- START FOOTER LINKS -->
<script>
  const links = document.querySelectorAll('.footerLink');
  links.forEach((link, i) => {
    const variant = Math.floor(Math.random() * 5) + 1;
    link.classList.add(`variant${variant}`);
  });
</script>
<!-- END FOOTER LINKS -->