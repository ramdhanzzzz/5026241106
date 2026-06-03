<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Open Recruitment Staff HMSI 2026/2027</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" />
  <style>
    body {
      background-color: #e4e4e4;
    }

    .header{
      background-color: #1a3c8f;
      color: white;
      padding: 24px 30px;
      margin-bottom: 24px;
    }

    .header p { color: #ccd9f5; margin: 0; }

    .section {
      background: white;
      border: 1px solid #c7d8f5;
      padding: 24px;
      margin-bottom: 20px;
    }

.section-title {
  font-weight: bold;
  color: #1a3c8f;
  margin-bottom: 16px;
}
    .btn-daftar {
      background-color: #1a3c8f;
      color: white;
      padding: 10px 36px;
      border: none;
    }
  </style>
</head>

<body>

  <div class="container py-4" style="max-width: 700px;">

    <div class="header">
      <div class="row align-items-center">
        <div class="col-9">
          <h3>Open Recruitment Staff</h3>
          <p>HMSI Kabinet Pilar Aksi 2026/2027</p>
          <p>Himpunan Mahasiswa Sistem Informasi — ITS</p>
          <p>#KuatkanPilar, Satukan Aksi Nyata</p>
        </div>
        <div class="col-3 text-right">
          <small style="color:#ccd9f5;">HMSI ITS</small>
        </div>
      </div>
    </div>

    <!-- Bootstrap 4 input ( text biasa, email, number dan dengan placeholder) -->
    <div class="section">
      <div class="section-title">Data Diri</div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="nrp">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="angkatan">NRP</label>
            <input type="tel" class="form-control" id="nrp">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="email">Email Aktif</label>
            <input type="email" class="form-control" id="email">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="wa">Nomor WhatsApp</label>
            <input type="tel" class="form-control" id="wa" placeholder="contoh: 08123456789">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Program Studi</label><br>
        <!-- Bootstrap 4 input Radio inline -->
        <div class="form-check-inline">
          <label class="form-check-label" for="si">
            <input type="radio" class="form-check-input" name="prodi" id="si">Sistem Informasi
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label" for="id">
            <input type="radio" class="form-check-input" name="prodi" id="id">Inovasi Digital
          </label>
        </div>
      </div>
    </div>

    <!-- Bootstrap radio buttons  -->
    <div class="section">
      <div class="section-title">Pilihan Departemen</div>
      <p><small>Pilih <strong>satu departemen</strong> yang paling sesuai dengan minatmu.</small></p>
      <div class="form-group">
        <div class="form-check">
          <input type="radio" class="form-check-input" name="dept" id="d1">
          <label class="form-check-label" for="d1">Executive Board General Secretary</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="dept" id="d2">
          <label class="form-check-label" for="d2">Executive Board General Treasure</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="dept" id="d3">
          <label class="form-check-label" for="d3">Human Resource Development Departement</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="dept" id="d4">
          <label class="form-check-label" for="d4">Internal Affair Departement</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="dept" id="d5">
          <label class="form-check-label" for="d5">Manage Departement</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="dept" id="d6">
          <label class="form-check-label" for="d6">Student Welfare Department</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="dept" id="d7">
          <label class="form-check-label" for="d7">Research and Technology Application Departement</label>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Motivasi & Kemampuan</div>
      <div class="form-group">
        <label for="motivasi">Mengapa ingin bergabung dengan HMSI?</label>
        <textarea class="form-control" id="motivasi" rows="3"></textarea>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="skill">Kemampuan yang Dimiliki</label>
            <!-- bootstrap select list -->
            <select class="form-control" id="skill">
              <option value="" disabled selected></option>
              <option>contoh 1</option>
              <option>contoh 2</option>
              <option>contoh 3</option>
              <option>contoh 4</option>
              <option>contoh 5</option>
            </select>
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="ukm">Pengalaman Organisasi</label>
            <input type="text" class="form-control" id="ukm">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label>Ketersediaan Waktu</label>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="weekday" value="">Senin – Jumat (hari kuliah)
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="weekend" value="">Sabtu – Minggu (akhir pekan)
          </label>
        </div>
        <!-- contoh bootstrap checkbox disabled -->
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" value="" disabled>Hari libur nasional / cuti bersama
          </label>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="section-title">Upload & Persetujuan</div>
      <div class="form-group">
        <!-- Bootstap input ( file, form-control-file ) -->
        <label for="cv">Upload CV (format ATS Friendly — PDF)</label>
        <input type="file" class="form-control-file" id="cv" accept=".pdf">
        <small class="note">Maks. 2 MB. Wajib untuk semua departemen.</small>
      </div>
      <div class="form-group">
        <!-- contoh form control file-->
        <label for="cv">Upload CV</label>
        <input type="file" class="form-control-file border" id="cv" accept=".pdf">
      </div>
      <div class="form-group">
        <label for="porto">Upload Portofolio</label>
        <input type="file" class="form-control-file border" id="porto" accept=".pdf,.jpg,.png">
      </div>
      <div class="form-group">
        <label>Pernyataan</label><br>
        <!-- Bootstrap checkbox inline -->
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="setuju1">Data saya benar
          </label>
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="setuju2">Setuju syarat & ketentuan
          </label>
        </div>
      </div>
    </div>

    <button type="submit" class="btn-daftar">Kirim Pendaftaran</button>

  </div>

</body>

</html>
