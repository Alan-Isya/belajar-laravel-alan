<!DOCTYPE html>
<html>
<head>
    <title>Acara 19 - Eloquent Relationships</title>
</head>
<body>

    <h1>Acara 19 - Eloquent Relationships</h1>

    <h2>1. One to One</h2>

    <p>
        User: {{ $user->name }}
    </p>

    <p>
        Profile: {{ $profile->bio }}
    </p>

    <hr>

    <h2>2. One to Many</h2>

    <p>
        User: {{ $user->name }}
    </p>

    <p>
        Post 1: {{ $post1->title }}
    </p>

    <p>
        Post 2: {{ $post2->title }}
    </p>

    <hr>

    <h2>3. Many to Many</h2>

    @foreach ($user->roles as $role)
        <p>
            Role: {{ $role->name }}
        </p>
    @endforeach

</body>
</html>
