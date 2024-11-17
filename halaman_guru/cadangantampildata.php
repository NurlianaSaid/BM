<?php
// Koneksi ke database
// include 'laporanmonir/koneksi.php';

// Proses tambah data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'add') {
    $perusahaan = $_POST['perusahaan'];
    $tanggal = $_POST['tanggal'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];

    // Menangani upload gambar
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek ukuran file
    if ($_FILES["gambar"]["size"] > 10000000) {
        echo "Maaf, ukuran file terlalu besar.";
        $uploadOk = 0;
    }

    // Cek jenis file gambar
    if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk diset ke 0 oleh kesalahan
    if ($uploadOk == 0) {
        echo "Maaf, file tidak diupload.";
    } else {
        // Upload file
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Menyimpan data siswa
            $siswa = [];
            $perkembangan = [];
            $pelanggaran = [];

            for ($i = 1; $i <= $jumlah; $i++) {
                $siswa[] = $_POST["namaSiswa$i"];
                $perkembangan[] = $_POST["perkembangan$i"];
                $pelanggaran[] = $_POST["pelanggaran$i"];
            }

            // Gabungkan elemen array menjadi string
            $namaSiswaString = implode(";", $siswa);
            $perkembanganString = implode(";", $perkembangan);
            $pelanggaranString = implode(";", $pelanggaran);

            // Siapkan dan bind untuk memasukkan data ke tabel laporan
            $stmt = $conn->prepare("INSERT INTO tb_laporanmonir (Nama_perusahaan, Tanggal, Kelas, Kabupaten, Jumlah_siswa, Nama_siswa, Cttn_perkembangan, Cttn_pelanggaran, Gambar) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssss", $perusahaan, $tanggal, $kelas, $alamat, $jumlah, $namaSiswaString, $perkembanganString, $pelanggaranString, $target_file);

            // Eksekusi statement
            if ($stmt->execute()) {
                echo "<script>alert('Data Berhasil Ditambahkan'); window.location.href='laporanmonitoring.php';</script>";
            } else {
                echo "Error: " . $stmt->error;
            }

            // Tutup statement
            $stmt->close();
        } else {
            echo "Maaf, terjadi kesalahan saat mengupload file.";
        }
    }
}

// Proses hapus data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'delete') {
    $id = $_POST['id'];

    // Dapatkan nama file dari database untuk dihapus
    $stmt = $conn->prepare("SELECT Gambar FROM tb_laporanmonir WHERE Id_laporanmonir = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($fileName);
    $stmt->fetch();
    $stmt->close();

    // Hapus file dari server jika ada
    if ($fileName && file_exists($fileName)) {
        if (!unlink($fileName)) {
            echo "<script>alert('Error: Tidak bisa menghapus file $fileName');</script>";
        }
    }

    // Siapkan statement untuk menghapus data
    $stmt = $conn->prepare("DELETE FROM tb_laporanmonir WHERE Id_laporanmonir = ?");
    $stmt->bind_param("i", $id);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil dihapus.'); window.location.href='laporanmonitoring.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Tutup statement
    $stmt->close();
}


