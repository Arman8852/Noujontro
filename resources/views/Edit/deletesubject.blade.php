<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

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

<div class="container">
<div class="row justify-content-md-center ">


<div class="col-lg-3 col-sm-12 text-center">

<div class=" dropdown dropdown-subject" >
   
   <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:3em;">
    Level-1  </button>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        
    <a class="dropdown-item" href="/deletesubject/1"><b>Term-1</b></a>
    <a class="dropdown-item" href="/deletesubject/2"><b>Term-2</b></a>
    

 </div>


</div>

</div>


<div class="col-lg-3 col-sm-12 text-center">

<div class=" dropdown dropdown-subject" >
   
   <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:3em;">
    Level-2 </button>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        
    <a class="dropdown-item" href="/deletesubject/3"><b>Term-1</b></a>
    <a class="dropdown-item" href="/deletesubject/4"><b>Term-2</b></a>
    

 </div>


</div>

</div>


<div class="col-lg-3 col-sm-12 text-center">

<div class=" dropdown dropdown-subject" >
   
   <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:3em;">
    Level-3  </button>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        
    <a class="dropdown-item" href="/deletesubject/5"><b>Term-1</b></a>
    <a class="dropdown-item" href="/deletesubject/6"><b>Term-2</b></a>
    

 </div>


</div>

</div>


<div class="col-lg-3 col-sm-12 text-center">

<div class=" dropdown dropdown-subject" >
   
   <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top:3em;">
    Level-4  </button>

       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    deletesubject class="dropdown-item" href="/deletesubject/7"><b>Term-1</b></a>
    <a class="dropdown-item" href="/deletesubject/8"><b>Term-2</b></a>
    

 </div>


</div>

</div>


</div>


 
</div>







@else
<h1>You Are Not Authorised</h1>

@endif


@else
<h1>You Are Not Logged In</h1>

@endif

  


   
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript"  src="{{ URL::asset('js/drop.js') }}"></script>


</body>
<html>
