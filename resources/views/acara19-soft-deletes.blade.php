<!DOCTYPE html>
<html>
<head>
    <title>Acara 19 - Soft Deletes</title>
</head>
<body>

    <h1>Acara 19 - Soft Deletes</h1>

    <h2>1. Delete</h2>
    <p>
        Data John berhasil dilakukan soft delete.
    </p>

    <h2>2. With Trashed</h2>
    <p>
        Nama:
        {{ $withTrashed->name }}
    </p>

    <h2>3. Only Trashed</h2>
    <p>
        Nama:
        {{ $onlyTrashed->name }}
    </p>

    <h2>4. Restore</h2>
    <p>
        Data John berhasil dikembalikan menggunakan restore().
    </p>

</body>
</html>
