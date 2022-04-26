<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <meta property="og:type"               content="article" />
     <meta property="og:title"              content="{{$article->article_header}}" />

    <meta property="og:description" content="{{$article->header}}">

   <meta name="article:author" content="{{$article->author_name}}">

<title>{{$article->article_header}}</title>

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


    <style>
    body{
    

    font-color: #0e0e10;

        }

    
   </style>
  

    

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
           
            <li><a href="#higherstudy">Higher Study</a></li>
          
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


<div> 

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=837274109779490";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<br/><br/><br/>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12" id="higherstudy">

          <!-- Title -->
          <h2 class="mt-4">{{$article->article_header}}</h2>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">{{$article->author_name}}</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on  {{ date('F d, Y', strtotime($article->created_at)) }}</p>

          <hr>

         
       

          <!-- Post Content -->
          <p class="lead" style="line-height:10px; font-size:30px;">{!!$article->article_body!!}</p>

         
          <hr>

          <!-- Comments Form -->
         

          <!-- Single Comment -->
         
       

        </div>

        <!-- Sidebar Widgets Column -->
        

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <div class="fb-comments" data-href="http://namepedia.herokuapp.com/article/{{$article->id}}" data-width="100%" data-numposts="5"></div> 


    @include('Partial.footer')   

    <!-- Bootstrap core JavaScript -->

<!-- jQuery Plugins -->
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>

    

  </body>

</html>
