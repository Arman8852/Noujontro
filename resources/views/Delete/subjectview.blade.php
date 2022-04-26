<!doctype html>
<html lang=''>
<head>
  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
 <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Cinzel|Poiret+One" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/responsive.css">

   



   <title>Noujontro</title>
</head>
<body>


<div class="container">
<div class="row justify-content-md-center ">

@foreach($subjects as $subject)
<div class="col-lg-3 col-sm-12 text-center">

<a href="/getfilefordelete/{{$subject->id}}"><button type="btn btn primary">{{$subject->subject}}</button></a>


</div>

@endforeach


          </div>

                      </div>


</body>



<script type="text/javascript" src="/js/jquery.min.js"></script>

<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

</html>