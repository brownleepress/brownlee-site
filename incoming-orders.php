<?php include '__001-top.php'; ?>
  <title>Orders</title>
<?php include '__002-links.php'; ?>
<!--inside head -->

<style>
  .order-cards-wrapper {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 30px;
    width: 100%;
    padding: 0 10px;
    box-sizing: border-box;
    align-items: start;
  }
  .order-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 3px 5px rgba(0,0,0,0.5);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  
    overflow: hidden;
  }
  .card-header {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    line-height: 1rem;
    padding: 16px 16px 0 16px;
  }
  .customer-name {
    font-size: 16px;
    font-weight: 600;
    padding: 0 16px 4px 16px;
    border-bottom: 1px #ccc solid;
  }
  
  .job-block {
    padding: 5px 16px 7px;
    text-decoration: none;
    color: inherit;
    display: block;
    position: relative;
    z-index: 1;
    transition: background-color 0.2s;
  }
  .order-card .job-block:nth-child(odd) {
    background-color: #f9f9f9;
  }
  .order-card .job-block:nth-child(even) {
    background-color: #e1e1e1;
  }
  .job-block.done {
  background-color: #C3E6C9 !important;
  color: #222 !important;
}

.job-block.done:hover {
  background-color: #C3E6C9 !important;
  color: #222 !important;
}

.job-block:not(.done):hover {
  background-color: #D35863;
  color: white;
}
  .download-icon {
    position: absolute;
    top: -8px;
    right: 4px;
    width: 30px;
    height: 30px;
    background: url('img/_file.png') no-repeat center center;
    background-size: contain;
    z-index: 10;
    pointer-events: auto;
    display: block;
  }
  .job-main {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }
  .job-code {
    font-size: 58px;
    font-weight: bold;
    align-self: flex-start;
    color: inherit;
    text-decoration: none;
  }
  .job-code:hover {color: inherit;}
  .job-details {
    text-align: right;
    align-self: flex-start;
  }
  .line {
    font-size: 14px;
  }
  .job-basics {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    margin-top: 4px;
  }
  .job-basics div:nth-child(1) {
    width: 30%;
    text-align: left;
  }
  .job-basics div:nth-child(2) {
    width: 30%;
    text-align: center;
  }
  .job-basics div:nth-child(3) {
    width: 40%;
    text-align: right;
  }
  .specials {
    font-size: 13px;
    color: #555;
    text-align: center;
  }
  .instructions-toggle {
    font-size: 12px;
    margin-top: 4px;
    color: #333;
    font-style: italic;
    text-align: center;
    cursor: pointer;
    background: #eee;
    padding: 4px 0;
    z-index: 3;
    position: relative;
  }
  .instructions-content {
    font-size: 12px;
    line-height: 0.9rem;
    padding: 4px 8px;
    display: none;
    background: #f9f9f9;
    color: #222;
    border-top: 1px solid #ccc;
  }
  .status-icons {
    border-top: 1px #ccc solid;
    display: flex;
    justify-content: space-around;
    padding: 12px 0 16px 0;
    margin-top: auto;
  }
  .status-icons img {
    width: 30px;
    height: 30px;
    opacity: 0.28;
  }
  .status-icons img.active {
    opacity: 1;
  }
</style>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.instructions-toggle').forEach(function (toggle) {
      toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        const content = this.nextElementSibling;
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
      });
    });
    document.querySelectorAll('.download-icon').forEach(function (icon) {
      icon.addEventListener('click', function (e) {
        e.stopPropagation();
        window.location = this.getAttribute('data-href');
      });
    });
  });
</script>

<!--inside head -->
</head><body>
<?php include '__003-header.php'; ?>  
  <section class="section" style="margin-bottom:0; padding: 6rem 2rem;">
    <div class="order-cards-wrapper">







<!-- JOB CARD -->
<div class="order-card">
  <div class="card-header">
    <span>6/16</span>
    <span>#15524</span>
  </div>
  <div class="customer-name">Bill Chesney</div>
