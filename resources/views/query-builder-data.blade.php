<!DOCTYPE html>
<html>
<head>
    <title>Query Builder - Mengambil Data</title>
</head>
<body>

    <h1>Bagian 2 - Mengambil Data Dari Database</h1>

    <h2>1. Semua Data User - get()</h2>

    @foreach ($users as $item)
        <p>
            ID: {{ $item->id }} |
            Nama: {{ $item->name }} |
            Email: {{ $item->email }}
        </p>
    @endforeach

    <h2>2. Satu Data - first() dan where()</h2>

    @if ($user)
        <p>
            ID: {{ $user->id }} |
            Nama: {{ $user->name }} |
            Email: {{ $user->email }}
        </p>
    @else
        <p>Data tidak ditemukan.</p>
    @endif

    <h2>3. Kolom Tertentu - select()</h2>

    @foreach ($selectedUsers as $item)
        <p>
            ID: {{ $item->id }} |
            Nama: {{ $item->name }} |
            Email: {{ $item->email }}
        </p>
    @endforeach

</body>
</html>
