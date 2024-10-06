<br>
<div class="max-w-4xl mx-auto">
    <h1 class="surat">Surat Keterangan Tidak Mampu (SKTM)</h1>
    <form action="" class="form-container">
        <div class="mb-5">
            <label for="nama" class="block mb-2 text-sm font-medium text-white">Nama Lengkap</label>
            <input type="text" id="nama" class="input-style" required />
        </div>
  
        <div class="mb-5">
            <label for="nik" class="block mb-2 text-sm font-medium text-white">Nomor Induk Kependudukan (NIK)</label>
            <input type="text" id="nik" class="input-style" required />
        </div>
  
        <div class="mb-5">
            <label for="gender" class="block mb-2 text-sm font-medium text-white">Jenis Kelamin</label>
            <select id="gender" class="input-style select-style">
                <option value="pria">Laki-laki</option>
                <option value="wanita">Perempuan</option>
            </select>
        </div>
  
        <div class="mb-5">
            <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-white">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" class="input-style" required />
        </div>
  
        <div class="mb-5">
            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-white">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" class="input-style" required />
        </div>
  
        <div class="mb-5">
            <label for="agama" class="block mb-2 text-sm font-medium text-white">Agama</label>
            <select id="agama" class="input-style select-style">
                <option value="islam">Islam</option>
                <option value="protestan">Protestan</option>
                <option value="katholik">Katholik</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
                <option value="konghucu">Konghucu</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>

        <div class="mb-5">
          <label for="status_perkawinan" class="block mb-2 text-sm font-medium text-white">Status Perkawinan</label>
          <select id="status_perkawinan" class="input-style select-style">
              <option value="menikah">Menikah</option>
              <option value="belum_menikah">Belum Menikah</option>
              <option value="janda">Janda</option>
              <option value="duda">Duda</option>
          </select>
      </div>
  
        <div class="mb-5">
            <label for="pekerjaan" class="block mb-2 text-sm font-medium text-white">Pekerjaan</label>
            <input type="text" id="pekerjaan" class="input-style" required />
        </div>
  
        <div class="mb-5">
            <label for="alamat" class="block mb-2 text-sm font-medium text-white">Alamat</label>
            <input type="text" id="alamat" class="input-style" required />
        </div>
  
        <div class="mb-5">
            <label for="input_ktp" class="block mb-2 text-sm font-medium text-white">Upload file</label>
            <div class="custom-file-input">
                <input class="input-file-style" id="input_ktp" type="file" aria-describedby="file_input_help">
                <span class="file-name" id="file-name">No file chosen</span> <!-- Span untuk menampilkan nama file -->
            </div>
            <p class="mt-1 text-sm text-gray-400" id="file_input_help">PNG, JPG, JPEG, PDF (Max 1 MB)</p>
        </div>
  
        <div class="mt-5">
            <button type="submit" class="submit-btn">Submit</button>
        </div>
        
    </form>
  </div>
  <br>
  <br>

  <!-- JavaScript -->
<script>
    const inputFile = document.getElementById('input_ktp');
    const fileNameDisplay = document.getElementById('file-name');

    inputFile.addEventListener('change', function() {
        const file = this.files[0]; // Ambil file yang diinputkan
        if (file) {
            fileNameDisplay.textContent = file.name; // Tampilkan nama file
        } else {
            fileNameDisplay.textContent = 'No file chosen'; // Tampilkan pesan default jika tidak ada file
        }
    });
</script>

  
  <style>
    .surat{
        font-family: 'Poppins' !important;
        font-size: 28px;
        font-weight: bold;
        text-align: center;
    }
  
    .form-container {
        background-color: #1d2951;
        padding: 2rem;
        border-radius: 0.5rem;
        font-family: 'Poppins' !important;
    }
  
    .input-style {
        background-color: rgba(255, 255, 255, 0.2); /* Warna sedikit transparan */
        border: 1px solid #ccc;
        color: white; /* Warna teks menjadi putih */
        font-size: 0.875rem;
        padding: 10px;
        border-radius: 8px;
        width: 100%;
        box-sizing: border-box;
        transition: border 0.3s ease;
    }
  
    .input-style:focus {
        border-color: #1d2951;
        outline: none;
    }
  
    /* Untuk input file */
    .custom-file-input {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 50px;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.2);
        border: 1px solid #ccc;
        border-radius: 8px;
        color: white; /* Warna teks file */
    }
  
    .input-file-style {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 100%;
        opacity: 0; /* Menyembunyikan default file input */
        cursor: pointer;
    }
  
    .custom-file-input:before {
        content: 'Choose file';
        display: inline-block;
        background-color: #1d2951;
        color: white;
        padding: 10px 20px;
        border-radius: 8px 0 0 8px;
        cursor: pointer;
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        line-height: 30px;
    }
  
    .custom-file-input input[type="file"]:hover + .custom-file-input:before {
        background-color: #2c3f77;
    }

    .file-name {
      position: absolute;
      left: 140px; /* Jarak dari tombol "Choose File" */
      top: 14px;
      color: white;
      font-size: 0.875rem;
  }


    /* Style untuk select */
  .select-style {
      background-color: rgba(255, 255, 255, 0.2); /* Transparansi seperti input lainnya */
      color: white;
      appearance: none;
      -webkit-appearance: none; /* Agar arrow bawaan browser disembunyikan */
      -moz-appearance: none;
      background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4 5"><path fill="white" d="M2 0 L0 2h4z"/></svg>'); /* Custom arrow */
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 10px;
      padding-right: 30px; /* Tambahkan padding agar panah tidak menutupi teks */
  }

  .select-style option {
      background-color: #1d2951; /* Background option sesuai dengan input field */
      color: white; /* Warna teks option */
  }

  .select-style:focus option {
      background-color: #1d2951; /* Background saat option dipilih */
      color: white;
  }

  .submit-btn {
    width: 100%; /* Membuat tombol selebar form */
    background-color: #3b82f6; /* Warna biru untuk tombol */
    color: white;
    font-size: 1rem;
    padding: 10px; /* Tambah padding agar lebih proporsional */
    border: none;
    border-radius: 8px; /* Border dengan sudut melengkung */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #2563eb; /* Warna tombol saat di-hover */
}

.submit-btn:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5); /* Efek fokus */
}

  </style>
  