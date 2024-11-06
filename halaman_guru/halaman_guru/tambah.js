
document.getElementById('jumlah').addEventListener('input', function() {
    const jumlahSiswa = parseInt(this.value);
    const siswaContainer = document.getElementById('siswaContainer');

    // Bersihkan input sebelumnya
    siswaContainer.innerHTML = '';

    // Tambahkan input Nama Siswa, Perkembangan, dan Pelanggaran untuk setiap siswa
    for (let i = 1; i <= jumlahSiswa; i++) {
        // Grup input untuk satu siswa
        const siswaGroup = document.createElement('div');
        siswaGroup.className = 'siswa-group';

        // Input Nama Siswa
        const namaLabel = document.createElement('label');
        namaLabel.textContent = `Nama Siswa ${i} :`;
        const namaInput = document.createElement('input');
        namaInput.type = 'text';
        namaInput.className = 'form-control';
        namaInput.id = `namaSiswa${i}`;
        namaInput.name = `namaSiswa${i}`;
        namaInput.required = true;

        // Input Perkembangan Siswa
        const perkembanganLabel = document.createElement('label');
        perkembanganLabel.textContent = `Catatan Perkembangan dan Pencapaian Kompetensi Siswa ${i} :`;
        const perkembanganInput = document.createElement('textarea');
        perkembanganInput.className = 'form-control';
        perkembanganInput.id = `perkembangan${i}`;
        perkembanganInput.name = `perkembangan${i}`;
        perkembanganInput.rows = 3;
        perkembanganInput.required = true;

        // Input Pelanggaran Siswa
        const pelanggaranLabel = document.createElement('label');
        pelanggaranLabel.textContent = `Catatan Pelanggaran dan Sanksi Yang Diberikan untuk Siswa ${i} :`;
        const pelanggaranInput = document.createElement('textarea');
        pelanggaranInput.className = 'form-control';
        pelanggaranInput.id = `pelanggaran${i}`;
        pelanggaranInput.name = `pelanggaran${i}`;
        pelanggaranInput.rows = 3;
        pelanggaranInput.required = true;

        // Menambahkan elemen-elemen ke dalam grup siswa
        siswaGroup.appendChild(namaLabel);
        siswaGroup.appendChild(namaInput);
        siswaGroup.appendChild(perkembanganLabel);
        siswaGroup.appendChild(perkembanganInput);
        siswaGroup.appendChild(pelanggaranLabel);
        siswaGroup.appendChild(pelanggaranInput);

        // Menambahkan grup siswa ke dalam container
        siswaContainer.appendChild(siswaGroup);
    }
});




// alamat otomatis
