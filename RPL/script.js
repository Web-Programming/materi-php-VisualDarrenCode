// 1. Simulasi Login (UC-2)
document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
    document.getElementById('login-page').style.display = 'none';
    document.getElementById('main-layout').style.display = 'block';
});

// 2. Navigasi Aktor (Simulasi Role-Based Access)
function showView(viewId) {
    document.querySelectorAll('.view').forEach(v => v.style.display = 'none');
    document.getElementById('view-' + viewId).style.display = 'block';
}

// 3. Kalkulator Estimasi Harga (UC-5)
const hargaKatalog = { plastik: 2000, kertas: 1500, logam: 5000 }; // Data dari UC-13

function hitungHarga() {
    const kategori = document.getElementById('kategori').value;
    const berat = parseFloat(document.getElementById('berat').value) || 0;
    const total = hargaKatalog[kategori] * berat;

    document.getElementById('hasil-harga').innerText = `Rp${total.toLocaleString('id-ID')}`;
}

// 4. Handle Booking (UC-4)
document.getElementById('form-booking').addEventListener('submit', function(e) {
    e.preventDefault();
    alert("Pesanan Berhasil! Status: Menunggu Penjemputan");
});