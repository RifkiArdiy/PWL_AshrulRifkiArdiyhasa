<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $user->name }}'s Profile</title>
</head>
<body>
    <h1>Profile of {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Bio: {{ $user->bio ?? 'No bio available' }}</p>
</body>
</html>
