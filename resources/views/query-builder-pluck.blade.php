<!DOCTYPE html>
<html>
<head>
    <title>Query Builder - Pluck</title>
</head>
<body>

    <h1>Bagian 5 - Mengambil Daftar Nilai Kolom</h1>

    <h2>Daftar Nama</h2>

    @foreach ($names as $name)
        <p>{{ $name }}</p>
    @endforeach

    <h2>Email sebagai Key dan Nama sebagai Value</h2>

    @foreach ($users as $email => $name)
        <p>
            Email: {{ $email }} |
            Nama: {{ $name }}
        </p>
    @endforeach

</body>
</html>
