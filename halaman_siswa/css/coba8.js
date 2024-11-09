function displayFileName() {
    const fileInput = document.getElementById('fileInput');
    const fileDisplayArea = document.getElementById('fileDisplayArea');

    // Display selected file name if a file is chosen
    if (fileInput.files.length > 0) {
        const fileName = fileInput.files[0].name;
        fileDisplayArea.innerHTML = `<i class="fas fa-file-alt"></i> ${fileName}`;
    }
}

function clearFile() {
    const fileInput = document.getElementById('fileInput');
    const fileDisplayArea = document.getElementById('fileDisplayArea');
    
    // Clear the file input and reset the display text
    fileInput.value = ""; // Clear the file input
    fileDisplayArea.innerHTML = `<i class="fas fa-file-alt"></i> Contoh Laporan`; // Reset display text
}