// Proses edit data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'edit') {
    $id = $_POST['id'];
    $perusahaan = $_POST['perusahaan'];
    $tanggal = $_POST['tanggal'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];

    // Menangani upload gambar (jika ada file baru yang diunggah)
    $uploadOk = 1;
    $target_file = '';

    if (!empty($_FILES["gambar"]["name"])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Cek ukuran file
        if ($_FILES["gambar"]["size"] > 10000000) {
            echo "Maaf, ukuran file terlalu besar.";
            $uploadOk = 0;
        }

        // Cek jenis file gambar
        if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
            echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diizinkan.";
            $uploadOk = 0;
        }

        // Jika tidak ada error, lakukan upload file
        if ($uploadOk == 1) {
            if (!move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "Maaf, terjadi kesalahan saat mengupload file.";
                $uploadOk = 0;
            }
        }
    }

    // Mengambil data siswa dari form
    $siswa = [];
    $perkembangan = [];
    $pelanggaran = [];

    for ($i = 1; $i <= $jumlah; $i++) {
        $siswa[] = isset($_POST["namaSiswa$i"]) ? $_POST["namaSiswa$i"] : '';
        $perkembangan[] = isset($_POST["perkembangan$i"]) ? $_POST["perkembangan$i"] : '';
        $pelanggaran[] = isset($_POST["pelanggaran$i"]) ? $_POST["pelanggaran$i"] : '';
    }

    // Gabungkan elemen array menjadi string
    $namaSiswaString = implode(";", $siswa);
    $perkembanganString = implode(";", $perkembangan);
    $pelanggaranString = implode(";", $pelanggaran);

    // Siapkan query untuk update data
    if ($uploadOk == 1 && !empty($target_file)) {
        // Jika ada gambar baru, masukkan juga kolom Gambar
        $stmt = $conn->prepare("UPDATE tb_laporanmonir SET Nama_perusahaan=?, Tanggal=?, Kelas=?, Kabupaten=?, Jumlah_siswa=?, Nama_siswa=?, Cttn_perkembangan=?, Cttn_pelanggaran=?, Gambar=? WHERE Id_laporanmonir=?");
        $stmt->bind_param("sssssssssi", $perusahaan, $tanggal, $kelas, $alamat, $jumlah, $namaSiswaString, $perkembanganString, $pelanggaranString, $target_file, $id);
    } else {
        // Jika tidak ada gambar baru, update tanpa kolom Gambar
        $stmt = $conn->prepare("UPDATE tb_laporanmonir SET Nama_perusahaan=?, Tanggal=?, Kelas=?, Kabupaten=?, Jumlah_siswa=?, Nama_siswa=?, Cttn_perkembangan=?, Cttn_pelanggaran=? WHERE Id_laporanmonir=?");
        $stmt->bind_param("ssssssssi", $perusahaan, $tanggal, $kelas, $alamat, $jumlah, $namaSiswaString, $perkembanganString, $pelanggaranString, $id);
    }

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Diperbarui'); window.location.href='laporanmonitoring.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
}



// Query untuk mengambil semua data
$sql = "SELECT Id_laporanmonir, Nama_perusahaan, Tanggal, Kelas, Kabupaten, Jumlah_siswa, Nama_siswa, Cttn_perkembangan, Cttn_pelanggaran, Gambar FROM tb_laporanmonir"; 
$result = $conn->query($sql);
?>

