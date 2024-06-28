<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kendaraan</title>
</head>
<body>
    <h3>Daftar Kendaraan</h3>
    <table border="1">
        <thead>
            <tr>
                <th>NOPOL</th>
                <th>WILAYAH</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kendaraans as $kendaraan)
            <tr>
                <td>{{ $kendaraan['NOPOL'] }}</td>
                <td>{{ $kendaraan['WILAYAH'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
