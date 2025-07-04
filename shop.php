<?php include '__001-top.php'; ?>
  <title>Shop - Brownlee Press</title>
<?php include '__002-links.php'; ?>
<!--inside head -->

<style>
.product-grid { display: flex; flex-direction: column; gap: 20px; width: 100%; align-items: center; }
.row.products { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
.product-item { text-align: center; font-weight: bold; font-size: 1.05rem; line-height: 1.4; cursor: pointer; background: none; border: none; padding: 0; margin-bottom: 16px;transition: transform 0.5s ease; }
.product-item img { width: 100%; max-width: 240px; transition: transform 0.8s ease; }
.product-item:hover img { transform: rotate(2.5deg) translateY(-5px); }
.category-nav { text-align: center; margin: 20px 0 40px; }
.category-nav button { background: none; border: none; font-size: 1.25rem; font-weight: 500; color: #444; margin: 0 9px; padding: 0; cursor: pointer; transition: color 0.2s ease; }
.category-nav button.active, .category-nav button:hover { color: #d35863; text-decoration: underline; }
.load-more { display: block; margin: 40px auto 20px; padding: 10px 20px; background: #d35863; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; }
.product-item a { text-decoration: none; color: #d35863; font-size: 1.45rem; line-height: 1.35rem; display: block; padding-bottom: 10px;}
.product-item a:hover { text-decoration: none; }

</style>

</head><body>
<?php include '__003-header.php'; ?>

<section class="section" style="margin-bottom:0; padding-bottom: 0; padding-top: 8.5rem;">
  <div class="container widest" style="text-align: center;">
    <h3>Shop</h3>
    <div class="category-nav">
      <button class="category-button active" data-category="all">All</button>
      <button class="category-button" data-category="cards">Cards</button>
      <button class="category-button" data-category="stickers">Stickers</button>
      <button class="category-button" data-category="posters">Posters</button>
    </div>
  </div>
    <div class="container widerest product-grid">
      <div class="row products">
        
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='stickers' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='stickers' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='cards' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/poster.png' alt='Item 1'><div>Item 1 </div></a></div></div>
<div class='product' data-category='posters' style='display: none;'><div class='product-item'><a href='merch.php'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>

      </div>
      <button class="load-more" style="margin-bottom: 4rem;">Load More</button>
    
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
let perPage = 12;
let currentCount = 0;

function showItems() {
  const category = $('.category-button.active').data('category');
  const $items = $('.product');
  let shown = 0;
  let total = 0;

  $items.hide();

  $items.each(function () {
    const itemCat = $(this).data('category');
    if (category === 'all' || itemCat === category) {
      total++; // Count total matching items
      if (shown < currentCount + perPage) {
        $(this).show();
        shown++;
      }
    }
  });

  // Show or hide Load More button
  if (shown >= total) {
    $('.load-more').hide();
  } else {
    $('.load-more').show();
  }
}

$('.load-more').on('click', function () {
  currentCount += perPage;
  showItems();
});

$('.category-button').on('click', function () {
  $('.category-button').removeClass('active');
  $(this).addClass('active');
  currentCount = 0;
  showItems();
});

$(document).ready(function () {
  currentCount = 0;
  showItems();
});
</script>


<?php include '__004-footer.php'; ?>
<?php include '__005-java.php'; ?>
</body></html>
