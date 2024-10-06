<div class="konten_layanan">
    <div class="profil_layanan">
        <div class="konten_layanan_box_container">
            <div class="konten_layanan_box">
                <p>
                Desa Sabah Balau
                melayani warga untuk
                pembuatan surat
                keterangan usaha
                sebagai dokumen
                otentik yang konkrit
                untuk membuktikan
                jika usaha yg dilakukan
                adalah usaha yang
                legal di mata hukum
                </p>
            </div>
            <div class="konten_layanan_box">
                <p>Desa Sabah Balau juga melayani 
                    pembuatan surat SKTM Selain
                    untuk berobat, SKTM
                    juga bisa digunakan
                    untuk keringanan
                    BPJS, keringanan Biaya
                    Listrik, keringanan
                    biaya kuliah/KIP, dan
                    lain sebagainya yang
                    berkaitan
                    dengan kemiskinan.
                </p>
            </div>
            <div class="konten_layanan_box">
                <p>SKCK diperlukan untuk
                    berbagai urusan
                    kelengkapan syarat
                    administrasi mulai dari
                    pelengkap persyaratan
                    administrasi untuk
                    mengikuti rekrutmen Calon
                    Pegawai Negeri Sipil (CPNS),
                    melamar pekerjaan,
                    pendanaran sekolah di
                    dalam maupun ke luar
                    negeri, pencalonan diri
                    sebagai pejabat dan lain-
                    lain.
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
        font-family: 'Poppins';
    }

    .konten_layanan {       
        display: flex; 
        justify-content: center; 
        width: 100%; 
        margin: 0 auto;
    }

    .profil_layanan {
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

    .profil_layanan::before {
        content: "";
        position: absolute; 
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 1; 
    }

    .konten_layanan_box_container {
        display: flex; 
        justify-content: space-between; 
        z-index: 2; 
        position: relative; 
        max-width: 80%; 
        margin: 40px auto; 
        flex-wrap: wrap; 
    }

    .konten_layanan_box {
        background-color: #1d2951; 
        padding: 20px; 
        border-radius: 8px; 
        width: 30%; 
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        margin: 10px; 
        height: auto; 
        min-width: 250px; 
    }

    .konten_layanan_box p {
        text-align: justify;
        color: white;
    }

    /* Responsif untuk layar lebih kecil */
    @media (max-width: 768px) {
        .konten_layanan_box {
            width: 100%;
        }

        .konten_layanan_box_container {
            flex-direction: column; 
            align-items: center; 
        }
    }

</style>