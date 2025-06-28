<?php include '__001-top.php'; ?>
<title>Brownlee Press</title>
<?php include '__002-links.php'; ?>

<style>
.soft-card { width:100%; border: 1px solid #eee; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.1); cursor: pointer; transition: box-shadow 0.3s ease; }
.soft-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
.card { border: 1px solid #eee; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.1); cursor: pointer; transition: box-shadow 0.3s ease; display: flex; flex-direction: column; height: 100%; }
.card:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
.content-image { width: 100%; height: 300px; background-color: #f1f1f1; background-size: cover; background-position: center; transition: background-color 0.3s ease; }
.card:hover .content-image { background-color: #6AEF76; }.content-image { width: 100%; height: 300px; background-size: cover; background-position: center; } 
.content-body { padding: 16px; display: flex; flex-direction: column; gap: 10px; flex-grow: 1; } 
.content-title { font-size: 1.2rem; font-weight: bold; line-height: 1.3; } 
.content-description { font-size: 1rem; color: #555; } 
.content-meta { display: flex; justify-content: space-between; align-items: center; font-size: 0.9rem; color: #777; margin-top: auto; } 
.read-time { font-size: 0.9rem; }

@media (max-width: 768px) {
  .content-search, .content-links { text-align: center !important; justify-content: center !important; }
}
</style>


</head><body>
<?php include '__003-header.php'; ?>

<section class="section" style="padding-top: 7rem;">

  <!-- Top Nav Row -->
  <div class="container widest">
    <div class="row" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem; flex-wrap: wrap;">
      
      <!-- Left: Content Links -->
      <div class="column six md-six sm-twelve content-links" style="display: flex; gap: 1rem; align-items: center;">
        <a href="#" style="font-weight: bold; color: #625b5b;">Printers Notes</a>
        <a href="#" style="font-weight: bold; color: #625b5b;">Show your Work</a>
        <a href="#" style="font-weight: bold; color: #625b5b;">Playlists</a>
      </div>
      
      <!-- Right: Search -->
      <div class="column six md-six sm-twelve content-search" style="display: flex; justify-content: flex-end; align-items: center; gap: 0.5rem; margin-top: 10px;">
        <input type="text" placeholder="Search content..." style="padding: 0.5rem 1rem; font-size: 1rem; max-width: 300px;">
        <img src="img/mag.png" alt="Search" style="width: 32px; height: 32px; cursor: pointer; margin-top: -20px;">
      </div>

    </div>
  </div>

  <hr style="margin: 0 0 2rem 0;">

  <!-- Page Header -->
  <div class="container wide">
    <div class="row" style="text-align: center; margin-bottom: 1rem;">
      <div class="column twelve">
        <h1 style="margin-bottom: 1rem;">Hey look, I made you some content!</h1>
        <p style="font-size: 1.2rem;">A little corner of the internet where I share printer tips, playlists, project highlights, and whatever else I can't keep to myself. Dive in, get inspired, and who knows, maybe learn a thing or two along the way.</p>
      </div>
    </div>
  </div>

  <!-- Hero Cards -->
  <div class="container widest">
    <div class="row" style="text-align: center; display: flex; flex-wrap: wrap; margin: 0; padding: 25px 0 0 0;">
      
<div class="column six md-six sm-twelve theGap" style="text-align: left; margin-bottom: 45px;">
  <div class="card">
    <a href="post.php"><div class="content-image" style="background-image: url('img/pn_one-up.png');"></div></a>
    <div class="content-body">
      <small>Printers Notes</small>
      <a href="post.php"><h4 class="content-title">One up</h4></a>
      <div class="content-meta">
        <span>CA - Cardstock</span>
        <span class="read-time">Read more</span>
      </div>
    </div>
  </div>
</div>

<div class="column six md-six sm-twelve theGap" style="text-align: left; margin-bottom: 45px;">
  <div class="card">
    <a href="post.php"><div class="content-image" style="background-image: url('img/pn_sticker-trans.png');"></div></a>
    <div class="content-body">
      <small>Printers Notes</small>
      <a href="post.php"><h4 class="content-title">Sticker setup - Transparent PNGs</h4></a>
      <div class="content-meta">
        <span>Gergana Encheva</span>
        <span class="read-time">10 min read</span>
      </div>
    </div>
  </div>
</div>

  <!-- Show Your Work Header -->
<div class="container widest" style="margin-top: 30px;">
    <div class="row" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem; flex-wrap: wrap;">
      
      <!-- Left: Content Links -->
      <div class="column six md-six sm-twelve content-links" style="display: flex; gap: 1rem; align-items: center;">
        <h5><a href="#" style="font-weight: bold; color: #625b5b;">Show your Work</a></h5>
      </div>
      
      <!-- Right: Search -->
      <div class="column six md-six sm-twelve content-search" style="display: flex; justify-content: flex-end; align-items: center; gap: 0.5rem; margin-top: 10px;">
        <a href="content">See more</a>
      </div>

    </div>
  </div>

  <!-- Insights Cards -->
  <div class="container widest">
    <div class="row" style="display: flex; flex-wrap: wrap; margin: 25px 0; padding: 0 0 1rem 0;">
      
 <div class="column four md-four sm-twelve babyGap" style="text-align: left; margin-bottom: 45px;">
  <div class="card">
    <a href="post.php"><div class="content-image" style="background-image: url('img/syw_invite.jpg');"></div></a>
    <div class="content-body">
      <small>Show your Work</small>
      <a href="post.php"><h4 class="content-title">Eddie Chaffer's stickers</h4></a>
      <div class="content-meta">
        <span><a href="#" target="_blank">Eddie Chaffer</a></span>
        <span class="read-time"></span>
      </div>
    </div>
  </div>
</div>

<div class="column four md-four sm-twelve babyGap" style="text-align: left; margin-bottom: 45px;">
  <div class="card">
    <a href="post.php"><div class="content-image" style="background-image: url('img/syw_invite.jpg');"></div></a>
    <div class="content-body">
      <small>Show your Work</small>
      <a href="post.php"><h4 class="content-title">Eddie Chaffer's stickers</h4></a>
      <div class="content-meta">
        <span><a href="#" target="_blank">Eddie Chaffer</a></span>
        <span class="read-time"></span>
      </div>
    </div>
  </div>
</div>

<div class="column four md-four sm-twelve babyGap" style="text-align: left; margin-bottom: 45px;">
  <div class="card">
    <a href="post.php"><div class="content-image" style="background-image: url('img/syw_invite.jpg');"></div></a>
    <div class="content-body">
      <small>Show your Work</small>
      <a href="post.php"><h4 class="content-title">Eddie Chaffer's stickers</h4></a>
      <div class="content-meta">
        <span><a href="#" target="_blank">Eddie Chaffer</a></span>
        <span class="read-time"></span>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>




  <!-- Playlists Header -->
  <div class="container wider" style=" margin-bottom: 0.5rem;">
    <div class="row" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem; flex-wrap: wrap;">
      
      <div class="column six md-six sm-twelve content-links" style="display: flex; gap: 1rem; align-items: center;">
        <h5><a href="#" style="font-weight: bold; color: #625b5b;">Music to Print to</a></h5>
      </div>
      
      <div class="column six md-six sm-twelve content-search" style="display: flex; justify-content: flex-end; align-items: center; gap: 0.5rem; margin-top: 10px;">
        <a href="content">See more</a>
      </div>

    </div>
  </div>


    <!-- Playlists -->
  <div class="container wider" style=" padding: 0 0 5rem 0;">
    <div class="row" style="display: flex; align-items: center; margin-bottom: 0.5rem; flex-wrap: wrap;">
      
      <div class="column three md-three sm-six babyGap" style="">
        <a href=""><img src="img/play1.jpg" class="soft-card"></a>
      </div>
      <div class="column three md-three sm-six babyGap" style="">
        <a href=""><img src="img/play2.jpg" class="soft-card"></a>
      </div>
      <div class="column three md-three sm-six babyGap" style="">
        <a href=""><img src="img/play3.jpg" class="soft-card"></a>
      </div>
      <div class="column three md-three sm-six babyGap" style="">
        <a href=""><img src="img/play4.jpg" class="soft-card"></a>
      </div>
    </div>
  </div>


</section>

<!-- Subscribe Section -->
<section style="text-align: center; padding: 0rem 1rem 3rem 1rem; background: #e1e1e1;">
<div class="container wide" style="text-align: center; background: #e1e1e1; margin-bottom: 0;">
  <div class="row" style="display: flex; flex-wrap: wrap; margin: 0; padding: 0;">
    <div class="column twelve theGap">

      <img src="img/heart-eyes.png" alt="Subscribe" style="max-width: 170px; width: 100%; margin-top: -95px;">
      <h3 style="margin-top:20px; margin-bottom: 1rem;">Great to see you, how about I creep into your inbox once in a while?!</h3>
      <p style="font-size: 1.1rem; margin-bottom: 2rem;">It sounds worse that it is... I'll just let you know when stuff is happening, and what's going on in my tiny corner of the print world.</p>
      <button class="button btn-primary">Subscribe</button>
      
    </div>
  </div>
</div>


</section>

<?php include '__004-footer.php'; ?>
<?php include '__005-java.php'; ?>
</body></html>
