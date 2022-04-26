<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <title>Noujontro</title>
</head>
<body>

@if(Auth::check())

@if(Auth::user()->hasRole('Admin'))






@foreach($subjects as $subject)
<form action="/deletepostsubject" method="get" >

<input type='text' disabled name='subject' value='{{$subject->subject}}'>

<input type="hidden" name="id" value="{{$subject->id}}">


<input type="submit" value="Delete">

</form>

@endforeach

@else
<h1>You Are Not Authorised</h1>

@endif


@else
<h1>You Are Not Logged In</h1>

@endif

</body>
<html>
