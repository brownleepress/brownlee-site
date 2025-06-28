<?php include '__001-top.php'; ?>
  <title>Print Product - Brownlee Press</title>
<?php include '__002-links.php'; ?>
<!--inside head -->
  
<style>
.product-form { width: 100%; display: flex; flex-direction: column; gap: 20px; }
.option-group { display: flex; gap: 10px; width: 100%; }
.option-button { flex: 1 1 25%; padding: 20px 15px; text-align: center; cursor: pointer; font-weight: bold; background-color: white; border: 1px solid lightgray; border-radius: 6px; font-size: 14px; color: #d35863; display: flex; align-items: center; justify-content: center; transition: background-color 0.2s ease; }
.option-button:hover, .option-button.selected { background-color: #c3E6C9; color: #615959; }
.size-dropdown { display: none; width: 100%; margin-top: 20px; padding: 0; font-size: 1rem; height: 42px; line-height: 42px; border: 1px solid #ccc!important; border-radius: 6px; background-color: white; color: #615959; text-align-last: center; appearance: none; -webkit-appearance: none; -moz-appearance: none; }
.size-dropdown.active { display: block; }
select:has(option:checked:not(:first-child)) { background-color: #c3E6C9; color: #615959; border: 1px solid #ccc!important; }
.printed-sides { display: flex; gap: 10px; width: 100%; }
.printed-sides label { flex: 1; text-align: center; padding: 25px; font-weight: bold; cursor: pointer; background-color: white; border: 1px solid lightgray; border-radius: 6px; font-size: 14px; color: #d35863; display: flex; align-items: center; justify-content: center; }
.printed-sides input[type="radio"]:checked + label { background-color: #c3E6C9; color: #615959; }
.paper-options { display: flex; flex-wrap: wrap; gap: 0px; width: 100%; }
.paper-option { flex: 1 1 calc(25%); cursor: pointer; background-color: white; transition: background-color 0.2s ease; }
.paper-option img { width: 100%; height: 100%; object-fit: contain; pointer-events: none; }
.paper-option.selected, .paper-option:hover { background-color: #c3E6C9; }
.upload-dropbox { width: 100%; height: 120px; border: 2px dotted lightgray; display: flex; align-items: center; justify-content: center; color: #999; font-style: italic; cursor: pointer; margin-top: -15px; }
.final-row { display: flex; align-items: center; gap: 10px; width: 100%; }
input.quantity[type="number"] { width: 100px; padding: 12px 12px 10px 12px; font-size: 1.75rem; text-align: center; -moz-appearance: textfield; }
input.quantity[type="number"]::-webkit-outer-spin-button, input.quantity[type="number"]::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
.price { font-size: 3rem; font-weight: bold; color: #615959; margin: -18px 0 0px 0; }
.add-to-cart-button { background-color: #c3E6C9; color: #615959; font-weight: bold; font-size: 16px; padding: 18px 20px; margin: -22px 0 0 10px; border: none; cursor: pointer; flex: 1; transition: background-color 0.2s ease; }
.add-to-cart-button:hover { background-color: #d35863; color: white; }
.pricing-table { text-align: center!important; width: 100%; border-collapse: collapse; min-width: 600px; }
.pricing-table th, .pricing-table td { padding: 14px 16px 10px 16px; border: none; text-align: center; }
.pricing-table tr:nth-child(odd) { background-color: #ffffff; }
.pricing-table tr:nth-child(even) { background-color: #eaeaea; }
.pricing-table th { font-weight: bold; color: #615959; }
.pricing-table th span { display: block; font-weight: normal; font-size: 0.9rem; color: #555; }
.pricing-table small { color: #666; font-size: 0.9rem; }
input.quantity:focus, input:focus, textarea:focus, select:focus, button:focus { outline: none; border: 1px solid #777; }
.paper-info-row { display: flex; align-items: flex-start; gap: 16px; margin-bottom: 20px; text-align: left; padding: 0 20px; margin-top: 15px; }
.paper-info-row img { width: 50px; height: auto; flex-shrink: 0; }
.paper-info-text { flex: 1; text-align: left; }
.paper-info-text h6 { margin: 0; font-size: 1.3rem; font-weight: bold; color: #d35863; }
.paper-info-text p { margin: 4px 0 0 0; font-size: 1.05rem; color: #444; line-height: 1.2; }
@media (min-width: 920px) and (max-width: 1200px) { .paper-info-row img { display: none!important; } .paper-info-text { width: 100%; flex: none; text-align: left; } }
@media (max-width: 1019px) { .paper-info-row img { width: 45px; } .paper-info-text { flex: 1; } }
</style>







<!--inside head -->
</head><body>
<?php include '__003-header.php'; ?>  

  <section class="section" style="margin-bottom:0; padding-bottom: 0;">
    
    <div class="container wide" style="padding-top: 6rem;">
      <div class="row" style="text-align: center; margin: 0; padding: 0; width: 100%;">
        <h2 style="color:#d35863;">Meet the Bluths</h2>
      </div>
    </div>
    
    
    
    <div class="container widest" style="padding-top: 3rem;">
      <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0;">
        <div class="column five md-five sm-twelve theGap" style="align: center;">
          <img src="img/poster.png" style="width: 100%;">
        </div>
        <div class="column seven md-seven sm-twelve theGap">
        <p style="text-align: left; font-size: 1.25rem;">
          <i>There's always money in the banana stand.</i><br>
<br>
This poster celebrates the delightfully dysfunctional Bluth family in all their glory. Perfect for fans who know... it's the story of a family who lost everything, and the one son who had no choice but to keep them all together.<br>
<br>
        11x14 - Printed on 100# Speckletone Cover from French Paper. Ships flat.<br>
        18x24 - Printed digitally. Ships in a tube.<br>
<br>
        Art by Bad Love Design<br>
<br>
        <b>NO TOUCHING!!!</b>
</p>

<form class="product-form">
  <div>
    <h6 style="font-size: 0.92rem; padding-bottom: 6px; text-align: left;">SIZE</h6>
    <div class="printed-sides">
      <input type="radio" name="sides" id="one-sided" value="1" hidden>
      <label for="one-sided">11x14</label>
      <input type="radio" name="sides" id="two-sided" value="2" hidden>
      <label for="two-sided">18x24</label>
    </div>
  </div>

  
 <hr style="border: none; border-top: 1px solid #ccc; margin: 10px 0 -35px 0;">

<div class="final-row" style="padding-top: 1rem;">
  <div class="price"><span style="font-size: 70%; vertical-align: top;">$</span>45</div>
  <button class="add-to-cart-button">ADD TO CART</button>
</div>



        </div>
      </div>
    </div>
  </section>  

  







       <section class="section pink">
    <div class="container wider">
      <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0; align-items: center;">
        
        <div class="column four md-twelve" style="margin-bottom: 0px;">
          <a href=""><img src="img/PA.png" width="80%"></a>
          <h4>DEALS!</h4>
          <p style="margin: 20px 20px 10px;">Cheap, fast, and good-quality - it's been said that in printing, you can never have all 3. Well, let's prove them wrong!</p>
          <button class="button btn-primary">Sign Up</button>
        </div>
        
        <div class="column four md-six sm-twelve" style="margin-bottom: 0px;">
          <a href=""><img src="img/PA.png" width="80%"></a>
          <h4>DEALS!</h4>
          <p style="margin: 20px 20px 10px;">Cheap, fast, and good-quality - it's been said that in printing, you can never have all 3. Well, let's prove them wrong!</p>
          <button class="button btn-primary">Sign Up</button>
        </div>
        
        <div class="column four md-six sm-twelve" style="margin-bottom: 0px;">
          <a href=""><img src="img/PA.png" width="80%"></a>
          <h4>DEALS!</h4>
          <p style="margin: 20px 20px 10px;">Cheap, fast, and good-quality - it's been said that in printing, you can never have all 3. Well, let's prove them wrong!</p>
          <button class="button btn-primary">Sign Up</button>
        </div>
        
      </div>
    </div>
  </section>



 <section class="section">
    <div class="container wide">
        <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0; align-items: center;">
            <div class="home1">
                <h4 style="margin-bottom: 25px;">FAQ</h4>
            </div>
        </div>  
    
    
        <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0; align-items: center;">
            <div class="home1" style="padding: 0; margin: 0;">
                <div class="accordion">
                    
                    <div class="accordion-item">
                        <div class="accordion-header">What is your return policy?</div>
                        <div class="accordion-content">
                            <p>You can return any item within 30 days, no questions asked.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">What is your return policy?</div>
                        <div class="accordion-content">
                            <p>You can return any item within 30 days, no questions asked.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header">What is your return policy?</div>
                        <div class="accordion-content">
                            <p>You can return any item within 30 days, no questions asked.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
 
    </div>
  </section>



<?php include '__004-footer.php'; ?>
<?php include '__005-java.php'; ?>
<!--before /body -->
  
<script>
  document.querySelectorAll('#size-options .option-button').forEach(button => {
    button.addEventListener('click', () => {
      document.querySelectorAll('#size-options .option-button').forEach(btn => btn.classList.remove('selected'));
      button.classList.add('selected');

      document.querySelectorAll('.size-dropdown').forEach(drop => drop.classList.remove('active'));
      const size = button.getAttribute('data-size');
      const dropdown = document.getElementById(`size-dropdown-${size}`);
      if (dropdown) dropdown.classList.add('active');
    });
  });

  document.querySelectorAll('.paper-option').forEach(option => {
    option.addEventListener('click', () => {
      document.querySelectorAll('.paper-option').forEach(opt => opt.classList.remove('selected'));
      option.classList.add('selected');
    });
  });
  const uploadBox = document.getElementById('upload-box');
const fileInput = document.getElementById('file-upload');

uploadBox.addEventListener('click', () => fileInput.click());

uploadBox.addEventListener('dragover', e => {
  e.preventDefault();
  uploadBox.style.borderColor = '#d35863';
});

uploadBox.addEventListener('dragleave', () => {
  uploadBox.style.borderColor = 'lightgray';
});

uploadBox.addEventListener('drop', e => {
  e.preventDefault();
  uploadBox.style.borderColor = 'lightgray';
  const file = e.dataTransfer.files[0];
  fileInput.files = e.dataTransfer.files;

  // Optional: Show file name or give feedback
  uploadBox.innerText = `Selected: ${file.name}`;
});

</script>
<!--before /body -->
</body></html>
