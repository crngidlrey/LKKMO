<nav>
    <div class="left-menu">
      <a href="/beranda" id="beranda">Beranda</a>
      <a href="/profile" id="profile">Profil Desa</a>
      <a href="/layanan" id="layanan">Layanan</a>
      <a href="/informasi" id="informasi">Informasi</a>
    </div>
    <div class="right-menu">
      <div class="dropdown">
        <a href="#" id="layanan-mandiri">Layanan Mandiri <span class="arrow">▼</span></a>
        <div class="dropdown-content">
          <a href="/sku" id="sku">Surat Keterangan Usaha</a>
          <a href="#">Submenu 2</a>
          <a href="#">Submenu 3</a>
        </div>
      </div>
      <a href="#" id="masuk">Masuk</a>
    </div>
  </nav>
  
  <style>
    nav {
      background-color: #1d2951; /* Warna biru */
      display: flex;
      justify-content: space-between;
      padding: 5px 20px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      font-family: 'Poppins';
      z-index: 1000;
  }
  
  nav a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease, transform 0.3s ease;
  }
  
  nav a:hover {
      background-color: #2C5A9D;
      transform: translateY(-5px);
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
  }
  
  nav a.active {
      background-color: #2C5A9D; /* Warna untuk menu yang aktif */
      box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
  }
  
  .left-menu {
      display: flex;
  }
  
  .right-menu {
      display: flex;
      align-items: center;
  }
  
  .dropdown {
      position: relative;
      display: inline-block;
  }
  
  .dropdown-content {
      display: none;
      position: absolute;
      background-color: white;
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 9999;
      opacity: 0;
      transform: translateY(10px);
      transition: all 0.3s ease;
      border-radius: 5px;
  }
  
  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      transition: background-color 0.3s ease, padding-left 0.3s ease;
  }
  
  .dropdown-content a:hover {
      background-color: #2C5A9D;
      color: white;
      padding-left: 20px;
  }
  
  .dropdown:hover .dropdown-content {
      display: block;
      opacity: 1;
      transform: translateY(0);
  }
  
  .dropdown:hover > a {
      background-color: #2C5A9D;
  }
  
  .arrow {
      margin-left: 5px;
      transition: transform 0.3s ease;
  }
  
  .dropdown:hover .arrow {
      transform: rotate(180deg);
  }
  </style>
  
<script>
    // Ambil URL saat ini
    const currentLocation = window.location.pathname;
  
    // Daftar ID menu dengan rute mereka
    const menuLinks = {
      "/beranda": "beranda",
      "/profile": "profile",
      "/layanan": "layanan",
      "/informasi": "informasi",
      "/sku": "sku",
      "/masuk": "masuk"
    };
  
    // Periksa apakah URL cocok dengan salah satu menu
    if (menuLinks[currentLocation]) {
      document.getElementById(menuLinks[currentLocation]).classList.add("active");
    }
  </script>
  