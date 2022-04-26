<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
 <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Cinzel|Poiret+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/responsive.css">

   <style>


    body{
    background-color:#9b59b6;
        }

   </style>

   <title>Noujontro</title>
</head>
<body>



@if(Auth::check())

@if(Auth::user()->hasRole('Admin'))

@foreach($subjects as $subject)
<form action="/editpostsubject" method="get" >

<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text"  name="subject" value="{{$subject->subject}}">
</div>
<div class="form-group">
  <label for="pwd">Type</label>
  <select  name="type" id="type">
         <option>Theoretical</option>
         <option>Sessional</option>
          

         </select>
</div>

<input type="hidden" name="id" value="{{$subject->id}}">


<input type="submit" value="submit">

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
