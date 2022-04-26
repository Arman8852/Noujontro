<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
   

     <link rel="stylesheet" href="{{ URL::asset('css/books.css') }}" />

     <link rel="stylesheet" href="{{ URL::asset('css/ui.css') }}" />

  </head>


  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">


     <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>


    </button>
      <a class="navbar-brand" href="#">Namepedia</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">

       <li ><a href="/">Home</a></li>

      



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
          <li><a href="/labtoppage">Lab</a></li>
          
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
  </div>
</nav>







        <div class="row ">
          <div class="col-sm-6 col-sm-offset-2 ">
             <div class ="mobile-search">
            <div class="form-group">
             <input type="text" placeholder="Search Books" class="form-control" id="searchbooks">
            </div>

             </div>
            </div>
            
            <div class="col-sm-2">

            <div class="submit-search">
              <div class="form-group">
             <input type="submit" value="Search" class=" form-control">
            </div><!--form-group-->

            </div><!--submit-search-->

            </div>




            </div><!--/.row-->


           <br/>

           <br/>
            
             <br/>

         

      <div class="container ">
      
      <div class="row ">

       @foreach($books as $book)
      
     <div class="col-sm-12 col-md-6 col-xs-12" >
      <div class="thumbnail" style= "background:black;">

     <div class="col-sm-2 col-md-1 col-xs-6 image-container " style="border:1 px black;">
         <img src="image/book.png" class="book-img"  >

         </div>

      <div class="col-sm-6 col-md-6 col-xs-6 col-md-offset-5 col-xs-offset-3" >

        <p class="book">{{$book->name}}</p>
            <p class="author">Author:&nbsp{{$book->author}}</p>

            <p class="edition">Edition:&nbsp{{$book->edition}}</p>
            <a href="{{$book->link}}"><button class="btn btn-danger">Download</button></a>


        </div>
        

      </div>

          <hr/>
       
       </div>



       @endforeach
    
       </div>



    <div class="text-center">{{ $books->links()}}</div>
    
      
     </div>


     
    <script type="text/javascript"  src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>   


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript"  src="{{ URL::asset('js/jquery-ui.js') }}"></script>



  <script type="text/javascript">
$('#searchbooks').autocomplete({
  source:'/getfile',
   minlength:1,
  autoFocus:true,
  
  select:function(e,ui){
   
  var url=ui.item.id;
  if(url != '#') {
                location.href = '/downloadfile/'+url;
            }

  }

});

</script>









  </body>
  </html>
