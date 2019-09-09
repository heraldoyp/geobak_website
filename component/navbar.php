<nav class="fh5co-nav" role="navigation">
  <div class="top-menu">
    <div class="container">
      <div class="row">
        <div class="col-xs-2">
          <div id="fh5co-logo"><a href="index.php">Geobak.</a></div>
        </div>
        <div class="col-xs-10 text-right menu-1">
          <ul>
            <li <?php if($page_active == "index.php"){echo 'class="active"';} ?>><a href="index.php">Beranda</a></li>
            <li <?php if($page_active == "layanan.php"){echo 'class="active"';} ?>><a href="layanan.php">Layanan</a></li>
            <li <?php if($page_active == "tentang_kami.php"){echo 'class="active"';} ?>><a href="tentang_kami.php">Tentang Kami</a></li>
            <li <?php if($page_active == "kontak.php"){echo 'class="active"';} ?>><a href="kontak.php">Kontak</a></li>
            <li <?php if($page_active == "faq.php"){echo 'class="active"';} ?>><a href="faq.php">FAQ</a></li>
            <li class="has-dropdown">
              <a href="blog.php">|&nbsp&nbsp&nbsp&nbsp&nbspBahasa</a>
              <ul class="dropdown">
                <li><a href="#">English</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</nav>