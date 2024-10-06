<div class="konten_informasi">
    <div class="profil_informasi">
        <div class="konten_informasi_box_container">
            <div class="konten_informasi_box">
                <p class="title-info">Sejarah Desa</p>
                <p>
                Sabah Balau merupakan salah satu
                desa yang berada di Kecamatan Tanjung
                Bintang, Kabupaten Lampung Selatan.
                Berdiri sejak zaman kolonial, desa ini
                telah mengalami berbagai perubahan dari
                segi pembangunan dan kemasyarakatan.
                Sebagai desa yang kaya akan budaya dan
                sejarah, Sabah Balau mempertahankan
                nilai-nilai gotong royong dan kerjasama
                antarwarga.
                </p>
            </div>
            <div class="konten_informasi_box">
                <p class="title-info">Visi</p>
                <p>
                Menjadi desa mandiri yang berlandaskan nilai-nilai
                kebersamaan, religiusitas, dan kemajuan ekonomi, serta
                berkelanjutan dalam pembangunan infrastruktur dan sumber
                daya manusia.
                </p>
                <p class="title-info">Misi</p>
                <ol>
                    <li>Pembangunan Jangka Panjang, hal ini mencakup melanjutkan
                        pembangunan desa yang belum terlaksana, meningkatkan kerjasama 
                        antara pemerintah desa dengan lembaga desa yang ada, meningkatkan 
                        kesejahtraan masyarakat desa dengan meningkatkan sarana dan prasarana 
                        ekonomi warga.
                    </li>
                    <li>Pembangunan Jangka Pendek</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.konten_informasi {       
    display: flex; 
    width: 100%; 
    margin: 0 auto; 
}

.profil_informasi {
    background-image: url('../img/background_content.jpg'); 
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center; /* Memusatkan secara horizontal */
    align-items: center; /* Memusatkan secara vertikal */
    height: 100vh; /* Tinggi seluruh viewport */
    width: 100%; 
    position: relative; 
}

.profil_informasi::before {
    content: "";
    position: absolute; 
    top: 0;
    left: 0;
    right: 0;
    bottom: 0; 
    z-index: 1; 
}

.konten_informasi_box_container {
    display: flex; 
    justify-content: space-between; 
    z-index: 2; 
    position: relative; 
    max-width: 80%; 
    margin: 20px auto; /* Tambahkan margin */
    flex-wrap: wrap; 
}

.konten_informasi_box {
    background-color: #1d2951;
    padding: 20px;
    border-radius: 8px;
    width: 45%;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    margin: 20px;
    height: auto;
    min-width: 250px;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Menambahkan animasi */
}

.konten_informasi_box:hover {
    transform: scale(1.05); /* Membesarkan ukuran box saat di-hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Menambah shadow saat di-hover */
}


.konten_informasi_box p, .konten_informasi_box ol {
    color: white;
    text-align: justify;
}

.konten_informasi_box ol {
    list-style-type: decimal; /* Pastikan nomor ol muncul */
    margin-left: 20px; /* Tambahkan margin ke kiri */
}

.konten_informasi_box .title-info {
    font-size: 22px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 15px; /* Menambahkan jarak di bawah judul */
}

/* Responsif untuk layar lebih kecil */
@media (max-width: 768px) {
    .konten_informasi_box {
        width: 100%;
    }

    .konten_informasi_box_container {
        flex-direction: column; 
        align-items: center; 
    }
}
    </style>