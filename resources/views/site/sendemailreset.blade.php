<h1>Hello {{$user->name}}</h1>
<p>
    Please click the password reset.
    <a href="{{route('/lay-lai-mat-khau' .$user->email .'/'.$code)}}">Reset</a>
</p>