<!DOCTYPE html>
<html>
<head>
    <title>Acara 20 - Form and Validation</title>
</head>
<body>

    <h1>Acara 20 - Form and Validation</h1>

    @if ($errors->any())
        <div>
            <h3>Terjadi Kesalahan:</h3>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/acara20/submit" method="POST">
        @csrf

        <label for="name">Nama:</label><br>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name') }}"
        >
        <br><br>

        <label for="email">Email:</label><br>
        <input
            type="text"
            name="email"
            id="email"
            value="{{ old('email') }}"
        >
        <br><br>

        <label for="password">Password:</label><br>
        <input
            type="password"
            name="password"
            id="password"
        >
        <br><br>

        <label for="password_confirmation">Konfirmasi Password:</label><br>
        <input
            type="password"
            name="password_confirmation"
            id="password_confirmation"
        >
        <br><br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>
