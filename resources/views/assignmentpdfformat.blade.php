<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
  
</head>





<body>
    

  
  <div class="text-center">
    
    <img src="{{ URL::asset('image/buet.png') }}" class="buet img-responsive center-block">  

    <h1 class="title text-center">BANGLADESH UNIVERSITY OF ENGINEERING & TECHNOLOGY</h1>

    <div class="sub_header text-center ">
    

    <p >Assignment No:&nbsp{{$data['assignment_no']}}</p>

    <p>Assignment Title</p>

<b><p style="font-size:25px">{{$data['assignment_title']}}</p></b>

    </div>
    

</div>

<div class="course-credentials text-left ">
<p class="course_no">Course Title:&nbsp{{$data['course_title']}}</p>

<p class="course_title">Course Number:&nbsp{{$data['course_no']}}</p>





</div>

<div class="submission">
<p class="submitter">Submitted By, </p>
   <p class="submitter_name">{{$data['submitted_by']}}</p> 
   <p class="submitter_name">{{$data['student_id']}}</p>
    @foreach($partners as $key=>$v)
   
     <p class="submitter_name">{{$v}}</p>


      @endforeach

  <p class="submitter_name">{{$data['level']}}</p>

   <p class="submitter_name">Department:&nbspNAME,BUET</p> 


  </div>      


<div class="taker" >
         <p class="teacher">Submitted To,</p><br/>
        <p class="teacher_name">{{$data['teacher']}},</p><br/>
        <p class="teacher_name">{{$data['designation']}},</p><br/>       
        <p  class="teacher_name">Bangladesh University Of</p><br/>
        
          <p  class="teacher_name">Engineering & Technology. </p>
         


</div>

    
    
       
         

<div class="text-center submission-date">
<p>Date of Submission:&nbsp{{$data['date']}}</p>

</div>

  

 <!-- -->
</body>

</html>