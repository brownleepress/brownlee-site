<?php include '__001-top.php'; ?>
  <title>Print Product - Brownlee Press</title>
<?php include '__002-links.php'; ?>
<!--inside head -->
  
<style>
  .product-form {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .option-group {
    display: flex;
    gap: 10px;
    width: 100%;
  }

  .option-button {
    flex: 1 1 25%;
    padding: 20px 15px;
    text-align: center;
    cursor: pointer;
    font-weight: bold;
    background-color: white;
    border: 1px solid lightgray;
    border-radius: 6px;
    font-size: 14px;
    color: #d35863;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.2s ease;
  }

  .option-button:hover,
  .option-button.selected {
    background-color: #c3E6C9;
    color: #615959;
  }

  .size-dropdown {
  display: none;
  width: 100%;
  margin-top: 20px;
  padding: 0;
  font-size: 1rem;
  height: 42px;
  line-height: 42px;
  border: 1px solid #ccc!important;
  border-radius: 6px;
  background-color: white;
  color: #615959;
  text-align-last: center;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  }

  .size-dropdown.active {
    display: block;

  }

select:has(option:checked:not(:first-child)) {
  background-color: #c3E6C9; 
  color: #615959;
  border: 1px solid #ccc!important;}

  .printed-sides {
    display: flex;
    gap: 10px;
    width: 100%;
  }

  .printed-sides label {
    flex: 1;
    text-align: center;
    padding: 25px;
    font-weight: bold;
    cursor: pointer;
    background-color: white;
    border: 1px solid lightgray;
    border-radius: 6px;
    font-size: 14px;
    color: #d35863;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .printed-sides input[type="radio"]:checked + label {
    background-color: #c3E6C9;
    color: #615959;
  }

  .paper-options {
    display: flex;
    flex-wrap: wrap;
    gap: 0px;
    width: 100%;
  }

  .paper-option {
    flex: 1 1 calc(25%);
    cursor: pointer;
    background-color: white;
    transition: background-color 0.2s ease;
  }

  .paper-option img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    pointer-events: none;
  }

  .paper-option.selected,
  .paper-option:hover {
    background-color: #c3E6C9;
  }

  .upload-dropbox {
    width: 100%;
    height: 120px;
    border: 2px dotted lightgray;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #999;
    font-style: italic;
    cursor: pointer;
    margin-top: -15px;
  }

  .final-row {
    display: flex;
    align-items: center;
    gap: 10px;
    width: 100%;
  }

  input.quantity[type="number"] {
  width: 100px;
  padding: 12px 12px 10px 12px;
  font-size: 1.75rem;
  text-align: center;
  -moz-appearance: textfield;
}

input.quantity[type="number"]::-webkit-outer-spin-button,
input.quantity[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}


  .price {
    font-size: 3rem;
    font-weight: bold;
    color: #615959;
    margin: -18px 0 0px 0;
  }

  .add-to-cart-button {
    background-color: #c3E6C9;
    color: #615959;
    font-weight: bold;
    font-size: 16px;
    padding: 18px 20px;
    margin: -22px 0 0 10px;
    border: none;
    cursor: pointer;
    flex: 1;
    transition: background-color 0.2s ease;
  }

  .add-to-cart-button:hover {
    background-color: #d35863;
    color: white;
  }

.pricing-table {
    text-align: center!important;
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
    
  }

  .pricing-table th,
  .pricing-table td {
    padding: 14px 16px 10px 16px;
    border: none;
    text-align: center;
  }

  .pricing-table tr:nth-child(odd) {
    background-color: #ffffff;
  }

  .pricing-table tr:nth-child(even) {
    background-color: #eaeaea;
  }

  .pricing-table th {
    font-weight: bold;
    color: #615959;
  }

  .pricing-table th span {
  display: block;
  font-weight: normal;
  font-size: 0.9rem;
  color: #555;
}

  .pricing-table small {
    color: #666;
    font-size: 0.9rem;
  }
  
input.quantity:focus,
input:focus,
textarea:focus,
select:focus,
button:focus {
  outline: none;
  border: 1px solid #777;
}

.paper-info-row {
  display: flex;
  align-items: flex-start; 
  gap: 16px;
  margin-bottom: 20px;
  text-align: left; 
  padding: 0 20px;
  margin-top: 15px;
}

.paper-info-row img {
  width: 50px;
  height: auto;
  flex-shrink: 0;
}

.paper-info-text {
  flex: 1;
  text-align: left; 
}

.paper-info-text h6 {
  margin: 0;
  font-size: 1.3rem;
  font-weight: bold;
  color: #d35863;
}

.paper-info-text p {
  margin: 4px 0 0 0;
  font-size: 1.05rem;
  color: #444;
  line-height: 1.2;
}
@media (min-width: 920px) and (max-width: 1200px) { .paper-info-row img { display: none !important; } .paper-info-text { width: 100%; flex: none; text-align: left; } }
@media (max-width: 1019px) { .paper-info-row img { width: 45px; } .paper-info-text { flex: 1; } }


</style>








<!--inside head -->
</head><body>
<?php include '__003-header.php'; ?>  

  <section class="section" style="margin-bottom:0; padding-bottom: 0;">
    
    <div class="container wide" style="padding-top: 6rem;">
      <div class="row" style="text-align: center; margin: 0; padding: 0; width: 100%;">
        <h2 style="color:#d35863;">Cardstock</h2>
        <a href="" style="color:#d35863;">for regular paper, see PAPER pricing</a><br><br>
        From postcards to oversized art prints, we've got you covered. Our standard cardstock prints are printed on a 100# cover stock from Cougar, it's a classy, smooth, bright-white sheet. This is our go-to for everyone from Etsy sellers looking to do prints, to the happy couple preparing to send out their wedding invites. 
      </div>
    </div>
    
    
    
    <div class="container widest" style="padding-top: 3rem;">
      <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0;">
        <div class="prodImg" style="padding:20px;">
          <img src="img/CA.png" width="100%">
        </div>
        <div class="prodForm">



<form class="product-form">
  <div>
    <h6 style="font-size: 0.92rem; padding-bottom: 6px; text-align: left;">SIZE</h6>
    <div class="option-group" id="size-options">
        <div class="option-button" data-size="small"><span class="label-full">SMALL</span><span class="label-short">SM</span></div>
         <div class="option-button" data-size="medium"><span class="label-full">MEDIUM</span><span class="label-short">MD</span></div>
        <div class="option-button" data-size="large"><span class="label-full">LARGE</span><span class="label-short">LG</span></div>
        <div class="option-button" data-size="xlarge"><span class="label-full">X-LARGE</span><span class="label-short">XL</span></div>
    </div>
    <select class="size-dropdown" id="size-dropdown-small">
      <option>Select a SMALL size option</option>
      <option>4.25" x 5.5"</option>
      <option>4" x 6"</option>
      <option>4.25" x 6"</option>
    </select>
    <select class="size-dropdown" id="size-dropdown-medium">
      <option>Select a MEDIUM size option</option>
      <option>5" x 7"</option>
      <option>5.5" x 8.5"</option>
      <option>6" x 9"</option>
    </select>
    <select class="size-dropdown" id="size-dropdown-large">
      <option>Select a LARGE size option</option>
      <option>8" x 10"</option>
      <option>8.5" x 11"</option>
      <option>9" x 12"</option>
    </select>
    <select class="size-dropdown" id="size-dropdown-xlarge">
      <option>Select an X-LARGE size option</option>
      <option>11" x 14"</option>
      <option>11" x 17"</option>
      <option>12" x 18"</option>
    </select>
  </div>

  <div>
    <h6 style="font-size: 0.92rem; padding-bottom: 6px; text-align: left;">PRINTED SIDES</h6>
    <div class="printed-sides">
      <input type="radio" name="sides" id="one-sided" value="1" hidden>
      <label for="one-sided">1-SIDED</label>
      <input type="radio" name="sides" id="two-sided" value="2" hidden>
      <label for="two-sided">2-SIDED</label>
    </div>
  </div>

  <div>
    <h6 style="font-size: 0.92rem; padding-bottom: 6px; text-align: left;">PAPER</h6>
    <div class="paper-options">
      <div class="paper-option"><img src="img/_paper-01.png" alt="Paper 1"></div>
      <div class="paper-option"><img src="img/_paper-02.png" alt="Paper 2"></div>
      <div class="paper-option"><img src="img/_paper-03.png" alt="Paper 3"></div>
      <div class="paper-option"><img src="img/_paper-04.png" alt="Paper 4"></div>
      <div class="paper-option"><img src="img/_paper-05.png" alt="Paper 5"></div>
      <div class="paper-option"><img src="img/_paper-06.png" alt="Paper 6"></div>
      <div class="paper-option"><img src="img/_paper-07.png" alt="Paper 7"></div>
      <div class="paper-option"><img src="img/_paper-08.png" alt="Paper 8"></div>
    </div>
  </div>

  



  
<div class="qty-table">
<h6 style="font-size: 0.92rem; text-align: left; margin: 10px 0 14px 0; display: block;">QUANTITY</h6>
  <div class="qty-header">
    <div class="qty-cell" style="font-size: 0.92rem;">QTY</div>
    <div class="qty-cell center" style="font-size: 0.92rem;">EACH</div>
    <div class="qty-cell right" style="font-size: 0.92rem;">TOTAL</div>
  </div>

  <div class="qty-row" onclick="selectQtyRow(this);">
    <div class="qty-cell qty-count">25</div>
    <div class="qty-cell center">$0.88</div>
    <div class="qty-cell right">$22.00</div>
  </div>

  <div class="qty-row selected" onclick="selectQtyRow(this);">
    <div class="qty-cell qty-count">50</div>
    <div class="qty-cell center">$0.78</div>
    <div class="qty-cell right">$39.00</div>
  </div>

  <div class="qty-row" onclick="selectQtyRow(this);">
    <div class="qty-cell qty-count">100</div>
    <div class="qty-cell center">$0.58</div>
    <div class="qty-cell right">$58.00</div>
  </div>

  <div class="qty-row" style="position: relative;" onclick="selectQtyRow(this);">
    <div class="qty-cell qty-count">250</div>
    <div class="qty-cell center">$0.38</div>
    <div class="qty-cell right">$94.00</div>
  </div>

  <div class="qty-row" onclick="selectQtyRow(this);">
    <div class="qty-cell qty-count">500</div>
    <div class="qty-cell center">$0.28</div>
    <div class="qty-cell right">$141.00</div>
  </div>

  <div class="qty-row" onclick="selectQtyRow(this);">
    <div class="qty-cell qty-count">1000</div>
    <div class="qty-cell center">$0.18</div>
    <div class="qty-cell right">$180.00</div>
  </div>

  <div class="qty-row" onclick="selectQtyRow(this);">
    <div class="qty-cell qty-count">2500</div>
    <div class="qty-cell center">$0.15</div>
    <div class="qty-cell right">$366.00</div>
  </div>

  <div id="customQuantityRow" class="qty-custom-row">
    <div class="qty-custom-inner">
      <input type="number" value="150" min="1" class="qty-input">
      <div class="qty-custom-each">$0.42</div>
      <div class="qty-custom-total">$42.00</div>
    </div>
  </div>

<div class="qty-toggle" id="customToggle" onclick="selectCustomQty();">
  + CUSTOM QUANTITY
</div>

</div>

<script>
function selectQtyRow(el) {
  // Clear all preset selections
  document.querySelectorAll('.qty-row').forEach(row => row.classList.remove('selected'));
  
  // Hide custom row and show toggle again
  document.getElementById('customQuantityRow').style.display = 'none';
  document.getElementById('customToggle').style.display = 'block';

  // Select clicked row
  el.classList.add('selected');
}

function selectCustomQty() {
  // Deselect all preset rows
  document.querySelectorAll('.qty-row').forEach(row => row.classList.remove('selected'));

  // Show custom row and mark it selected
  document.getElementById('customQuantityRow').style.display = 'block';
  document.getElementById('customToggle').style.display = 'none';
}
</script>


    <hr style="border: none; border-top: 1px solid #ccc; margin: -25px 0;">

<h6 style="font-size: 0.92rem; padding-bottom: 6px; text-align: left; margin-top: 0px;">UPLOAD FILES</h6>
  <div class="upload-dropbox" id="upload-box"><h6>Upload File(s)</h6></div>
    <input type="file" id="file-upload" name="file" style="display: none;">
  
 <div style="display: flex; gap: 20px; width: 100%; margin-bottom: 0px;">
  <div style="flex: 1;">
    <h6 style="font-size: 0.92rem; padding-bottom: 6px; text-align: left;">SPECIAL INSTRUCTIONS</h6>
    <textarea id="message" name="message" rows="6" placeholder="Type your message here..." style="width: 100%; padding: 12px; font-size: 1rem; height: 4.1rem;"></textarea>
  </div>
</div>




    <hr style="border: none; border-top: 1px solid #ccc; margin: -25px 0 -35px 0;">

<div class="final-row" style="padding-top: 1rem;">
  <div class="price"><span style="font-size: 70%; vertical-align: top;">$</span>45</div>
  <button class="add-to-cart-button">ADD TO CART</button>
</div>



        </div>
      </div>
    </div>
  </section>  

  




<section class="section pink">
    <div class="container wide">
      <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0; align-items: center;">
        <div class="home1-3"><a href=""><img src="img/ST.png" width="100%"></a></div>
        <div class="home2-3">
          <h5 style="margin-bottom: 15px; color: #777;">BAD ASS SHIT</h5>
          <h2 style="margin-bottom: 25px;">Stickers! Any size, any shape, laminated to be durable, and ready in a hurry!</h2>
          <button class="button btn-primary">ORDER STICKERS!</button>
       </div>
      </div>
    </div>
  </section>



    <section class="section" style="overflow-x: auto; width: 100%; -webkit-overflow-scrolling: touch;">
    <div class="container wide">
      <div class="row" style="text-align: center; margin: 0; padding: 0;">
       <div class="home1">   
<table class="pricing-table">
  <tr>
    <th>QTY</th>
    <th>SM</th>
    <th>MD</th>
    <th>LG</th>
    <th>XL</th>
  </tr>
  <tr>
    <td><b>10</b></td>
    <td>$9 <small>(0.90ea)</small></td>
    <td>$10 <small>(1.00ea)</small></td>
    <td>$13 <small>(1.30ea)</small></td>
    <td>$25 <small>(2.50ea)</small></td>
  </tr>
  <tr>
    <td><b>25</b></td>
    <td>$19 <small>(0.76ea)</small></td>
    <td>$21 <small>(0.84ea)</small></td>
    <td>$25 <small>(1.00ea)</small></td>
    <td>$44 <small>(1.76ea)</small></td>
  </tr>
  <tr>
    <td><b>50</b></td>
    <td>$30 <small>(0.60ea)</small></td>
    <td>$35 <small>(0.70ea)</small></td>
    <td>$40 <small>(0.80ea)</small></td>
    <td>$75 <small>(1.50ea)</small></td>
  </tr>
  <tr>
    <td><b>100</b></td>
    <td>$50 <small>(0.50ea)</small></td>
    <td>$60 <small>(0.60ea)</small></td>
    <td>$75 <small>(0.75ea)</small></td>
    <td>$115 <small>(1.15ea)</small></td>
  </tr>
  <tr>
    <td><b>250</b></td>
    <td>$90 <small>(0.36ea)</small></td>
    <td>$115 <small>(0.46ea)</small></td>
    <td>$140 <small>(0.56ea)</small></td>
    <td>$225 <small>(0.90ea)</small></td>
  </tr>
  <tr>
    <td><b>500</b></td>
    <td>$125 <small>(0.25ea)</small></td>
    <td>$175 <small>(0.35ea)</small></td>
    <td>$225 <small>(0.45ea)</small></td>
    <td>$400 <small>(0.80ea)</small></td>
  </tr>
  <tr>
    <td><b>1000</b></td>
    <td>$200 <small>(0.20ea)</small></td>
    <td>$250 <small>(0.24ea)</small></td>
    <td>$350 <small>(0.35ea)</small></td>
    <td>$650<small> (0.65ea)</small></td>
  </tr>
</table>
        </div>
      </div>
    </div>
  </section>








<!-- PAPER --->
 <section class="section" style="margin-bottom:0; padding-bottom: 0;">
    <div class="container widest">
      <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0; align-items: top;">
        
        <div class="column one-third stack" style="padding: 0 20px; margin: 20px 0; font-size: 1.2rem;">
          <a href=""><img src="img/_STAN.png" width="100%"></a>
          <h5 style="color: #D35863;">Standard</h5>
          <p style="margin: 20px 0 25px 0;">
            100# cover, uncoated or satin-coated. It's the go-to for solid, high-quality, bright white paper that's ready to get the job done and look great doing it.
          </p>
<div class="paper-info-row">
  <img src="img/100U.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>100# Uncoated</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

<div class="paper-info-row">
  <img src="img/100S.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>100# Silk</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>
        
        </div>
        
        <div class="column one-third stack" style="padding: 0 20px; margin: 20px 0; font-size: 1.2rem;">
          <a href=""><img src="img/_UPGRD.png" width="100%"></a>
          <h5 style="color: #D35863;">Premium</h5>
          <p style="margin: 20px 0 25px 0;">
            Curated upgrades - it's the same good stuff... but better.
          </p>
<div class="paper-info-row">
  <img src="img/120Silk.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>120# Silk</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

<div class="paper-info-row">
  <img src="img/130U.png" alt="100# Uncoated"/>
  <div class="paper-info-text">
    <h6>130# Uncoated</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

<div class="paper-info-row">
  <img src="img/c1s.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>Coated-1-Side</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

<div class="paper-info-row">
  <img src="img/c2s.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>Coated-2-Sides</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

        </div>
        
        <div class="column one-third stack" style="padding: 0 20px; margin: 20px 0; font-size: 1.2rem;">
          <a href=""><img src="img/_FREN.png" width="100%"></a>
          <h5 style="color: #D35863;">Recycled</h5>
          <p style="margin: 20px 0 25px 0;">
            French Paper Co. - Made in Michigan. We offer 3 flavors of 100# cover, each with recycled specks and flecks, making every sheet unique. 
          </p>
 <div class="paper-info-row">
  <img src="img/FR_SW.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>Starch White</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

<div class="paper-info-row">
  <img src="img/FR_MB.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>Madero Beach</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

<div class="paper-info-row">
  <img src="img/FR_MY.png" alt="100# Uncoated" />
  <div class="paper-info-text">
    <h6>Manila Yellow</h6>
    <p>Smooth, bright white, basic, but classic. This is the best choice for most pieces, says me.</p>
  </div>
</div>

        
      </div>
    </div>
  </section>












       <section class="section pink">
    <div class="container wider">
      <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0; align-items: center;">
        
        <div class="column four md-twelve" style="margin-bottom: 35px;">
          <a href=""><img src="img/PA.png" width="80%"></a>
          <h4>DEALS!</h4>
          <p style="margin: 20px 20px 10px;">Cheap, fast, and good-quality - it's been said that in printing, you can never have all 3. Well, let's prove them wrong!</p>
          <button class="btn-primary">Sign Up</button>
        </div>
        
        <div class="column four md-six sm-twelve" style="margin-bottom: 35px;">
          <a href=""><img src="img/PA.png" width="80%"></a>
          <h4>DEALS!</h4>
          <p style="margin: 20px 20px 10px;">Cheap, fast, and good-quality - it's been said that in printing, you can never have all 3. Well, let's prove them wrong!</p>
          <button class="btn-primary">Sign Up</button>
        </div>
        
        <div class="column four md-six sm-twelve" style="margin-bottom: 35px;">
          <a href=""><img src="img/PA.png" width="80%"></a>
          <h4>DEALS!</h4>
          <p style="margin: 20px 20px 10px;">Cheap, fast, and good-quality - it's been said that in printing, you can never have all 3. Well, let's prove them wrong!</p>
          <button class="btn-primary">Sign Up</button>
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
                        <button class="accordion-header">What is your return policy?</button>
                        <div class="accordion-content">
                            <p>You can return any item within 30 days, no questions asked.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-header">What is your return policy?</button>
                        <div class="accordion-content">
                            <p>You can return any item within 30 days, no questions asked.</p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <button class="accordion-header">What is your return policy?</button>
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
