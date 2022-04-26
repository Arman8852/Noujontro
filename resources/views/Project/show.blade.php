<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
 

   <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="/css/responsive.css">

<title>Noujontro</title>
</head>
<body>





  <div class="container">

  <div class="row justify-content-md-center">

    <h1 class="text-center">Project Files of {{$type}}</h1>
          
         @foreach($files as $file)

         <div class="col-lg-6 col-sm-12">
   
           <a href="{{$file->location}}" class="text-center"><button class="btn btn-primary text-center" type="button">{{$file->file}}</button></a>
           <br/><br/><br/>

             </div>


         @endforeach

      </div>     
        

</div>




<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/popper.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.slicknav.min.js"></script>


<script type="text/javascript" src="/js/main.js"></script>


 

</body>

</html>