
// Fungsi untuk toggle tampilan dropdown
document.getElementById("dropdown_toggle").addEventListener("click", function(event) {
event.preventDefault();
const dropdownMenu = document.getElementById("dropdown-menu");
const dropdownIcon = document.getElementById("dropdown-icon");
const isVisible = dropdownMenu.style.display === "block";

// Menampilkan atau menyembunyikan dropdown
dropdownMenu.style.display = isVisible ? "none" : "block";

// Rotasi ikon dropdown saat menu ditampilkan
dropdownIcon.style.transform = isVisible ? "rotate(0deg)" : "rotate(180deg)";
});

// Event listener untuk item dropdown
document.getElementById("jurnal").addEventListener("click", function() {
// alert("Pilih Jurnal");
// document.getElementById("dropdown-menu").style.display = "none";
});

document.getElementById("laporan").addEventListener("click", function() {
alert("Pilih Laporan");
document.getElementById("dropdown-menu").style.display = "none";
});


//disini dibuka


// Fungsi untuk menambahkan kelas "active" pada link yang diklik
document.querySelectorAll(".dropdown-link").forEach(item => {
    item.addEventListener("click", function() {
        // Hapus kelas "active" dari semua link
        document.querySelectorAll(".dropdown-link").forEach(link => {
            link.classList.remove("active");
        });
        
        // Tambahkan kelas "active" pada link yang diklik
        this.classList.add("active");
    });
});
