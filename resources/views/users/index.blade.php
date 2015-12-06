<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<div>
    @inject('userRender', 'MyBlog\Renders\UserRender')
    @foreach($users as $user)
        <div>
            <h2>{{ $user->name }}</h2>
            @if ($userRender->doesShowEmail($user))
                <h2>{{ $user->email }}</h2>
            @endif
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>