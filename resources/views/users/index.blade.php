<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
<div>
    @inject('userPresenter', 'MyBlog\Presenters\UserPresenter')
    @foreach($users as $user)
        <div>
            <h2>{{ $user->name }}</h2>
            {!! $userPresenter->showEmail($user) !!}
        </div>
        <hr>
    @endforeach
</div>
</body>
</html>