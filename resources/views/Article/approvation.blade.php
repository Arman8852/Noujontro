<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/dropdown.css') }}" />


<title>Namepedia</title>
   </head>

   <body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Namepedia</a>
    </div>
    <ul class="nav navbar-nav">

       <li class="active"><a href="/">Home</a></li>

      



      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Course Material
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="dropdown-submenu">
        <a class="right-caret" tabindex="-1" href="#">Level 1</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/1">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/2">Term 2</a></li>
          </ul>
      </li>
        

    

      <li class="dropdown-submenu">
        <a class="right-caret" tabindex="-1" href="#">Level 2</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/3">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/4">Term 2</a></li>
          </ul>
      </li>


      <li class="dropdown-submenu">
        <a class="right-caret" tabindex="-1" href="#">Level 3</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/5">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/6">Term 2</a></li>
          </ul>
      </li>

      <li class="dropdown-submenu">
        <a class="right-caret" tabindex="-1" href="#">Level 4</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/subject/7">Term 1</a></li>
          <li><a tabindex="-1" href="/subject/8">Term 2</a></li>
          </ul>
      </li>




          
          </ul>
  
      
         </li> 
          

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">NAME 338
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="dropdown-submenu">
        <a class="right-caret" tabindex="-1" href="#">Sea Going Vessel</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/project338/Sea Going General Cargo ">General Cargo</a></li>
          <li><a tabindex="-1" href="/project338/Sea Going Bulk Carrier">Bulk Carrier</a></li>
           <li><a tabindex="-1" href="/project338/Sea Going Oil Tanker">Oil Tanker</a></li>
          
          <li><a tabindex="-1" href="/project338/Offshore Structure">Offshore Structure</a></li>
          <li><a tabindex="-1" href="/project338/Seagoing Tug">Tug</a></li>
          <li><a tabindex="-1" href="/project338/Seagoing Dredger">Dredger</a></li>
         
      </li>
        
</ul>
    

      <li class="dropdown-submenu">
        <a class="right-caret" tabindex="-1" href="#">Inland Vessel</a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="/project338/Inland General Cargo">General Cargo</a></li>
          <li><a tabindex="-1" href="/project338/Inland Bulk Carrier">Bulk Carrier</a></li>
          <li><a tabindex="-1" href="/project338/Inland Oil Tanker">Oil Tanker</a></li>
          <li><a tabindex="-1" href="/project338/Inland Tug">Tug</a></li>
          <li><a tabindex="-1" href="/project338/Inland Dredger">Dredger</a></li>
          </ul>
      </li>


      

      


          
          </ul>
  
      
         </li> 
          
        
     




<li><a href="/namesoftware">Softwares</a></li>


       <li><a href="/rulebook">Rule Book</a></li>

       <li class="active"><a href="/higherstudy">Higher Study</a></li>


    <li><a href="/thesis">Thesis</a></li>


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
      
     @if(Auth::check())


 <li><a href="/dashboard"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>

@endif

@if(!Auth::check())

      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
   


@endif

 </ul>

  </div>
</nav>


@if(Auth::check())

@if(Auth::user()->hasRole('Admin')) 



<h2 class="text-center">Articles About Higher Studies</h2>

   <div class="container">
    @foreach ($articles as $article)
       <p class="text-center">{{$article->author_name }}</p>
 
          
        <div class="text-center">

       <a href="/article/{{$article->article_header}}">{{$article->article_header}}</a>

        </div>
         <div class="text-center">
         @if($article->status =='pending')

          {!! Form::open(array('url' => '/approve/'.$article->id.'/'.$article->author_name.'/'.$article->author_email)) !!}
             
          
          <button type="submit" class="btn btn-success">Approve</button>

           {{Form::close()}}


           

     
           

         @endif

          <a href="/deletearticle/{{$article->id}}">

           <button type="submit" class="btn btn-danger">Delete</button>
      </a>

</div>
       <hr>
    @endforeach
</div>

{{ $articles->links() }}


@else
<h1>You Are Not Authorised</h1>
@endif

@else
<h1>You Are Not Logged In</h1>

@endif



<script type="text/javascript"  src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>   


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript"  src="{{ URL::asset('js/drop.js') }}"></script>



   </body>


   </html>
