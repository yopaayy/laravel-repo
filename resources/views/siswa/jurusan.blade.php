<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contoh Tampilan - SIKELAS</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <span class="navbar-brand mb-0 h1">SIKELAS</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#" onclick="tampilkanMenu('jurusan', this)">Jurusan</a></li>
        <li class="nav-item"><a class="nav-link" href="#" onclick="tampilkanMenu('guru', this)">Guru</a></li>
        <li class="nav-item"><a class="nav-link" href="#" onclick="tampilkanMenu('kelas', this)">Kelas</a></li>
        <li class="nav-item"><a class="nav-link" href="#" onclick="tampilkanMenu('walikelas', this)">Wali Kelas</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-4">
  <div class="alert alert-secondary small">
    <strong>Catatan contoh:</strong> ini contoh acuan tampilan saja. Route masih sebatas <code>Route::view()</code> per menu (belum Controller/database), dan tombol Simpan pada modal belum tersambung ke server — cukup pastikan modal terbuka/tertutup dengan benar.
  </div>

  <!-- ===== MENU: JURUSAN ===== -->
  <div id="menu-jurusan" class="menu-section">
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#tambahModal">
      Tambah Data Jurusan
    </button>
    <h4 class="mb-0">Data Jurusan</h4>

    <div class="d-flex justify-content-between align-items-center mb-3">
     
      <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalJurusan">+ Tambah Jurusan</button> -->
    </div>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-hover mb-0">
          <thead>
            <tr><th>No</th><th>Nama Jurusan</th><th>Singkatan</th><th>Aksi</th></tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>Rekayasa Perangkat Lunak</td><td>RPL</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Rekayasa Perangkat Lunak" data-bs-singkatan="RPL">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>2</td><td>Teknik Komputer dan Jaringan</td><td>TKJ</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Teknik Komputer dan Jaringan" data-bs-singkatan="TKJ">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>3</td><td>Teknik Pemesinan</td><td>TP</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Teknik Pemesinan" data-bs-singkatan="TP">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>4</td><td>Teknik Kendaraan Ringan Otomotif</td><td>TKR</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Teknik Kendaraan Ringan Otomotif" data-bs-singkatan="TKR">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>5</td><td>Teknik Instalasi Tenaga Listrik</td><td>TITL</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Teknik Instalasi Tenaga Listrik" data-bs-singkatan="TITL">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>6</td><td>Tata Kecantikan Kulit dan Rambut</td><td>TKKR</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Tata Kecantikan Kulit dan Rambut" data-bs-singkatan="TKKR">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>7</td><td>Desain Komunikasi Visual</td><td>DKV</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Desain Komunikasi Visual" data-bs-singkatan="DKV">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>8</td><td>Teknik Alat Berat</td><td>TAB</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#ubahModal"
                data-bs-nama-jurusan="Teknik Alat Berat" data-bs-singkatan="TAB">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ===== MENU: GURU ===== -->
  <div id="menu-guru" class="menu-section d-none">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">Data Guru</h4>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalGuru">+ Tambah Guru</button>
    </div>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-hover mb-0">
          <thead>
            <tr><th>No</th><th>Nama Guru</th><th>JK</th><th>Kode Guru</th><th>Ijasah Terakhir</th><th>Alamat</th><th>Aksi</th></tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>Slamet, S.Kom</td><td>L</td><td>G-001</td><td>S1</td><td>Wlingi</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalGuru">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>2</td><td>Sari, S.Pd</td><td>P</td><td>G-002</td><td>S1</td><td>Blitar</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalGuru">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>3</td><td>Arif, S.Ds</td><td>L</td><td>G-003</td><td>S1</td><td>Wlingi</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalGuru">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>4</td><td>Budi, S.Kom</td><td>L</td><td>G-004</td><td>S2</td><td>Kanigoro</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalGuru">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>5</td><td>Wulan, S.Pd</td><td>P</td><td>G-005</td><td>S1</td><td>Talun</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalGuru">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ===== MENU: KELAS ===== -->
  <div id="menu-kelas" class="menu-section d-none">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">Data Kelas</h4>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKelas">+ Tambah Kelas</button>
    </div>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-hover mb-0">
          <thead>
            <tr><th>No</th><th>Tingkat</th><th>Jurusan</th><th>Rombel</th><th>Aksi</th></tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>11</td><td>RPL</td><td>1</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>2</td><td>11</td><td>RPL</td><td>2</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>3</td><td>12</td><td>TKJ</td><td>1</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>4</td><td>10</td><td>DKV</td><td>1</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>5</td><td>10</td><td>TITL</td><td>1</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ===== MENU: WALI KELAS ===== -->
  <div id="menu-walikelas" class="menu-section d-none">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">Penugasan Wali Kelas</h4>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalWaliKelas">+ Tetapkan Wali Kelas</button>
    </div>
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-hover mb-0">
          <thead>
            <tr><th>No</th><th>Guru</th><th>Kelas</th><th>Tahun Ajaran</th><th>Aksi</th></tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>Slamet, S.Kom</td><td>XI RPL 1</td><td>2026/2027</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalWaliKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>2</td><td>Sari, S.Pd</td><td>XI RPL 2</td><td>2026/2027</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalWaliKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>3</td><td>Arif, S.Ds</td><td>X DKV 1</td><td>2026/2027</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalWaliKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>4</td><td>Budi, S.Kom</td><td>XII TKJ 1</td><td>2026/2027</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalWaliKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
            <tr><td>5</td><td>Wulan, S.Pd</td><td>X TITL 1</td><td>2026/2027</td><td>
              <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalWaliKelas">Ubah</button>
              <button class="btn btn-sm btn-outline-danger">Hapus</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<!-- ================= MODAL: JURUSAN ================= -->
