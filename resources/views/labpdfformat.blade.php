<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

  <link rel="stylesheet" href="{{ URL::asset('/css/pdfform.css') }}" />
  
</head>





<body>
    

  
   <div class="container">

  <div class="row">

  <div class="col-md-12">
  <div class="text-center">
    
    <img src="{{ URL::asset('image/rsz_buet.png') }}"  class="buet-logo img-responsive center-block">  

    <h1 class="title text-center">BANGLADESH UNIVERSITY OF ENGINEERING & TECHNOLOGY</h1>

   

</div>

</div>

<div class="col-md-12">
<div class="experiment-credentials  ">

<p class="experiment_no text-center">Experiment No:&nbsp&nbsp{{$data['experiment_no']}}</p>

<p class="experiment_title text-center">Experiment Title:</p>
<p class="title-description">&nbsp{{$data['experiment_title']}}</p>





</div>
</div>
<br/>

<div class="col-md-6">
<div class="course-credentials text-left ">
<p class="experiment_no">Course Number:&nbsp{{$data['course_no']}}</p>

<p class="experiment_title">Course Title:&nbsp{{$data['course_title']}}</p>





</div>

<div class="submission">
<p class="submitter">Group Partners: </p>
   
    @foreach($partners as $key=>$v)
   
     <p class="submitter_name">{{$v}}</p>


      @endforeach

  
</div>   


<div class="date-submission">
<p class="submitter">Date Of Performance:&nbsp{{$data['date_p']}}</p>
<p class="submitter">Date Of Submission:&nbsp{{$data['date_s']}}</p>
   
   </div>      

</div>


<div class="col-md-6">

<div class="sessional-credential" >
         <p class="teacher">Name:&nbsp{{$data['submitted_by']}}</p>
        <p class="teacher_name">Student ID:&nbsp{{$data['student_id']}}</p>
        <p class="teacher_name">Section:&nbsp{{$data['section']}}</p>     
        <p  class="teacher_name">Group No:&nbsp{{$data['group']}}</p>
        
          <p class="teacher_name">{{$data['level']}}</p>
        

        <p  class="department_1">Department of Naval Architecture &</p>

       <p class="department_2">Marine Engineering,</p>

       <p  class="uni_1">Bangladesh Univesrsity Of Engineering & Technology </p>

       

       
         




         


</div>

    
   </div> 
       
         


</div>

</div>

 <!-- -->
</body>

</html>