<!-- Tampilkan data dalam tabel -->
<!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> -->
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Perusahaan</th>
            <th>Tanggal</th>
            <th>Kelas</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // if ($result->num_rows > 0) {
        //     $counter = 1;
        //     while ($row = $result->fetch_assoc()) {
            if ($result->num_rows > 0) {
                $counter = 1;
                while ($row = $result->fetch_assoc()) {
                    // Ensure $id is defined here
                    $id = htmlspecialchars($row['Id_laporanmonir']);
            
                echo "<tr>
                    <td>" . htmlspecialchars($counter) . "</td>
                    <td>" . htmlspecialchars($row['Nama_perusahaan']) . "</td>
                    <td>" . htmlspecialchars($row['Tanggal']) . "</td>
                    <td>" . htmlspecialchars($row['Kelas']) . "</td>
                  <td>
  <img src='" . htmlspecialchars($row['Gambar']) . "' alt='Gambar Siswa' style='width: 100%; max-width: 100px; max-height: 100px; object-fit: cover; border-radius: 5px; display: block;' />
</td>

                   </td>

                    <td>
                        <form action='' method='POST' onsubmit='return confirmDelete();' style='display: inline;'>
                        <input type='hidden' name='action' value='delete'>
                        <input type='hidden' name='id' value='" . htmlspecialchars($row['Id_laporanmonir']) . "'>
                        <button type='submit' style='border: none; background: none; cursor: pointer;'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 44 44' fill='none'>
                                <rect width='43.7588' height='44' rx='10' fill='#FF0000' />
                                <path d='M19.6313 10C17.7123 10 16.1422 11.35 16.1422 13H12.6531C10.7341 13 9.16406 14.35 9.16406 16H33.5876C33.5876 14.35 32.0175 13 30.0985 13H26.6094C26.6094 11.35 25.0394 10 23.1204 10H19.6313ZM12.6531 19V33.43C12.6531 33.76 12.9323 34 13.3161 34H29.4705C29.8543 34 30.1334 33.76 30.1334 33.43V19H26.6443V29.5C26.6443 30.34 25.8767 31 24.8998 31C23.9229 31 23.1553 30.34 23.1553 29.5V19H19.6662V29.5C19.6662 30.34 18.8986 31 17.9216 31C16.9447 31 16.1771 30.34 16.1771 29.5V19H12.688H12.6531Z' fill='white' />
                            </svg>
                        </button>
                    </form>
                   <button class='btn' data-toggle='modal' data-target='#editModal$id'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 44 44' fill='none'>
                        <rect x='0.113281' width='43.7588' height='44' rx='10' fill='#008000' />
                        <path d='M28.098 10L24.7907 13.11L31.4054 19.3299L34.7127 16.2199L28.098 10ZM21.4833 16.2199L8.25391 28.6597V34.8796H14.8686L28.098 22.4398L21.4833 16.2199Z' fill='white' />
                    </svg>
                    </button>
                    

                                                  <button class='btn' data-toggle='modal' data-target='#detailModal$id'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 44 44' fill='none'>
                                                    <rect width='44.2588' height='44' rx='10' fill='#295BDB' />
                                                    <g transform='translate(5, 5)'>
                                                        <path d='M27.9438 16.0125C25.1125 12.75 21.2 9 16 9C13.9 9 11.975 9.59375 9.94375 10.8625C8.23125 11.9375 6.475 13.45 4.0625 15.9375L4 16L4.41875 16.4312C7.8625 19.9562 10.8375 23 16 23C18.2812 23 20.4938 22.2563 22.7625 20.725C24.6938 19.4188 26.3375 17.7625 27.6562 16.425L28 16.0812L27.9438 16.0125ZM16 10C18.0688 10 20.0563 10.5938 22.075 11.9125C23.5688 12.8875 25.0375 14.2063 26.6812 16.0438C24.2875 18.4625 20.6938 22 16 22C13.8625 22 11.9875 21.475 10.1125 20.2375C8.39375 19.1062 6.84375 17.5312 5.35 16C9.04375 12.2687 12.125 10 16 10Z' fill='white' />
                                                        <path d='M16 21C18.7562 21 21 18.7562 21 16C21 13.2438 18.7562 11 16 11C13.2438 11 11 13.2438 11 16C11 18.7562 13.2438 21 16 21ZM16 12.0188C18.2 12.0188 20 13.8063 20 16C20 18.1937 18.2 19.9813 16 19.9813C13.8 19.9813 12.0063 18.1937 12.0063 16C12.0063 13.8063 13.8 12.0188 16 12.0188Z' fill='white' />
                                                        <path d='M18.0016 16C18.0016 17.0938 17.1016 18 16.0141 18C14.9266 18 14.0016 17.05 14.0016 15.9563C14.0016 14.8625 14.9891 14 16.0016 14V13C14.3453 13 13.0078 14.35 13.0078 16.0125C13.0078 17.675 14.3516 19.0187 16.0016 19.0187C17.6516 19.0187 19.0016 17.6688 19.0016 16.0125V16H18.0016Z' fill='white' />
                                                    </g>
                                                </svg>
                                                   </button>
                </td>
              </tr>";


              echo "
              <div class='modal fade' id='detailModal$id' tabindex='-1' aria-labelledby='detailModalLabel$id' aria-hidden='true'>
                  <div class='modal-dialog modal-lg modal-dialog-centered'>
                      <div class='modal-content'>
                          <div class='modal-header'>
                              <h5 class='modal-title'>Detail Data - " . htmlspecialchars($row['Nama_perusahaan']) . "</h5>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                              </button>
                          </div>
                          <div class='modal-body'>
                              <div class='form-group'>
                                  <label>Nama DU/DI:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Nama_perusahaan']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Tanggal:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Tanggal']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Kelas:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Kelas']) . "' readonly>
                              </div>
                                 <div class='form-group'>
                                  <label>Alamat:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Kabupaten']) . "' readonly>
                              </div>
                                 <div class='form-group'>
                                  <label>Jumlah Siswa:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Jumlah_siswa']) . "' readonly>
                              </div>
                                 <div class='form-group'>
                                  <label>Nama Siswa:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Nama_siswa']) . "' readonly>
                              </div>
                                 <div class='form-group'>
                                  <label>Catatan Perkembangan :</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Cttn_perkembangan']) . "' readonly>
                              </div>
                                 <div class='form-group'>
                                  <label>Catatan Pelanggaran:</label>
                                  <input type='text' class='form-control' value='" . htmlspecialchars($row['Cttn_pelanggaran']) . "' readonly>
                              </div>
                              <div class='form-group'>
                                  <label>Gambar:</label><br>
                                  <img src='" . htmlspecialchars($row['Gambar']) . "' alt='Gambar' style='max-width: 100%; height: auto;'>
                              </div>
                          </div>
                          <div class='modal-footer'>
                              <button type='button' class='btn btn-secondary' data-dismiss='modal'>Tutup</button>
                          </div>
                      </div>
                  </div>
              </div>";
            // Tampilkan modal edit

         
            
            
// Ambil data siswa dari database
$siswa = explode(';', $row['Nama_siswa']);
$perkembangan = explode(';', $row['Cttn_perkembangan']);
$pelanggaran = explode(';', $row['Cttn_pelanggaran']);
$jumlahSiswa = count($siswa);

echo "
<div class='modal fade' id='editModal$id' tabindex='-1' aria-labelledby='editModalLabel$id' aria-hidden='true'>
    <div class='modal-dialog modal-lg modal-dialog-centered'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title'>Edit Data - " . htmlspecialchars($row['Nama_perusahaan']) . "</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <form action='' method='POST' enctype='multipart/form-data'>
                    <input type='hidden' name='action' value='edit'>
                    <input type='hidden' name='id' value='" . htmlspecialchars($id) . "'>
                    
                    <!-- Pilih Nama Perusahaan -->
                  <div class='form-group'>
    <label for='perusahaan_$id'>Nama DU/DI:</label>
    <select class='form-control perusahaan' name='perusahaan' id='perusahaan_$id' required>
        <option value=''>Pilih Perusahaan</option>
       <option value='Afila Media Karya' data-alamat='Gowa' " . ($row['Nama_perusahaan'] == 'Afila Media Karya' ? 'selected' : '') . ">Afila Media Karya</option>
<option value='Indigo Hub' data-alamat='Pettarani' " . ($row['Nama_perusahaan'] == 'Indigo Hub' ? 'selected' : '') . ">Indigo Hub</option>
<option value='Percetakan' data-alamat='Alamat Percetakan' " . ($row['Nama_perusahaan'] == 'Percetakan' ? 'selected' : '') . ">Percetakan</option>
<option value='Bengkel' data-alamat='Alamat Bengkel' " . ($row['Nama_perusahaan'] == 'Bengkel' ? 'selected' : '') . ">Bengkel</option>
<option value='Telkom' data-alamat='Alamat Telkom' " . ($row['Nama_perusahaan'] == 'Telkom' ? 'selected' : '') . ">Telkom</option>
<option value='Yamaha' data-alamat='Alamat Yamaha' " . ($row['Nama_perusahaan'] == 'Yamaha' ? 'selected' : '') . ">Yamaha</option>
<option value='Suzuki' data-alamat='Alamat Suzuki' " . ($row['Nama_perusahaan'] == 'Suzuki' ? 'selected' : '') . ">Suzuki</option>

    </select>
</div>
          
                    <!-- Tanggal -->
                    <div class='form-group'>
                        <label for='tanggal_$id'>Tanggal:</label>
                        <input type='date' class='form-control' name='tanggal' value='" . htmlspecialchars($row['Tanggal']) . "' required>
                    </div>
          
                    <!-- Kelas -->
                    <div class='form-group'>
                        <label for='kelas_$id'>Kelas:</label>
                        <input type='text' class='form-control' name='kelas' value='" . htmlspecialchars($row['Kelas']) . "' required>
                    </div>
          
<div class='form-group'>
    <label for='alamat_$id'>Alamat:</label>
    <input type='text' class='form-control' name='alamat' id='alamat_$id' value='" . htmlspecialchars($row['Kabupaten']) . "' readonly>
</div>
                    <!-- Jumlah Siswa dengan Event Listener -->
                    <div class='form-group'>
                        <label for='jumlah_$id'>Jumlah Siswa:</label>
                        <input type='number' class='form-control jumlah' id='jumlahSiswa_$id' name='jumlah' value='" . htmlspecialchars($row['Jumlah_siswa']) . "' required onchange='adjustSiswaInputs($id)'>
                    </div>
          
                    <!-- Kontainer untuk Input Siswa -->
                    <div id='siswaContainer_$id'>";

                    // Tampilkan setiap siswa, perkembangan, dan pelanggaran dalam input form
                    for ($i = 0; $i < $jumlahSiswa; $i++) {
                        echo "
                        <div class='form-group'>
                            <label for='namaSiswa_" . ($i + 1) . "'>Nama Siswa " . ($i + 1) . ":</label>
                            <input type='text' class='form-control' name='namaSiswa" . ($i + 1) . "' id='namaSiswa_" . ($i + 1) . "' value='" . htmlspecialchars($siswa[$i]) . "' required>
                        </div>
                        <div class='form-group'>
                            <label for='perkembangan_" . ($i + 1) . "'>Perkembangan:</label>
                            <input type='text' class='form-control' name='perkembangan" . ($i + 1) . "' id='perkembangan_" . ($i + 1) . "' value='" . htmlspecialchars($perkembangan[$i]) . "' required>
                        </div>
                        <div class='form-group'>
                            <label for='pelanggaran_" . ($i + 1) . "'>Pelanggaran:</label>
                            <input type='text' class='form-control' name='pelanggaran" . ($i + 1) . "' id='pelanggaran_" . ($i + 1) . "' value='" . htmlspecialchars($pelanggaran[$i]) . "' required>
                        </div>
                        ";
                    }

                    echo "
                    </div>
          
                    <!-- Input untuk Gambar -->
                    <div class='form-group'>
                        <label for='gambar_$id'>Ganti Gambar (jika diperlukan):</label>
                        <input type='file' class='form-control-file' id='gambar_$id' name='gambar' accept='image/*'>
                    </div>
                    
                    <!-- Tombol Simpan -->
                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Batal</button>
                    <button type='submit' class='btn btn-primary'>Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>";


            

              $counter++;
          }
      } else {
          echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
      }

        ?>



    </tbody>
<!-- </table> -->



<script>
function confirmDelete() {
    return confirm('Apakah Anda yakin ingin menghapus data ini?');
}
</script>
<!-- Tambahkan jQuery dan Bootstrap JS -->

<?php
// Tutup koneksi
$conn->close();
?>