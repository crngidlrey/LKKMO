<!-- resources/views/masyarakat/partials/profile.blade.php -->

@include('masyarakat.partials.header') <!-- Memanggil header.blade.php -->
@include('masyarakat.partials.navbar') <!-- Memanggil navbar.blade.php -->

<div class="konten_profile">
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

@include('masyarakat.partials.footer') <!-- Memanggil footer.blade.php -->


<style>
    * {
        margin:0;
        padding :0;
    }
    .konten_profile {       
        margin : 0 auto;
        width: 50%;
        height :55%;
        background-color: pink;
    }

    h3{
        padding-top : 15px;
        margin-left : 10px;
    }
    ol {
        margin-left : 30px;
        padding-top: 5px;
        line-height : 1.4;
    }
</style>