<div class="modal fade" id="modalJurusan" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah / Ubah Jurusan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Nama Jurusan</label>
          <input type="text" class="form-control" placeholder="Contoh: Rekayasa Perangkat Lunak">
        </div>
        <div class="mb-3">
          <label class="form-label">Singkatan</label>
          <input type="text" class="form-control" placeholder="Contoh: RPL">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- ================= MODAL: GURU ================= -->
<div class="modal fade" id="modalGuru" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah / Ubah Guru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Nama Guru</label>
          <input type="text" class="form-control" placeholder="Contoh: Slamet, S.Kom">
        </div>
        <div class="row">
          <div class="col-6 mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select class="form-select">
              <option>L</option>
              <option>P</option>
            </select>
          </div>
          <div class="col-6 mb-3">
            <label class="form-label">Kode Guru</label>
            <input type="text" class="form-control" placeholder="Contoh: G-001">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Ijasah Terakhir</label>
          <select class="form-select">
            <option>SMA/SMK</option>
            <option>D3</option>
            <option>S1</option>
            <option>S2</option>
            <option>S3</option>
          </select>
        </div>
        <div class="mb-1">
          <label class="form-label">Alamat</label>
          <textarea class="form-control" rows="2" placeholder="Alamat tempat tinggal"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- ================= MODAL: KELAS ================= -->
<div class="modal fade" id="modalKelas" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah / Ubah Kelas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-6 mb-3">
            <label class="form-label">Tingkat</label>
            <select class="form-select">
              <option>10</option>
              <option>11</option>
              <option>12</option>
            </select>
          </div>
          <div class="col-6 mb-3">
            <label class="form-label">Rombel</label>
            <input type="number" class="form-control" min="1" max="10" placeholder="1 - 10">
          </div>
        </div>
        <div class="mb-1">
          <label class="form-label">Jurusan</label>
          <select class="form-select">
            <option>RPL</option>
            <option>TKJ</option>
            <option>DKV</option>
            <option>TITL</option>
            <option>OTKP</option>
            <option>AKL</option>
            <option>BDP</option>
            <option>TBSM</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- ================= MODAL: WALI KELAS ================= -->
