<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta property="og:title"              content="{{$subject->subject->subject}} {{$type}}" />


    

   
  <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Josefin+Slab|Playfair+Display+SC" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
   
       
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" />

 

  <!-- Owl Carousel -->
  <link type="text/css" rel="stylesheet" href="/css/owl.carousel.css" />
  <link type="text/css" rel="stylesheet" href="/css/owl.theme.default.css" />

  <!-- Magnific Popup -->
  <link type="text/css" rel="stylesheet" href="/css/magnific-popup.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="/css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="/css/style.css" />

  <link rel="stylesheet" href="{{ URL::asset('css/file.css') }}" />



      <title>Course Files</title>     
         
</head>


  <body>
  
 
<header id="home">
    <!-- Background Image -->
    
    <!-- /Background Image -->

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a href="/">
              <img class="logo" src="/img/logo.png" alt="logo">
              <img class="logo-alt" src="/img/logo-alt.png" alt="logo">
            </a>
          </div>
          <!-- /Logo -->

          <!-- Collapse nav button -->
          <div class="nav-collapse">
            <span></span>
          </div>
          <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
          <li class="has-dropdown"><a href="#home">Course Material</a>
                    <ul class="second-nav dropdown">
                <li class="has-dropdown"><a href="#home">Level 1</a>
                  <ul class="dropdown">
                    <li ><a href="/subject/1">Term 1</a></li>
                    <li ><a href="/subject/2">Term 2</a></li>
                  </ul>
                </li>
                <li class="has-dropdown"><a href="#home">Level 2</a>
                  <ul class="dropdown">
                    <li><a href="/subject/3">Term 1</a></li>
                    <li><a href="/subject/4">Term 2</a>
                      
                    </li>
                  </ul>
                </li>
                <li class="has-dropdown"><a href="#home">Level 3</a>
                  <ul class="dropdown">
                    <li><a href="/subject/5">Term 1</a></li>
                    <li><a href="/subject/6">Term 2</a></li>
                  </ul></li>
                <li class="has-dropdown"><a href="#home">Level 4</a>
                  <ul class="dropdown">
                    <li><a href="/subject/7">Term 1</a></li>
                    <li><a href="/subject/8">Term 2</a></li>
                  </ul>
                </li>
              </ul>

          </li>


           <li class="has-dropdown"><a href="#">Name 338</a>
              <ul class="dropdown">
                <li class="has-dropdown"><a href="#">Sea Going Vessel</a>
                  <ul class="dropdown">
                    <li><a href="/project338/Sea Going General Cargo">General Cargo</a></li>
                    <li><a href="/project338/Sea Going Bulk Carrier">Bulk Carrier</a></li>
                    <li><a href="/project338/Sea Going Oil Tanker">Oil Tanker</a></li>
                    <li><a href="/project338/Sea Going Container Vessel">Container Vessel</a></li>
                    <li><a href="/project338/Offshore Structure">Offshore Structure</a></li>

                    <li><a href="/project338/Sea Going Tug">Tug</a></li>
                    <li><a href="/project338/Sea Going Dredger">Dredger</a></li>
                  </ul>
                </li>
                <li class="has-dropdown"><a href="#">Inland Vessel</a>
                  <ul class="dropdown">
                    <li><a href="/project338/Inland General Cargo">General Cargo</a></li>
                    <li><a href="/project338/Inland Bulk Carrier">Bulk Carrier</a></li>
                    <li><a href="/project338/Inland Oil Tanker">Oil Tanker</a></li>
                    <li><a href="/project338/Inland Container Vessel">Container Vessel</a></li>
                    <li><a href="/project338/Inland Tug">Tug</a></li>
                    <li><a href="/project338/Inland Dredger">Dredger</a></li>
                  </ul>
                </li>
              </ul>
            </li>



           <li><a href="/namebooks">Online Library</a></li>
          <li><a href="/namesoftware">Softwares</a></li>
            <li><a href="/rulebook">RuleBook</a></li>
            
            <li><a href="/higherstudy">Higher Study</a></li>
          
          <li class="has-dropdown"><a href="#">Top Page</a>
            <ul class="dropdown">
              <li><a href="/labtoppage">Sessional</a></li>
              <li><a href="/toppage">Assignment</a></li>
            </ul>
          </li>
          <li><a href="/login">Login</a></li>
        </ul>
        <!-- /Main navigation -->

      </div>
    </nav>
    <!-- /Nav -->

    

  </header>
  <!-- /Header -->
<!--Theory-->

<div class="section-header text-center" style="margin-top:-35em; " >
          <h2 class="title"><b>{{$type}}</b> of {{$subject->subject->subject}}</h2>
        </div>


<div class="section-header text-center" >
          <h2 class="title">No of Files:&nbsp<b>{{$count}}</b></h2>
        </div>




        

         

      <div class="container ">
      
      <div class="row justify-content-sm-center ">
@foreach($files as $file)
     
    <!-- pricing -->
        <div class="col-sm-4 text-center">
          <div class="pricing">
            <div class="price-head">
              <span class="price-title">{{$type}}</span>
              <div >
                <img src="/image/{{$file->extension}}.png"  class="file-image" >
              </div>
            </div>
            <ul class="price-content">
              <li>
                <p class="file-name"
                ><b>{{$file->file}}</b></p>
              </li>
              
            </ul>
            <div class="price-btn">
              <a href="/downloadfile/{{$file->fileid}}"><button class="outline-btn">Download File</button></a>
            </div>
          </div>
        </div>
            
           
          <!-- /pricing -->

            @endforeach

        </div>
       
                   </div>
             




@include('Partial.footer')
     
<!-- jQuery Plugins -->
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>


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
