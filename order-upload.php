<?php include '__001-top.php'; ?>
  <title>Upload - Brownlee Press</title>
<?php include '__002-links.php'; ?>
<!--inside head -->
  
<style>
.upload-wrapper { position: relative; border: 2px dashed #ccc; background-color: #f2f2f2; border-radius: 8px; padding: 4rem 2rem; text-align: center; transition: border-color .3s; }
.upload-wrapper:hover { border-color: #999; }
.file-input { pointer-events:none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; }
.file-label { pointer-events:auto; display: inline-block; background-color: #6AEF76; color: #625b5b; font-size: 1.25rem; padding: 1rem 2rem; border-radius: 6px; cursor: pointer; transition: background-color .3s; }
.file-label:hover { background-color: #51c45b!important; color: #fff; }
.upload-instruction { margin-top: 1rem; font-size: 1rem; color: #333; }
.img-container { display: inline-block; filter: drop-shadow(0 0 4px rgba(0, 0, 0, 0.45)); }
.imgPrev { width: 100%; max-width:400px; max-height: 400px; display: block; }

.switch { position: relative; display: inline-block; width: 40px; height: 20px; }
.switch input { opacity: 0; width: 0; height: 0; }
.slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background-color: #ccc; transition: .4s; border-radius: 20px; }
.slider:before { position: absolute; content: ""; height: 16px; width: 16px; left: 2px; bottom: 2px; background: #fff; transition: .4s; border-radius: 50%; }
.switch input:checked + .slider { background-color: #6AEF76; }
.switch input:checked + .slider:before { transform: translateX(20px); }
.switch-label { font-size: 0.85rem; color: #625b5b; vertical-align: middle; margin-right: 0.5rem; }
#first-section.dark { background-color: #444 !important; color: #fff !important; }


</style>


<!--inside head -->
</head><body>
<?php include '__003-header.php'; ?>  
    

  <section id="first-section" class="section" style="padding-top: 6rem; padding-bottom: 5rem;">
    <div class="container wide">
      <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 0;">
        <div class="column twelve" style="">
        
<!-- ORDER UPLOADER START -->
<div id="order-uploader">
  <h6 style="font-size: 0.92rem; padding-bottom: 6px; text-align: left; margin-top: 0px;">UPLOAD FILES</h6>
  <div class="upload-wrapper">
    <input type="file" id="file-upload" class="file-input" />
    <label for="file-upload" class="file-label">Choose file…</label>
    <p class="upload-instruction">Please send all files as PDFs - stickers as PNGs.</p>
  </div>

  <div style="margin-top: 10px;">
    <a href="#">or, email artwork later.</a>
  </div>
</div>
<!-- ORDER UPLOADER END -->

<!-- UPLOADED IMAGE START -->
<div id="uploaded-image" style="margin-top: 0px; width: 100%; display: none;"> 
<!-- SWITCH -->
<div class="bg-toggle" style="text-align: right; margin-bottom: 1rem;">
  <label for="bgToggle" class="switch-label">Dark background</label>
  <label class="switch">
    <input type="checkbox" id="bgToggle" />
    <span class="slider"></span>
  </label>
</div>
  <div class="img-container"><img src="img/blank.png" class="imgPrev" id="preview-image"></div>
  <br><a href="#" id="remove-upload"><small>remove</small></a>

  <div style="margin-top: 25px;"> 
    <h6 style="font-size: 0.85rem; padding-bottom: 2px; text-align: left;">PROJECT NAME</h6>
    <input type="text" id="project-name" name="project-name" placeholder="Enter project name" style="width: 100%; padding: 12px; font-size: 1rem; height: 40px;" />
  </div>

  <div style="margin-top: 0px;"> 
    <h6 style="font-size: 0.85rem; padding-bottom: 2px; text-align: left;">SPECIAL INSTRUCTIONS (optional)</h6>
    <textarea id="message" name="message" placeholder="Type your message here..." style="width: 100%; padding: 12px; font-size: 1rem; height: 120px!important;"></textarea>
  </div>

  <a href="cart.php" class="button btn-green">Add to Cart</a>
</div>
<!-- UPLOADED IMAGE END -->


        </div>
        
      </div>
    </div>
  </section>




<?php include '__004-footer.php'; ?>
<?php include '__005-java.php'; ?>
<!--before /body -->
  
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const uploader   = document.getElementById('order-uploader');
    const uploaded   = document.getElementById('uploaded-image');
    const preview    = document.getElementById('preview-image');
    const fileInput  = document.getElementById('file-upload');
    const removeBtn  = document.getElementById('remove-upload');
    const bgToggle   = document.getElementById('bgToggle');
    const section    = document.getElementById('first-section');

    fileInput.addEventListener('change', function () {
      if (this.files && this.files[0]) {
        const reader = new FileReader();
        reader.onload = e => preview.src = e.target.result;
        reader.readAsDataURL(this.files[0]);
        uploader.style.display = 'none';
        uploaded.style.display = 'block';
      }
    });

    removeBtn.addEventListener('click', function (e) {
      e.preventDefault();
      fileInput.value = "";
      preview.src      = "img/smile.png";
      uploader.style.display = 'block';
      uploaded.style.display = 'none';

      // ** Reset toggle back to light mode **
      if (bgToggle.checked) {
        bgToggle.checked = false;
        section.classList.remove('dark');
      }
    });

    // existing dark-mode toggle logic
    bgToggle.addEventListener('change', function() {
      section.classList.toggle('dark', this.checked);
    });
  });
</script>


<!--before /body -->
</body></html>






