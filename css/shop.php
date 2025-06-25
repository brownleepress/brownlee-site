<?php include '__001-top.php'; ?>
  <title>Shop - Brownlee Press</title>
<?php include '__002-links.php'; ?>
<!--inside head -->

<style>
.product-grid { display: flex; flex-direction: column; gap: 20px; width: 100%; align-items: center; }
.row.products { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin: 0; padding: 0; }
.product-item { text-align: center; font-weight: bold; font-size: 1.05rem; line-height: 1.4; cursor: pointer; background: none; border: none; padding: 0; transition: transform 0.5s ease; }
.product-item img { width: 100%; max-width: 240px; transition: transform 0.8s ease; }
.product-item:hover img { transform: rotate(2.5deg) translateY(-5px); }
.category-nav { text-align: center; margin: 20px 0 40px; }
.category-nav button { background: none; border: none; font-size: 1.25rem; font-weight: 500; color: #444; margin: 0 9px; padding: 0; cursor: pointer; transition: color 0.2s ease; }
.category-nav button.active, .category-nav button:hover { color: #d35863; text-decoration: underline; }
.load-more { display: block; margin: 40px auto 20px; padding: 10px 20px; background: #d35863; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; }
.product-item a { text-decoration: none; color: #d35863; font-size: 1.45rem; }
.product-item a:hover { text-decoration: none; }
</style>

</head><body>
<?php include '__003-header.php'; ?>

<section class="section" style="margin-bottom:0; padding-bottom: 0; padding-top: 7rem;">
  <div class="container widest" style="text-align: center;">
    <h3>Shop</h3>
    <div class="category-nav">
      <button class="category-button active" data-category="all">All</button>
      <button class="category-button" data-category="cards">Cards</button>
      <button class="category-button" data-category="stickers">Stickers</button>
      <button class="category-button" data-category="posters">Posters</button>
    </div>

    <div class="container product-grid">
      <div class="row products">
        
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 1</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 2</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 3</div></a></div></div>
<div class='column three md-four sm-six product' data-category='stickers' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 4</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 5</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 6</div></a></div></div>
<div class='column three md-four sm-six product' data-category='stickers' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 7</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 8</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 9</div></a></div></div>
<div class='column three md-four sm-six product' data-category='stickers' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 10</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 11</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 12</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 13</div></a></div></div>
<div class='column three md-four sm-six product' data-category='posters' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 14</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 15</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 16</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 17</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 18</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 19</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 20</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 21</div></a></div></div>
<div class='column three md-four sm-six product' data-category='cards' style='display: none;'><div class='product-item'><a href='product.php?id=1'><img src='img/tee.png' alt='Item 1'><div>Item 22</div></a></div></div>


      </div>
      <button class="load-more">Load More</button>
    </div>
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

  $items.hide();

  $items.each(function () {
    const itemCat = $(this).data('category');
    if (category === 'all' || itemCat === category) {
      if (shown < currentCount + perPage) {
        $(this).show();
        shown++;
      }
    }
  });
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

// Initialize
$(document).ready(function () {
  currentCount = 0;
  showItems();
});
</script>

<?php include '__004-footer.php'; ?>
<?php include '__005-java.php'; ?>
</body></html>
