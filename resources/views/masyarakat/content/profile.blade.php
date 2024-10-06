<div class="konten_profile">
    <div class="profil_wilayah">
        <h3>Profil Wilayah</h3>
        <ol>
            <li>Luas Wilayah : 1 ha/m2</li>
            <li>Luas Permukiman : 345 ha/m2</li>
            <li>Luas Perkebunan : 10 ha/m2</li>
            <li>Luas Pekarangan : 10 ha/m2</li>
            <li>Luas tanaman : 102 ha/m2</li>
            <li>Luas perkantoran : 10 ha/m2</li>
            <li>Luas lainnya : 1 ha/m2</li>
        </ol>

        <h3>Batas - Batas Wilayah</h3>
        <ol>
            <li>Batas Sebelah Utara : Desa Way Huwi dan Way Galih</li>
            <li>Batas Sebelah Selatan : Kelurahan Sukabumi dan Sukarame</li>
            <li>Batas Sebelah Timur : Desa Sukanegara, Way Galih, dan Lematang : 10 ha/m2</li>
            <li>Batas Sebelah Barat : Kelurahan Sukarame dan Harapan Jaya</li>
        </ol>
    </div>

    <div class="gambar_peta">
        <h3>Peta Wilayah</h3>
        <!-- Nampilin peta -->
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
        margin: 0;
        padding: 0;
    }

    .konten_profile {       
        display: flex; 
        justify-content: space-between; 
        width: 80%; 
        margin: 0 auto; 
    }

    .profil_wilayah {
        width: 50%; 
        padding: 15px;
        position: relative; 
        overflow: hidden; 
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-image: url("../img/slider-4.jpg"); 
        background-size: cover; 
        background-position: center; 
        color:white;
    }

    .profil_wilayah::before {
        content: "";
        position: absolute; 
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(44, 90, 157, 0.5); 
        z-index: 1; 
    }

    .profil_wilayah h3, .profil_wilayah ol {
        position: relative; 
        z-index: 2; 
    }

    .gambar_peta {
        width: 45%; 
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h3 {
        padding-top: 15px;
        margin-left: 10px;
    }

    ol {
        margin-left: 30px;
        padding-top: 5px;
        line-height: 1.4;
    }
</style>