<!-- START JOB -->
  <div class="job-block done">
    <a href="files/job-123.pdf" class="download-icon" download></a>
    <div class="job-main">
      <a href="toggle_done.html" class="job-code">ST</a>
      <div class="job-details">
        <div class="line" style="font-size: 100%; font-weight: 500; margin-top:13px;">400</div>
        <div class="line">100#U</div>
      </div>
    </div>
    <div class="job-basics">
      <div>4/4</div>
      <div>24pg</div>
      <div>8.5x11</div>
    </div>
    <div class="instructions-toggle">SPECIAL INSTRUCTIONS</div>
    <div class="instructions-content">Customer notes go here. Customer notes go here. Customer notes go here. Customer notes go here. </div>
  </div>
<!-- END JOB -->
<!-- START JOB -->
  <div class="job-block">
    <a href="files/job-123.pdf" class="download-icon" download></a>
    <div class="job-main">
      <a href="toggle_done.html" class="job-code">ST</a>
      <div class="job-details">
        <div class="line" style="font-size: 100%; font-weight: 500; margin-top:13px;">400</div>
        <div class="line">100#U</div>
      </div>
    </div>
    <div class="job-basics">
      <div>4/4</div>
      <div>24pg</div>
      <div>8.5x11</div>
    </div>
    <!--
    <div class="instructions-toggle">SPECIAL INSTRUCTIONS</div>
    <div class="instructions-content">Customer notes go here.</div>
-->
  </div>
<!-- END JOB -->
 <!-- START JOB -->
  <div class="job-block">
    <a href="files/job-123.pdf" class="download-icon" download></a>
    <div class="job-main">
      <a href="toggle_done.html" class="job-code">CA</a>
      <div class="job-details">
        <div class="line" style="font-size: 100%; font-weight: 500; margin-top:13px;">400</div>
        <div class="line">16pt C1S</div>
      </div>
    </div>
    <div class="job-basics">
      <div>4/0</div>
      <div>1pg</div>
      <div>4.25x5.5</div>
    </div>
    <!--
    <div class="instructions-toggle">SPECIAL INSTRUCTIONS</div>
    <div class="instructions-content">Customer notes go here.</div>
-->
  </div>
<!-- END JOB -->

  <div class="status-icons">
    <img src="img/_holding.png" alt="Holding" class="active" />
    <img src="img/_processing.png" alt="Processing" />
    <img src="img/_printing.png" alt="Printing" />
    <img src="img/_complete.png" alt="Complete" />
  </div>
</div>
<!-- END JOB CARD -->









<!-- JOB CARD -->
<div class="order-card">
  <div class="card-header">
    <span>6/17</span>
    <span>#15525</span>
  </div>
  <div class="customer-name">Tim Kelty</div>
<!-- START JOB -->
  <div class="job-block">
    <a href="files/job-123.pdf" class="download-icon" download></a>
    <div class="job-main">
      <a href="toggle_done.html" class="job-code">ST</a>
      <div class="job-details">
        <div class="line" style="font-size: 100%; font-weight: 500; margin-top:13px;">400</div>
        <div class="line">100#U</div>
      </div>
    </div>
    <div class="job-basics">
      <div>4/4</div>
      <div>24pg</div>
      <div>8.5x11</div>
    </div>
    <div class="instructions-toggle">SPECIAL INSTRUCTIONS</div>
    <div class="instructions-content">Customer notes go here. Customer notes go here. Customer notes go here. Customer notes go here. </div>
  </div>
<!-- END JOB -->

  <div class="status-icons">
    <img src="img/_holding.png" alt="Holding" class="active" />
    <img src="img/_processing.png" alt="Processing" />
    <img src="img/_printing.png" alt="Printing" />
    <img src="img/_complete.png" alt="Complete" />
  </div>
</div>
<!-- END JOB CARD -->








    </div>
  </section> 
<?php include '__004-footer.php'; ?>
<?php include '__005-java.php'; ?>
<!--before /body -->
</body></html>
