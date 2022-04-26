<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

  <link rel="stylesheet" href="{{ URL::asset('css/dropdown.css') }}" />
  
 <link rel="stylesheet" href="{{ URL::asset('css/pdfform.css') }}" />
<!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
 <title>Namepedia</title>



</head>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Namepedia</a>
    </div>
    <ul class="nav navbar-nav">

       <li ><a href="/">Home</a></li>

      



      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Course Material
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="dropdown-submenu">
        <a class="right-caret" tabindex="-1" href="/#">Level 1</a>
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

        <li><a href="/higherstudy">Higher Study</a></li>


    <li><a href="/thesis">Thesis</a></li>


      <li class="dropdown active" >
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





<div class="container">
  {!! Form::open(array('url' => '/labcredentials')) !!}
    
    <h2>Create Your Top page</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Experiment No</label>
          <input type="text" required="true" class="form-control" name="experiment_no" placeholder="Experiment No">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="first">Name of Experiment</label>
          <input type="text" required="true" class="form-control" name="experiment_title" placeholder="Name of The Experiment">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
         <label for="first">Course Number</label>
          <input type="text" required="true" class="form-control" name="course_no" placeholder="Course Number">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
           <label for="first">Course Title</label>
          <input type="text"  required="true" class="form-control" name="course_title" placeholder="Course Title">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
         <label for="first">Your Name</label>
          <input type="text" required="true" class="form-control" name="submitted_by" placeholder="ex:Mohua Das">
        </div>

       


</div>
         <div class="col-md-6">

        <div class="form-group">
           <label for="first">Your Student ID</label>
          <input type="text" required="true" class="form-control" name="st_id" placeholder="ex:S201312036">
        </div>
      </div>

<div class="col-md-6">

<div class="form-group">
  <label for="level_term">Level-Term</label>
  <select class="form-control" name="lt" id="lt">
    <option>Level:&nbsp1,Term:&nbsp1</option>
    <option>Level:&nbsp1,Term:&nbsp2</option>
    <option>Level:&nbsp2,Term:&nbsp1</option>
    <option>Level:&nbsp2,Term:&nbsp2</option>
    <option>Level:&nbsp3,Term:&nbsp1</option>
    <option>Level:&nbsp3,Term:&nbsp2</option>
    <option>Level:&nbsp4,Term:&nbsp1</option>
    <option>Level:&nbsp4,Term:&nbsp2</option>
  </select>
</div>

</div>


<div class="col-md-6">

        <div class="form-group">
         <label for="first">Lab Partners Credentials</label>
          <input type="text" class="form-control" name="partners" placeholder="ex:Prantik Bala Protick,S201312002,Robiul Hossain,S201312025">
        </div>








</div>




</div>


 <div class="row">



 <div class="col-md-6">

<div class="form-group">
  <label for="section">Section</label>
  <select class="form-control" name="sec" id="sec">
    <option>A1</option>
    <option>A2</option>
    
  </select>
</div>

</div>
      
<div class="col-md-6">

<div class="form-group">
  <label for="Group">Group</label>
 <input type="text" required="true" class="form-control" name="group" placeholder="ex:1,2,3,4">
</div>

</div>


        

</div>









<div class="row">






<div class="col-md-6">

        <div class="form-group">

        <label for="first">Date Of Performance</label>

<div class="input-group date" data-provide="datepicker" data-date-format='dd-mm-yyyy'>
    <input type="text" name="date_p" required="true"  placeholder="DD/MM/YYYY" class="form-control">
    <div class="input-group-addon">
          <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
    </div>
</div>

</div>

</div>


<div class="col-md-6">

    <div class="form-group">

        <label for="first">Date Of Submission</label>

<div class="input-group date" data-provide="datepicker" data-date-format='dd-mm-yyyy'>
    <input type="text" name="date_s" required="true"  placeholder="DD/MM/YYYY" class="form-control">
    <div class="input-group-addon">
          <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
    </div>
</div>

</div>   







</div>

</div><!---row-->


<div class="row">
<div class="col-md-6">

<button type="submit" class="text-center btn btn-primary">Submit</button>


</div>

</div>




      <!--  col-md-6   -->
<!--  col-md-6   -->
 

    </div>
    <!--  row   -->

 {!! Form::close() !!}
</div>



</body>




<footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>


   <script type="text/javascript"  src="{{ URL::asset('js/jquery.js') }}"></script>
  
  <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
 

<script>


$('.datepicker').datepicker({
     dateFormat: 'yyyy-mm-dd'
    
});
</script>



<h2 class="text-center">Please Be Advised,You should fill up your lab partners credentials as the instruction says.Otherwise,it will be resulted in an error.</h2>



<h3 class="text-center">Made With <span style="color:red;" class="glyphicon glyphicon-heart"></span> by Wrikkho13</h3>



</footer>


<script type="text/javascript"  src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>   


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript"  src="{{ URL::asset('js/drop.js') }}"></script>


</html>



