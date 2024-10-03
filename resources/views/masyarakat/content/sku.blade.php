<div class="max-w-4xl mx-auto">
  <h1 class="surat">Surat Keterangan Usaha (SKU)</h1>
  <form action="" class="form-container">
      <div class="mb-5">
          <label for="nama" class="block mb-2 text-sm font-medium text-white">Nama Lengkap</label>
          <input type="text" id="nama" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="nik" class="block mb-2 text-sm font-medium text-white">Nomor Induk Kependudukan (NIK)</label>
          <input type="text" id="nik" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="gender" class="block mb-2 text-sm font-medium text-white">Jenis Kelamin</label>
          <select id="gender" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              <option value="pria">Laki-laki</option>
              <option value="wanita">Perempuan</option>
          </select>
      </div>

      <div class="mb-5">
          <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-white">Tempat Lahir</label>
          <input type="text" id="tempat_lahir" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-white">Tanggal Lahir</label>
          <input type="date" id="tanggal_lahir" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="agama" class="block mb-2 text-sm font-medium text-white">Agama</label>
          <select id="agama" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
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
          <label for="pekerjaan" class="block mb-2 text-sm font-medium text-white">Pekerjaan</label>
          <input type="text" id="pekerjaan" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="alamat" class="block mb-2 text-sm font-medium text-white">Alamat</label>
          <input type="text" id="alamat" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="input_ktp" class="block mb-2 text-sm font-medium text-white">Upload file</label>
          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="input_ktp" type="file" aria-describedby="file_input_help">
          <p class="mt-1 text-sm text-gray-400" id="file_input_help">PNG, JPG, JPEG, PDF (Max 1 MB)</p>
      </div>

      <div class="mb-5">
          <label for="nama_usaha" class="block mb-2 text-sm font-medium text-white">Nama Usaha</label>
          <input type="text" id="nama_usaha" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="tahun_usaha" class="block mb-2 text-sm font-medium text-white">Tahun Mulai Usaha</label>
          <input type="text" id="tahun_usaha" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required pattern="^(19|20)\d{2}$" title="Masukkan tahun antara 1900 hingga 2099" />
      </div>

      <div class="mb-5">
          <label for="alamat_usaha" class="block mb-2 text-sm font-medium text-white">Alamat Usaha</label>
          <input type="text" id="alamat_usaha" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mb-5">
          <label for="ukuran_tempat_usaha" class="block mb-2 text-sm font-medium text-white">Ukuran Tempat Usaha</label>
          <input type="text" id="ukuran_tempat_usaha" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
      </div>

      <div class="mt-5">
          <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2">Submit</button>
      </div>
  </form>
</div>

  <style>
    .surat{
      font-family: 'Poppins' !important;
      font-size: 28px;
      font-weight: bold;
      text-align: center;
    }
    .form-container {
            background-color: #2d3748; /* Abu-abu gelap */
            padding: 2rem;
            border-radius: 0.5rem;
            font-family: 'Poppins' !important;
        }
</style>