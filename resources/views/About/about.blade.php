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
   </head>


   <body>

      <h1 class="text-center">About Us</h1>
       <hr/>

     <div class="container ">
      
      <div class="row ">

       <div class="col-md-6 first" style="display:none;">


         <img src="image/1.png">



       </div>



         <div class="col-md-6 second" style="display:none;">


         <img src="image/2.png">



       </div>


       </div>

      <br/>

        <div class="col-md-6 col-md-offset-3">


         <img src="image/3.png">



       </div>


   

     </div>
<script type="text/javascript"  src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>

<script type="text/javascript"  src="{{ URL::asset('js/jquery-ui.js') }}"></script>

<script>
 $(document).ready(function() {

   $('.first').show('slide', {direction: 'left'}, 1500);
   
   $('.second').show('slide', {direction: 'right'}, 1500);


});
</script>





   </body>




   </html>
