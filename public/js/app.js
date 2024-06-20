// nama link

function getQueryParam(param) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

let to = getQueryParam("to");

if (to) {
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("recipient-name").textContent = to;
    });
}

// countdown
simplyCountdown(".simply-countdown", {
    year: 2024,
    month: 6,
    day: 30,
    hours: 8,
    words: {
        days: { singular: "Hari", plural: " Hari" },
        hours: { singular: "Jam", plural: " Jam" },
        minutes: { singular: "Menit", plural: " Menit" },
        seconds: { singular: "Detik", plural: " Detik" },
    },
});

// audio

window.addEventListener("click", function () {
    var audio = document.getElementById("background-music");
    audio.muted = false;
    audio.play();
});

function copyToClipboard(elementId) {
    // Buat elemen input temporer
    var tempInput = document.createElement("input");
    // Ambil teks dari elemen dengan id yang diberikan
    var textToCopy = document.getElementById(elementId).innerText;
    // Set nilai input temporer ke teks yang akan disalin
    tempInput.value = textToCopy;
    // Tambahkan input temporer ke body
    document.body.appendChild(tempInput);
    // Pilih teks dalam input temporer
    tempInput.select();
    // Salin teks yang dipilih
    document.execCommand("copy");
    // Hapus input temporer dari body
    document.body.removeChild(tempInput);
    // Opsional: Tampilkan notifikasi atau pesan konfirmasi
    alert("No. Rekening tersalin: " + textToCopy);
}

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll(".section");

    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.1,
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target);
            }
        });
    }, options);

    sections.forEach((section) => {
        observer.observe(section);
    });
});
