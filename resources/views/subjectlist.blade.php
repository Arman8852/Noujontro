<!doctype html>
<html lang=''>
<head>
  <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
 

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
background-color:#2ecc71;

}


</style>
   



   <title>Noujontro</title>
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


<div class="section-header text-center" style="margin-top:-35em;">
          <h2 class="title">Subject List of {{$level->levelterm}}</h2>
        </div>

<div class="section-header text-center" >
          <img src="/subject/{{$level->id}}.png"/>
        </div>

      
<div class="section-header text-center">
          <h2 class="title">Theoretical</h2>
        </div>


 <!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row">
  
@foreach($theoreticals as $subject)

        <!-- pricing -->
        <div class="col-sm-4">
          <div class="pricing">
            <div class="price-head">
              <h3 class="price-title">{{$subject->subject}}</h3>
              
            </div>
            
            <div class="price-btn">
              <a href="/subject/file/{{$subject->id}}/Books"><button class="outline-btn">Books</button></a>
            </div>

            <div class="price-btn">
              <a  href="/subject/file/{{$subject->id}}/Class Notes"><button class="outline-btn">Classnotes</button></a>
            </div>

            <div class="price-btn">
              <a  href="/subject/file/{{$subject->id}}/Chotha"><button class="outline-btn">Chotha</button></a>
            </div>

            <div class="price-btn">
             <a  href="/subject/file/{{$subject->id}}/Questions"> <button class="outline-btn">Questions</button></a>
            </div>

          </div>
        </div>
        <!-- /pricing -->

@endforeach


     </div>
         <!-- !Row -->

              </div>

           <!-- !Container -->


<!-- /Theory -->


<br/><br/>
<div class="section-header text-center">
          <h2 class="title">Sessional</h2>
        </div>



<!-- Container -->
    <div class="container">

      <!-- Row -->
      <div class="row justify-content-md-center">

@foreach( $sessionals as $subject)

<div class="col-sm-6 col-md-10 col-md-offset-1 text-center" style="margin-top:2em;">

<a href="/subject/file/{{$subject->id}}/Sessional Material"><button class="btn btn-success" type="button" >
    {{$subject->subject}} </button></a>
</div>

@endforeach
      </div>
<!-- !Row -->

    </div>
  
<!-- !Container -->
<br/><br/><br/><br/>
@include('Partial.footer')


<!-- jQuery Plugins -->
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>

  




</body>

</html>