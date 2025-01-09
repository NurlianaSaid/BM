const video = document.getElementById("video");
const canvas = document.getElementById("canvas"); // Pastikan canvas ada di HTML
const ctx = canvas.getContext("2d");

const MODEL_URL = 'models/'; // Path folder model face-api.js
let faceMatcher; // Face matcher untuk membandingkan wajah

const width = 640;
const height = 480;
canvas.width = width;
canvas.height = height;

const startStream = async () => {
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ video: { width, height }, audio: false });
        video.srcObject = stream;
        video.style.display = "block"; // Menampilkan video setelah kamera dinyalakan
        console.log("Stream started.");
    } catch (error) {
        console.error("Gagal memulai kamera:", error);
        alert("Kamera tidak dapat diakses.");
    }
};

// Memuat model face-api.js
const loadModels = async () => {
    try {
        console.log("Loading models...");
        await faceapi.nets.ssdMobilenetv1.loadFromUri(MODEL_URL);
        await faceapi.nets.faceLandmark68Net.loadFromUri(MODEL_URL);
        await faceapi.nets.faceRecognitionNet.loadFromUri(MODEL_URL);
        console.log("Models loaded.");
    } catch (error) {
        console.error("Error loading models:", error);
        alert("Gagal memuat model. Periksa folder 'models'.");
    }
};

// Inisialisasi FaceMatcher dengan foto referensi
const initializeFaceMatcher = async () => {
    try {
        const referenceImage = await faceapi.fetchImage('uploads/foto.jpg'); // Path foto referensi
        const detections = await faceapi.detectSingleFace(referenceImage)
                                        .withFaceLandmarks()
                                        .withFaceDescriptor();

        if (!detections) {
            alert("Wajah referensi tidak terdeteksi!");
            return;
        }

        const labeledDescriptors = new faceapi.LabeledFaceDescriptors('foto.jpg', [detections.descriptor]);
        faceMatcher = new faceapi.FaceMatcher(labeledDescriptors, 0.4); // Toleransi perbandingan
        console.log("FaceMatcher initialized.");
    } catch (error) {
        console.error("Error initializing FaceMatcher:", error);
        alert("Gagal menginisialisasi FaceMatcher.");
    }
};

// Fungsi untuk mendeteksi dan membandingkan wajah
let detectionInterval;

const detectAndCompare = async () => {
    const detections = await faceapi.detectSingleFace(video)
                                    .withFaceLandmarks()
                                    .withFaceDescriptor();

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    if (detections) {
        const bestMatch = faceMatcher.findBestMatch(detections.descriptor);
        if (bestMatch.label === 'foto.jpg') {
            const matchProbability = (1 - bestMatch.distance).toFixed(2);
            console.log(`Wajah cocok dengan probabilitas: ${matchProbability}`);

            // Hentikan deteksi
            clearInterval(detectionInterval);

            // Sembunyikan kamera dan canvas
            video.style.display = 'none';
            canvas.style.display = 'none';

            // Perbarui status
            document.getElementById('attendanceStatus').innerText = 'Hadir';

            // Ubah tombol menjadi hijau dan aktifkan
            const submitBtn = document.getElementById('submit-btn');
            submitBtn.disabled = false;
            submitBtn.style.backgroundColor = 'green';
            submitBtn.style.cursor = 'pointer';

            // Event listener untuk mengarahkan ke halaman lain
            submitBtn.addEventListener('click', () => {
                window.location.href = 'inputjurnal.php'; // Ganti dengan halaman tujuan Anda
            });
        } else {
            console.log("Wajah tidak cocok.");
        }
    } else {
        console.log("Tidak ada wajah yang terdeteksi.");
    }};

// Event listener untuk mendeteksi wajah
video.addEventListener('play', () => {
    detectionInterval = setInterval(detectAndCompare, 1000); // Deteksi wajah setiap 1 detik
});

// Event listener untuk tombol "Hidupkan Kamera"
const startBtn = document.getElementById("startBtn");
startBtn.addEventListener('click', async () => {
    await loadModels();
    await initializeFaceMatcher();
    await startStream();
    startBtn.disabled = true; // Menonaktifkan tombol setelah kamera dinyalakan
    startBtn.innerText = 'Kamera Aktif';
});

// Inisialisasi
(async () => {
    // Anda bisa memulai dengan tombol mati terlebih dahulu
})();
