<div class="konten_profile">
    <div class="profil_wilayah">
        <h4>Profil Wilayah</h4>
        <ol>
            <li>Luas Wilayah: 1 ha/m2</li>
            <li>Luas Permukiman: 345 ha/m2</li>
            <li>Luas Perkebunan: 10 ha/m2</li>
            <li>Luas Pekarangan: 10 ha/m2</li>
            <li>Luas tanaman: 102 ha/m2</li>
            <li>Luas perkantoran: 10 ha/m2</li>
            <li>Luas lainnya: 1 ha/m2</li>
        </ol>

        <h4>Batas - Batas Wilayah</h4>
        <ol>
            <li>Batas Sebelah Utara: Desa Way Huwi dan Way Galih</li>
            <li>Batas Sebelah Selatan: Kelurahan Sukabumi dan Sukarame</li>
            <li>Batas Sebelah Timur: Desa Sukanegara, Way Galih, dan Lematang: 10 ha/m2</li>
            <li>Batas Sebelah Barat: Kelurahan Sukarame dan Harapan Jaya</li>
        </ol>
    </div>

    <div class="gambar_peta">
        <h4>Peta Wilayah</h4>
        <!-- Nampilin peta -->
        <br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1992.2162197975634!2d105.3095!3d-5.4074!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e41f4e988b62305%3A0xc6307cb6e4299430!2sDesa%20Sabah%20Balau!5e0!3m2!1sen!2sid!4v1693491688998"
            width="100%"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"></iframe>
    </div>
</div>

<style>
    * {
        font-family: 'Poppins';
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .konten_profile {
        background-image: url('../img/background_content.jpg'); 
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center; /* Memusatkan secara horizontal */
        align-items: center; /* Memusatkan secara vertikal */
        height: 100vh; /* Tinggi seluruh viewport */
        width: 100%; 
        position: relative; /* Untuk pseudo-elemen overlay */
    }

    /* Overlay untuk background color di atas background image */
    .konten_profile::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(0, 0, 0, 0.65); Warna overlay dengan transparansi */
        z-index: 1; /* Letakkan di atas background image tetapi di bawah konten */
    }

    .profil_wilayah, .gambar_peta {
    width: 45%; /* Batasi lebar agar tidak terlalu lebar */
    max-width: 600px; /* Tambahkan max-width untuk kontrol lebar maksimal */
    padding: 15px;
    margin: 10px;
    position: relative; 
    z-index: 2; /* Letakkan di atas overlay */
    color: white;
    background-color: rgba(29, 41, 81, 1);
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Menambahkan animasi transisi */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Efek shadow awal */
}

.profil_wilayah:hover, .gambar_peta:hover {
    transform: scale(1.05); /* Membesarkan ukuran saat di-hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Meningkatkan shadow saat di-hover */
}

    .profil_wilayah h4, .profil_wilayah ol, .gambar_peta h4 {
        position: relative;
        z-index: 2;
    }

    .gambar_peta iframe {
        max-width: 100%;
    }

    h4 {
        padding-top: 15px;
        margin-left: 10px;
        font-weight: bold;
    }

    ol {
        margin-left: 30px;
        padding-top: 5px;
        line-height: 1.4;
    }
</style>