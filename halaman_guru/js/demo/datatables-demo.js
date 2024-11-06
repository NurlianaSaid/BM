// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();


    // Filter berdasarkan Nama Perusahaan dari dropdown
    // $('#companyFilter').on('change', function() {
    //   var selectedCompany = this.value;
      // Filter kolom 1 yang berisi "Nama Industri"
  //     table.column(1).search(selectedCompany).draw();
  // });
  $(document).ready(function() {
    $('#companyFilter').on('change', function() {
        var selectedCompany = $(this).val();
        $('#dataTable tbody tr').each(function() {
            var rowCompany = $(this).find('td:nth-child(2)').text(); // Ambil nilai dari kolom Nama Industri
            if (selectedCompany === "" || rowCompany === selectedCompany) {
                $(this).show(); // Tampilkan baris jika cocok
            } else {
                $(this).hide(); // Sembunyikan baris jika tidak cocok
            }
        });
    });
});
});
