<!-- resources/views/masyarakat/partials/profile.blade.php -->

@include('masyarakat.partials.header') <!-- Memanggil header.blade.php -->
@include('masyarakat.partials.navbar') <!-- Memanggil navbar.blade.php -->

<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="main-carousel">
    <div class="cell"><img src="../img/slider-1.jpg" alt=""></div>
    <div class="cell"><img src="../img/slider-2.jpg" alt=""></div>
    <div class="cell"><img src="../img/slider-3.jpg" alt=""></div>
    <div class="cell"><img src="../img/slider-4.jpg" alt=""></div>
    <div class="cell"><img src="../img/slider-5.jpg" alt=""></div>
</div>

@include('masyarakat.partials.footer') <!-- Memanggil footer.blade.php -->

<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true,
        autoPlay: 3000,  // Menambahkan autoPlay dengan interval 3 detik
        pauseAutoPlayOnHover: false,  // Agar autoplay tetap berjalan saat hover
        prevNextButtons: true,  // Menampilkan tombol next/prev
        pageDots: true,  // Menampilkan pagination dots
        draggable: true,  // Bisa digeser secara manual
    });
</script>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .cell {
        width: 50%;
        height: 500px;
        margin: 0 15px;
        overflow: hidden;
        border-radius: 8px;
    }

    .cell img {
        width: 100%;
        height: 450px;
        object-fit: cover;
    }
</style>
