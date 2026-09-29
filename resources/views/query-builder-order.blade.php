<!DOCTYPE html>
<html>
<head>
    <title>Query Builder - Order</title>
</head>
<body>

    <h1>Bagian 8 - Pengurutan, Limit, dan Offset</h1>

    <h2>1. Order By</h2>

    @foreach ($orderedUsers as $user)
        <p>
            ID: {{ $user->id }} |
            Nama: {{ $user->name }} |
            Email: {{ $user->email }}
        </p>
    @endforeach

    <h2>2. Limit</h2>

    @foreach ($limitedUsers as $user)
        <p>
            ID: {{ $user->id }} |
            Nama: {{ $user->name }}
        </p>
    @endforeach

    <h2>3. Offset + Limit</h2>

    @foreach ($offsetUsers as $user)
        <p>
            ID: {{ $user->id }} |
            Nama: {{ $user->name }}
        </p>
    @endforeach

</body>
</html>
