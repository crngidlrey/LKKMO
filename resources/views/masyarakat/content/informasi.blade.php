@include('masyarakat.partials.header') <!-- Memanggil header.blade.php -->
@include('masyarakat.partials.navbar') <!-- Memanggil navbar.blade.php -->

<div class="konten_informasi">
    <div class="profil_informasi">
        <div class="konten_informasi_box_container">
            <div class="konten_informasi_box">
                <p class="title-info" >Sejarah Desa <br><br></p>
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
                <p>Visi : <br>
                Menjadi desa mandiri yang berlandaskan nilai-nilai
                kebersamaan, religiusitas, dan kemajuan ekonomi, serta
                berkelanjutan dalam pembangunan infrastruktur dan sumber
                daya manusia. <br><br>
                Misi : <br>
                1. Pembangunan Jangka Panjang - Melanjutkan
                pembangunan desa yang belum terlaksana. -
                Meningkatkan kerjasama antara pemerintah desa
                dengan lembaga desa yang ada. - Meningkatkan
                kesejahtraan masyarakat desa dengan meningkatkan
                sarana dan prasarana ekonomi warga. <br>
                2. Pembangunan Jangka Pendek
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box; 
    }

    .konten_informasi {       
        display: flex; 
        width: 100%; 
        margin: 0 auto; 
    }

    .profil_informasi {
        width: 100%; 
        height: 430px;
        position: relative; 
        overflow: hidden; 
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-image: url("../img/slider-4.jpg"); 
        background-size: cover; 
        background-position: center; 
        color: white;
    }

    .profil_informasi::before {
        content: "";
        position: absolute; 
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(44, 90, 157, 0.5); 
        z-index: 1; 
    }

    .konten_informasi_box_container {
        display: flex; 
        justify-content: space-between; 
        z-index: 2; 
        position: relative; 
        max-width: 80%; 
        margin: 5px auto; 
        flex-wrap: wrap; 
    }

    .konten_informasi_box {
        background-color: #2C5A9D; 
        padding: 20px; 
        border-radius: 8px; 
        width: 45%; 
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        margin: 22px; 
        height: auto; 
        min-width: 250px; 
    }

    .konten_informasi_box p {
        font-size: 17px; 
        text-align: justify;
        line-height : 1.5;
    }

    .konten_informasi_box .title-info {
        font-size : 22px;
        text-align : center;
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

@include('masyarakat.partials.footer') <!-- Memanggil footer.blade.php -->