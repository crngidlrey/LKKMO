<div class="header">
  <div class="tapis-container"></div>
  <div class="content">
    <div class="logo">
      <img src="../img/logo.png" alt="logo">
    </div>
    <div class="judul">
      <h2>Desa Sabah Balau</h2>
      <p>Kec.Tanjung Bintang, Kab.Lampung Selatan, Prov.Lampung</p>
    </div>
  </div>
</div>

<style>
.header {
  background-color: #2C5A9D;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 10px; /* Mengurangi padding atas dan bawah */
}

.tapis-container {
  width: 100%;                      /* Lebar penuh */
  height: 55px;                     /* Atur tinggi tapis */
  background-image: url('../img/tapis_header.png');
  background-repeat: repeat-x;      /* Tapis berulang secara horizontal */
  background-size: 633px;           /* Ukuran tapis diperkecil */
  margin-bottom: 0;                 /* Hapus margin bawah */
}

.content {
  display: flex;
  width: 100%;
  align-items: center;
  justify-content: center;
  position: relative;
}

.logo {
  position: absolute;
  left: 20px;
}

.logo img {
  height: 100px;                    /* Perbesar ukuran logo */
}

.judul {
  color: white;
  text-align: center;
  width: 100%;
  font-size: 32px;                  /* Perbesar ukuran font untuk judul */
  margin: 0;                        /* Hapus margin judul */
  font-family: "Poppins";
}

.judul h2{
  margin:0;
}

.judul p {
  font-size: 15px;                  /* Ukuran font untuk deskripsi */
  margin: 0;                        /* Hapus margin deskripsi */
  padding: 0;
}
</style>