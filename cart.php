<?php include '__001-top.php'; ?>
  <title>Cart - Brownlee Press</title>
<?php include '__002-links.php'; ?>
<!--inside head -->
  


<style>
.cart-table { width: 100%; border-collapse: collapse; margin-bottom: 2rem; }
.cart-table th, .cart-table td { padding: 0.75rem 0.5rem; vertical-align: top; }
.cart-table thead th { text-transform: uppercase; font-size: 0.85rem; color: #555; border-bottom: 1px solid #ddd; }
.cart-table tbody tr + tr td { border-top: 1px solid #eee; }
.cart-table .desc { display: flex; align-items: center; }
.cart-table .thumb { width: 80px; margin-right: 2rem; filter: drop-shadow(0 1px 2px rgba(0,0,0,0.5)) drop-shadow(2px 4px 3px rgba(0,0,0,0.35));}
.cart-table .desc a { color: #625b5b; font-weight: 600; font-size: 1.25rem; text-decoration: none; }
.cart-table .desc small { color: #666; font-size: 0.85rem; line-height: 0.65rem;}
.cart-table .file { display: block; margin-top: 0.25rem; font-family: monospace; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 150px; }
.cart-table .qty { font-size: 1.4rem; text-align: center; }
.cart-table .discount td { color: #2a7f2a; font-weight: 600; }
.cart-table .discount .total { text-align: right; }
.cart-table .total { text-align: right; font-weight: 600; }
.cart-table .totalAmt { text-align: right; font-weight: 600; font-size: 1.5rem;}
.cart-table .totalAmt sup { font-size: 1rem; vertical-align: 0.3em; }
.cart-summary { background: #eaeaea; padding: 2rem; border-radius: 8px; text-align: center; }
.cart-summary h2 { font-size: 1.75rem; margin-bottom: 1.5rem; }
.cart-summary h2 span { color: #333; }
.cart-summary h2 span sup { font-size: 1rem; vertical-align: 0.5em; }
@media (max-width: 750px) { 
  .cart-summary { margin-top: 2rem; } 
  .cart-table .thumb { width: 50px; }
}



.tip-header { font-size: 1.5rem; text-align: left;font-weight: 600; color: #625b5b; margin-bottom: 0.5rem; margin-top: 0;}
@media (min-width: 768px) { .tip-header { margin-top: 4rem; } }
.tip-options { display: flex; gap: 1rem; margin-bottom: 0.75rem; }
input[name="tip"] { display: none; }
.tip-option { flex: 1; border: 6px solid #eaeaea; border-radius: 8px; padding: 1rem; text-align: center; cursor: pointer; transition: border-color .3s; }
input[name="tip"]:checked + label.tip-option { border-color: #6AEF76; }
.tip-amount { display: block; font-size: 1.5rem; font-weight: 600; line-height: 1; }
.tip-amount sup { font-size: 1rem; vertical-align: 0.3em; }
.tip-label { display: block; font-size: 0.85rem; line-height: 0.9rem; margin-top: 0.25rem; color: #555; }


.tip-option { flex:1; border:6px solid #eaeaea; border-radius:8px; padding:1rem; text-align:center; cursor:pointer; transition:border-color .3s; position:relative; overflow:hidden; }
.tip-peek .peek-img { position: absolute; bottom: -40px; left: -80px; width: 80px; transform: rotate(-20deg); transition: left .4s ease, bottom .4s ease, transform .4s ease; pointer-events: none; }
.tip-peek:hover .peek-img { bottom: -10px; left: -35px; transform: rotate(0deg); }

.editTag, .removeTag {color: #D35863!important; font-size: 0.85rem!important;}
.editTag:hover, .removeTag:hover {color: #b84a56!important; font-size: 0.85rem!important;}

</style>







<!--inside head -->
</head><body>
<?php include '__003-header.php'; ?>  
    
<section class="section" style="padding-top: 9rem;">
<div class="container wider">
  <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0;">
    <div class="column eight md-six sm-twelve babyGap">
<h3 style="text-align: left;">Cart</h3>
    <table class="cart-table">
        <thead>
          <tr>
            <th style="text-align: left;">Description</th>
            <th style="text-align: right;">Total</th>
          </tr>
        </thead>
        <tbody>
          
        
          <tr>
            <td class="desc">
              <img src="img/smile.png" alt="" class="thumb" />
              <div>
                <h6><b>Stickers <small style="font-weight: 300;"></small></h6>
                (750) <a href="#">Smile</a><br/>
                <small>3x3 - 3 mil Vinyl</small><br/>
                <small class="file">1751402601-0-billOnPrinter…</small>
                <a href="#" class="editTag">[EDIT]</a> 
                <a href="#" class="removeTag">[REMOVE]</a> 
              </div>
            </td>
             <td class="totalAmt"><sup>$</sup>94</td>
          </tr>
          
          
          <tr>
            <td class="desc">
              <img src="img/document.png" alt="" class="thumb" />
              <div>
                <h6><b>Paper <small style="font-weight: 300;">-- Medium</small></h6>
                (250) <a href="#">Office Efficiency</a><br/>
                <small>5x7 - 100# Silk - 4/4</small><br/>
                <small class="file">1751402681-0-_tp.pdf</small>
                <a href="#" class="editTag">[EDIT]</a> 
                <a href="#" class="removeTag">[REMOVE]</a> 
              </div>
            </td>
            <td class="totalAmt"><sup>$</sup>51</td>
          </tr>

          
          <tr>
            <td class="desc">
              <img src="img/document.png" alt="" class="thumb" />
              <div>
                <h6><b>Book <small style="font-weight: 300;">-- Perfect</small></h6>
                (50) <a href="#">Garbio</a><br/>
                <small>6x9 - 10pt C1S/100# Uncoated - 180pg</small><br/>
                <small class="file">1751402681-0-_tp.pdf</small>
                <a href="#" class="editTag">[EDIT]</a> 
                <a href="#" class="removeTag">[REMOVE]</a> 
              </div>
            </td>
            <td class="totalAmt"><sup>$</sup>51</td>
          </tr>


<!--          
          <tr class="discount">
            <td>Discount for multiple designs</td>
            <td class="total">-<sup>$</sup>5</td>
          </tr>
-->
        </tbody>
      </table>
    </div>


    <div class="column four md-six sm-twelve babyGap">

<!-- TIP  -->
<h3 class="tip-header" style="text-align: center;">Leave me a tip</h3>
<div class="tip-options">
  <input type="radio" id="tip0"  name="tip" value="0"  checked hidden>
  <label for="tip0" class="tip-option">
    <span class="tip-amount"><sup>$</sup>0</span>
    <span class="tip-label">Tip for what?!</span>
  </label>

  <input type="radio" id="tip5"  name="tip" value="5"  hidden>
  <label for="tip5" class="tip-option">
    <span class="tip-amount"><sup>$</sup>5</span>
    <span class="tip-label">Grab a coffee.</span>
  </label>

  <input type="radio" id="tip10" name="tip" value="10" hidden>
<label for="tip10" class="tip-option tip-peek">
  <img src="img/billHead.png" alt="Bill peeking" class="peek-img">
  <span class="tip-amount"><sup>$</sup>10</span>
  <span class="tip-label">Lunch is on me!</span>
</label>

</div>

      <div class="cart-summary">
        <h2>Subtotal: <span><sup>$</sup>145</span></h2>
        <a href="#" class="button checkout btn-green">Checkout 🔒</a>
      </div>
    </div>
  </div>
</div>

</section>





<section class="section" style="padding-top: 0rem;">
<div class="container wider">
  <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0;">
    <div class="column three babyGap" style="background: #e1e1e1; min-height: 100px; padding: 0; margin: 0;display: flex; flex-direction: column; justify-content: center; text-align: center;">Col 1</div>
    <div class="column three babyGap" style="background: #eaeaea; min-height: 100px; padding: 0; margin: 0;display: flex; flex-direction: column; justify-content: center; text-align: center;">Col 1</div>
    <div class="column three babyGap" style="background: #e1e1e1; min-height: 100px; padding: 0; margin: 0;display: flex; flex-direction: column; justify-content: center; text-align: center;">Col 1</div>
    <div class="column three babyGap" style="background: #eaeaea; min-height: 100px; padding: 0; margin: 0;display: flex; flex-direction: column; justify-content: center; text-align: center;">Col 1</div>
    
  </div>
</div>
</section>



<?php include '__004-footer.php'; ?>
<?php include '__005-java.php'; ?>
<!--before /body -->
  



<!--before /body -->
</body></html>
