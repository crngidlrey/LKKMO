<!-- resources/views/masyarakat/partials/profile.blade.php -->

@include('masyarakat.partials.header') <!-- Memanggil header.blade.php -->
@include('masyarakat.partials.navbar') <!-- Memanggil navbar.blade.php -->

<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="slider-container">
    <div class="slider-img">
        <div class="img-slider-box">
            <a href="https://link-tujuan-1.com" class="hover-effect">
                <img src="../img/slider-1.jpg" alt="">
            </a>
        </div>
        <div class="img-slider-box">
            <a href="https://link-tujuan-2.com" class="hover-effect">
                <img src="../img/slider-2.jpg" alt="">
            </a>
        </div>
        <div class="img-slider-box">
            <a href="https://link-tujuan-3.com" class="hover-effect">
                <img src="../img/slider-3.jpg" alt="">
            </a>
        </div>
        <div class="img-slider-box">
            <a href="https://link-tujuan-4.com" class="hover-effect">
                <img src="../img/slider-4.jpg" alt="">
            </a>
        </div>
        <div class="img-slider-box">
            <a href="https://link-tujuan-5.com" class="hover-effect">
                <img src="../img/slider-5.jpg" alt="">
            </a>
        </div>
    </div>
</div>

@include('masyarakat.partials.footer') <!-- Memanggil footer.blade.php -->

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    $('.slider-img').flickity({
        // options
        wrapAround: true, // biar kalau gambar terakhir selesai, balik lagi ke gambar awal
        freeScroll: true, // bisa menggeser gambar secara bebas tanpa harus tekan tombol
        autoPlay: 3000,  // gambarnya geser otomatis setelah 3 detik
        pauseAutoPlayOnHover: false,  // autoplay tetap berjalan saat hover
        prevNextButtons: true,  // Menampilkan tombol next/prev
        pageDots: true,  // menampilkan titik - titik (pagination) dibawah gambar
        draggable: true,  // Bisa digeser secara manual
    });
</script>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .img-slider-box {
        width: 50%;
        height: 500px;
        margin: 0 15px;
        overflow: hidden;
        position: relative; 
    }

    .img-slider-box img {
        width: 100%;
        height: 450px;
        object-fit: cover;
    }

    .hover-effect {
        display: block; 
        position: relative; 
    }

    /* Efek hover */
    .hover-effect::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(44, 90, 157, 0.5); 
        opacity: 0; 
        transition: opacity 0.3s; 
    }

    .hover-effect:hover::after {
        opacity: 1; 
    }

    .flickity-page-dots {
        bottom: 0;  
    }

    /* Responsif */
    @media (max-width: 768px) {
        .img-slider-box {
            width: 90%;
        }
    }
</style>
