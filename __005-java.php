<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- START NAV BAR -->
<script>
  let lastScrollTop = 0;
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (window.innerWidth > 768) {
      if (scrollTop > 50) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }

      if (scrollTop > lastScrollTop) {
        header.classList.add("hide");
      } else {
        header.classList.remove("hide");
      }
    } else {
      header.classList.remove("scrolled");
    }

    lastScrollTop = scrollTop;
  });

  function toggleMobileNav() {
    const nav = document.getElementById("mobileNav");
    const icon = document.getElementById("menuIcon");
    nav.classList.toggle("open");
    icon.src = nav.classList.contains("open") ? "img/close.png" : "img/ham.png";
  }

  window.addEventListener('resize', function () {
    const nav = document.getElementById("mobileNav");
    const icon = document.getElementById("menuIcon");
    if (window.innerWidth > 768 && nav.classList.contains("open")) {
      nav.classList.remove("open");
      icon.src = "img/ham.png";
    }
  });
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