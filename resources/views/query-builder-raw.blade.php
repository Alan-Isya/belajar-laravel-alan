<!DOCTYPE html>
<html>
<head>
    <title>Query Builder - Raw SQL</title>
</head>
<body>

    <h1>Bagian 10 - Query Raw (Raw SQL)</h1>

    <h2>Raw untuk Select</h2>

    <p>
        Total User: {{ $totalUsers->total_users }}
    </p>

    <h2>Raw dalam Where</h2>

    @foreach ($users as $user)
        <p>
            ID: {{ $user->id }} |
            Nama: {{ $user->name }} |
            Email: {{ $user->email }}
        </p>
    @endforeach

</body>
</html>
