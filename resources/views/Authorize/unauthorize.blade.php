<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

   <p></p>
   
   <title>Namepedia</title>
</head>
<body>
@if(Auth::check())
@if(Auth::user()->hasRole('Admin'))

<h1>Unauthorise Users</h1>


@foreach($users as $user)
@foreach($user->roles as $role)

{!! Form::open(array('url' => '/unauthorizeusers')) !!}
<ul>
<li>{{$user->name}}</li>
<li>{{$role->name}}</li>
</ul>
<input type="hidden"  name="user" value="{{$user->name}}">
<input type="hidden" name="role" value="{{$role->name}}">

<input type="submit" value="unauthorize">

{{Form::close()}}

@endforeach

@endforeach

<h1>Delete Users</h1>


@foreach($users as $user)

<ul>
<li>{{$user->name}}</li>
</ul>

{!! Form::open(array('url' =>'/deleteuser/'.$user->id)) !!}

<input type="submit" value="Delete">

{{Form::close()}}

@endforeach





@else
<h1>You Are Not Authorised</h1>
@endif

@else
<h1>You Are Not Logged In</h1>

@endif






</body>

</html>