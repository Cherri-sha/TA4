<!DOCTYPE html>
<html>
<head>
    <title>Daftar Laporan Banjir</title>
</head>
<body>
    <h2>Daftar Laporan Banjir Kabupaten Bandung</h2>
    <a href="/laporan/create">+ Tambah Laporan Baru</a><br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Lokasi</th>
                <th>Tinggi Genangan</th>
                <th>Status</th>
                <th>Tanggal Kejadian</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $index => $item)
                @php
                    if ($item->tinggi_genangan < 50) {
                        $status = 'Waspada';
                    } elseif ($item->tinggi_genangan <= 100) {
                        $status = 'Siaga';
                    } else {
                        $status = 'Awas';
                    }
                @endphp
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_pelapor }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->tinggi_genangan }} cm</td>
                    <td><b>{{ $status }}</b></td>
                    <td>{{ $item->tanggal_kejadian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>