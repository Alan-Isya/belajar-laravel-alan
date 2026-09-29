<!DOCTYPE html>
<html>
<head>
    <title>Eloquent - Retrieve</title>
</head>
<body>

    <h1>Bagian 2 - Mengambil Data</h1>

    <h2>1. Semua Data - all()</h2>

    @foreach ($users as $user)
        <p>
            ID: {{ $user->id }} |
            Nama: {{ $user->name }} |
            Email: {{ $user->email }}
        </p>
    @endforeach

    <h2>2. Berdasarkan ID - find()</h2>

    @if ($userById)
        <p>
            ID: {{ $userById->id }} |
            Nama: {{ $userById->name }} |
            Email: {{ $userById->email }}
        </p>
    @else
        <p>Data dengan ID 1 tidak ditemukan.</p>
    @endif

    <h2>3. Query Eloquent - where()</h2>

    @foreach ($usersByEmail as $user)
        <p>
            Nama: {{ $user->name }} |
            Email: {{ $user->email }}
        </p>
    @endforeach

    <h2>4. firstOrFail()</h2>

    <p>
        ID: {{ $userFirst->id }} |
        Nama: {{ $userFirst->name }} |
        Email: {{ $userFirst->email }}
    </p>

</body>
</html>
