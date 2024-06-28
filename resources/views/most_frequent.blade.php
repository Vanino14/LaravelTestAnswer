<!DOCTYPE html>
<html>
<head>
    <title>Frekuensi Nopol Kendaraan Terbanyak</title>
</head>
<body>
    <h3>Frekuensi Nopol Kendaraan Terbanyak</h3>
    <table border="1">
        <thead>
            <tr>
                <th>NOPOL</th>
                <th>WILAYAH</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{ $kendaraan['NOPOL'] }}</td>
                <td>{{ $kendaraan['WILAYAH'] }}</td>
            </tr>
                   </tbody>
    </table>
</body>
</html>
