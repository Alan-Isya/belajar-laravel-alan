<!DOCTYPE html>
<html>
<head>
    <title>Query Builder - Join</title>
</head>
<body>

    <h1>Bagian 7 - Join</h1>

    <h2>Inner Join</h2>

    @foreach ($users as $user)
        <p>
            Nama: {{ $user->name }} |
            Total Pesanan: Rp{{ number_format($user->total_price, 0, ',', '.') }}
        </p>
    @endforeach

    <h2>Left Join</h2>

    @foreach ($leftJoinUsers as $user)
        <p>
            Nama: {{ $user->name }} |

            @if ($user->total_price !== null)
                Total Pesanan: Rp{{ number_format($user->total_price, 0, ',', '.') }}
            @else
                Belum memiliki pesanan
            @endif
        </p>
    @endforeach

</body>
</html>
