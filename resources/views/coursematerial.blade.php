<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   

    <link rel="stylesheet" href="{{ URL::asset('css/dropdown.css') }}" />
  
   
   <title>Noujontro</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Namepedia</a>
    </div>
    <ul class="nav navbar-nav">

       <li ><a href="/">Home</a></li>

      <li class="active"><a href="/coursematerials">Course Materials</a></li>

      <li><a href="/namesoftware">Softwares</a></li>
      


      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Top Page
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/toppage">Assignment</a></li>
          <li><a href="/labtoppage"">Lab</a></li>
          
        </ul>
      </li>
      
    </ul>

   <ul class="nav navbar-nav navbar-right">
      
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>



  </div>
</nav>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



<div class="container container-table">
    <div class="row vertical-center-row">
 

    <div class="col-xs-4 col-xs-offset-5"> 
                                       
  <div class="dropdown">
    <button class="btn btn-default dropdown-toggle btn-primary" type="button" data-toggle="dropdown">Subject List
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Level 1</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/1">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/2">Term 2</a></li>
          </ul>
      </li>
        

    

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Level 2</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/3">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/4">Term 2</a></li>
          </ul>
      </li>


      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Level 3</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/5">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/6">Term 2</a></li>
          </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">Level 4</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/7">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/8">Term 2</a></li>
          </ul>
      </li>


    </ul>
  </div>
</div>

</div>

   </div>
   
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript"  src="{{ URL::asset('js/drop.js') }}"></script>


</body>
<html>
