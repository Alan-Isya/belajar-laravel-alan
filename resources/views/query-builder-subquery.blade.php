<!DOCTYPE html>
<html>
<head>
    <title>Query Builder - Subquery</title>
</head>
<body>

    <h1>Bagian 9 - Subquery</h1>

    @foreach ($users as $user)
        <p>
            Nama: {{ $user->name }} |
            Jumlah Pesanan: {{ $user->order_count }}
        </p>
    @endforeach

</body>
</html>
