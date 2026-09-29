<!DOCTYPE html>
<html>
<head>
    <title>Acara 19 - Mass Assignment Protection</title>
</head>
<body>

    <h1>Acara 19 - Mass Assignment Protection</h1>

    <h2>Mass Assignment dengan $fillable</h2>

    <p>Nama: {{ $user->name }}</p>
    <p>First Name: {{ $user->first_name }}</p>
    <p>Last Name: {{ $user->last_name }}</p>
    <p>Status: {{ $user->status }}</p>
    <p>Role: {{ $user->role }}</p>
    <p>Age: {{ $user->age }}</p>

    <hr>

    <p>
        Data berhasil diisi menggunakan mass assignment
        karena field telah ditentukan dalam $fillable.
    </p>

</body>
</html>
