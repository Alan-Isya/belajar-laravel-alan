<!DOCTYPE html>
<html>
<head>
    <title>Eloquent - Create</title>
</head>
<body>

    <h1>Acara 18 - Eloquent ORM</h1>

    <h2>Menambahkan Data</h2>

    <p>
        Data John Doe berhasil ditambahkan menggunakan create().
    </p>

    <p>
        ID: {{ $john->id }}<br>
        Nama: {{ $john->name }}<br>
        Email: {{ $john->email }}
    </p>

    <hr>

    <p>
        Data Jane Doe berhasil ditambahkan menggunakan save().
    </p>

    <p>
        ID: {{ $jane->id }}<br>
        Nama: {{ $jane->name }}<br>
        Email: {{ $jane->email }}
    </p>

</body>
</html>
