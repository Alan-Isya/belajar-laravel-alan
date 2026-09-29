<!DOCTYPE html>
<html>
<head>
    <title>Eloquent - Update</title>
</head>
<body>

    <h1>Bagian 3 - Memperbarui Data</h1>

    <h2>Menggunakan update()</h2>

    <p>
        ID: {{ $john->id }}<br>
        Nama: {{ $john->name }}<br>
        Email: {{ $john->email }}
    </p>

    <h2>Menggunakan save()</h2>

    @if ($jane)
        <p>
            ID: {{ $jane->id }}<br>
            Nama: {{ $jane->name }}<br>
            Email: {{ $jane->email }}
        </p>
    @endif

</body>
</html>