<div class="modal fade" id="modalWaliKelas" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tetapkan Wali Kelas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Guru</label>
          <select class="form-select">
            <option>Slamet, S.Kom</option>
            <option>Sari, S.Pd</option>
            <option>Arif, S.Ds</option>
            <option>Budi, S.Kom</option>
            <option>Wulan, S.Pd</option>
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Kelas</label>
          <select class="form-select">
            <option>XI RPL 1</option>
            <option>XI RPL 2</option>
            <option>XII TKJ 1</option>
            <option>X DKV 1</option>
            <option>X TITL 1</option>
          </select>
        </div>
        <div class="mb-1">
          <label class="form-label">Tahun Ajaran</label>
          <select class="form-select">
            <option>2026/2027</option>
            <option>2025/2026</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data jurusan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="namaJurusan" class="form-label">Nama Jurusan</label>
          <input type="text" class="form-control" id="namaJurusan" placeholder="Contoh : Rekayasa Perangkat Lunak">
        </div>
        <div class="mb-3">
          <label for="singkatanJurusan" class="form-label">Singkatan Jurusan</label>
          <input type="text" class="form-control" id="singkatanJurusan" placeholder="Contoh : RPL">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Jurusan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="namaJurusan" class="form-label">Nama Jurusan</label>
          <input type="text" class="form-control" id="namaJurusan" placeholder="Contoh : Rekayasa Perangkat Lunak">
        </div>
        <div class="mb-3">
          <label for="namaJurusan" class="form-label">Singkatan Jurusan</label>
          <input type="text" class="form-control" id="namaJurusan" placeholder="Contoh : RPL">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data Jurusan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="namaJurusan" class="form-label">Nama Jurusan</label>
          <input type="text" class="form-control" id="namaJurusan" placeholder="Contoh : Rekayasa Perangkat Lunak">
        </div>
        <div class="mb-3">
          <label for="singkatanJurusan" class="form-label">Singkatan Jurusan</label>
          <input type="text" class="form-control" id="singkatanJurusan" placeholder="Contoh : RPL">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>











<script>
  // Meniru cara kerja route: tiap menu navbar cukup "menampilkan" satu view/section.
  // Di Laravel asli, ini digantikan oleh Route::view('/jurusan', 'jurusan') dst.
  function tampilkanMenu(nama, el) {
    document.querySelectorAll('.menu-section').forEach(sec => sec.classList.add('d-none'));
    document.getElementById('menu-' + nama).classList.remove('d-none');

    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => link.classList.remove('active'));
    el.classList.add('active');
  }
</script>

<script>
  // const UbahModal=document.getElementById('ubahModal')
  // UbahModal.addEventListener('show.bs.modal', target => {
  //   const tombol = target.relatedTarget
  //   const namaJurusan = tombol.getAttribute('data-jurusan')
  //   const singkatan = tombol.getAttribute('data-singkatan')

  //   //Ubah Data
  //   const judulModal=UbahModal.querySelector('.modal-title')
  //   judulModal.textContent = namaJurusan

  //   const inputNamaJurusan=UbahModal.querySelector('.modal-body input')
  //   inputNamaJurusan.value = namaJurusan
  // })
</script>

<script>
  const ModalDataJurusan=document.getElementById('ubahModal')
  ModalDataJurusan.addEventListener('show.bs.modal', target => {
    const tombolModal = target.relatedTarget
    const namaJurusan = tombolModal.getAttribute('data-bs-nama-jurusan')
    const singkatan = tombolModal.getAttribute('data-bs-singkatan')

    //Ubah Data
    const inputNamaJurusan=ModalDataJurusan.querySelector('.modal-body #namaJurusan')
    inputNamaJurusan.value = namaJurusan

    const inputSingkatanJurusan=ModalDataJurusan.querySelector('.modal-body #singkatanJurusan')
    inputSingkatanJurusan.value = singkatan
  })  
</script>

</body>
</html>
