<nav>
  <div class="left-menu">
    <a href="/beranda">Beranda</a>
    <a href="/profile">Profil Desa</a>
    <a href="/layanan">Layanan</a>
    <a href="#">Informasi</a>
  </div>
  <div class="right-menu">
    <div class="dropdown">
      <a href="#">Layanan Mandiri <span class="arrow">▼</span></a>
      <div class="dropdown-content">
        <a href="#">Submenu 1</a>
        <a href="#">Submenu 2</a>
        <a href="#">Submenu 3</a>
      </div>
    </div>
    <a href="#">Masuk</a>
  </div>
</nav>

<style>
  nav {
    background-color: #1d2951; /* Warna biru yang cerah */
    display: flex;
    justify-content: space-between;
    padding: 5px 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Tambahkan shadow */
    transition: background-color 0.3s ease; /* Animasi perubahan warna */
    font-family: 'Poppins';
  }

  nav a {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px; /* Berikan sedikit border radius */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Transisi animasi hover */
  }

  nav a:hover {
    background-color: #2C5A9D; /* Warna hover */
    transform: translateY(-5px); /* Efek mengangkat saat hover */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Tambah bayangan saat hover */
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
    z-index: 1;
    opacity: 0;
    transform: translateY(10px); /* Mulai dari posisi bawah */
    transition: all 0.3s ease;
    border-radius: 5px;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    transition: background-color 0.3s ease, padding-left 0.3s ease; /* Tambahkan animasi saat hover */
  }

  .dropdown-content a:hover {
    background-color: #2C5A9D;
    color: white;
    padding-left: 20px; /* Geser ke kanan saat hover */
  }

  .dropdown:hover .dropdown-content {
    display: block;
    opacity: 1;
    transform: translateY(0); /* Animasi muncul dari bawah */
  }

  /* Pastikan selector arrow benar untuk animasi rotasi */
  .dropdown:hover .arrow {
    transform: rotate(180deg);
  }

  .arrow {
    margin-left: 5px;
    transition: transform 0.3s ease; /* Animasi rotasi */
  }

  .dropdown:hover > a {
    background-color: #2C5A9D; /* Warna background saat hover dropdown */
  }
</style>
