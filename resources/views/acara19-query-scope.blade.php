<!DOCTYPE html>
<html>
<head>
    <title>Acara 19 - Query Scopes</title>
</head>
<body>

    <h1>Acara 19 - Query Scopes</h1>

    <h2>Local Scope: active()</h2>

    @foreach ($users as $user)
        <p>
            Nama: {{ $user->name }} |
            Status: {{ $user->status }}
        </p>
    @endforeach

</body>
</html>
