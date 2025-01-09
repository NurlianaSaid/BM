<form action="proses_input_jurnal.php" method="POST">
    <div>
        <label for="tanggal">Tanggal</label>
        <!-- Tanggal otomatis di-set dengan PHP -->
        <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>" required readonly>
    </div>
    <div>
        <label for="kegiatan">Kegiatan</label>
        <input type="text" id="kegiatan" name="kegiatan" required>
    </div>
    <div>
        <label for="uraian">Uraian</label>
        <textarea id="uraian" name="uraian" required></textarea>
    </div>
    <div>
        <label for="status">Status</label>
        <select id="status" name="status" required>
            <option value="terbaca">Terbaca</option>
            <option value="belum terbaca">Belum Terbaca</option>
        </select>
    </div>
    <div>
        <button type="submit">Simpan</button>
        <button type="reset">Batal</button>
    </div>

                        </form>