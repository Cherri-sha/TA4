<!DOCTYPE html>
<html>
<head>
    <title>Form Pelaporan Banjir</title>
</head>
<body>
    <h2>Form Pelaporan Banjir BPBD</h2>

    @if(session('success'))
        <div style="color: green; padding: 10px; border: 1px solid green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <form action="/laporan" method="POST">
        @csrf
        <label>Nama Pelapor:</label><br>
        <input type="text" name="nama_pelapor" required><br><br>

        <label>Lokasi (Kecamatan):</label><br>
        <input type="text" name="lokasi" required><br><br>

        <label>Tinggi Genangan (cm):</label><br>
        <input type="number" name="tinggi_genangan" required><br><br>

        <label>Tanggal Kejadian:</label><br>
        <input type="date" name="tanggal_kejadian" required><br><br>

        <button type="submit">Kirim Laporan</button>
    </form>
    <br>
    <a href="/laporan">Lihat Daftar Laporan</a>
</body>
</html>