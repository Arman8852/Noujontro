<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Noujontro</title>

      

        
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

          
          {!! Html::script('js/jquery-3.2.1.min.js'); !!}

         

      

        </head>


 <body>

 





@if(Auth::check())

@if(Auth::user()->hasRole('Admin') ||Auth::user()->hasRole('Moderator') )





<section class="select-product">

 <div class="container">
         

         <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          
          <label for="title">Select Term:</label>
                <select name="term" class="form-control" >
                    <option value="">--- Select level ---</option>
                    
                   @foreach ($terms as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach



                </select>
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <form action="/google" method="post" enctype="multipart/form-data">

           
            <div class="form-group">
                <label for="title">Select Subject:</label>
                <select name="subject" class="form-control">
                

                </select>
            </div>
            
        <div class="col-md-6">
        <div class="form-group">
          <label for="first">Choose file</label>

          <input type="file" class="form-control" name="files[]" multiple /><br/>

          <label for="second">Select File Type</label>

        <select class="form-control" name="type" id="type">
         <option>Books</option>
         <option>Class Notes</option>
          <option>Chotha</option>
           <option>Questions</option>
          <option>Sessional Material</option>

         </select>

          <button type="submit" class="text-center btn btn-primary">Submit</button>

        </div>
      </div>





        

        </form>
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
     

          

           

           </div> 
     
</div>

</section>

@else
<h1>You Are Not Authorised</h1>

@endif


@else
<h1>You Are Not Logged In</h1>

@endif


{!! Html::script('js/bootstrap.js'); !!}
        

<script type="text/javascript">
  $(document).ready(function() {
   $('select[name="term"]').on('change', function() {
     var termID = $(this).val();
     if(termID) {
      $.ajax({
      url: '/getsubjectajax/'+termID,
      type: "GET",
       dataType: "json",
       success:function(data) {

                       
        $('select[name="subject"]').empty();

        $('select[name="subject"]').append('<option>'+'Select Subject'+'</option>');

        $.each(data, function(key, value) {

          	
       


       $('select[name="subject"]').append('<option value="'+ key + '">'+value+'</option>');
                    });

                   }
              });
            }else{
                $('select[name="subject"]').empty();
            }
        });
    });

$loader = $(".loader");
$model=$('.product');
$(document).on({
    ajaxStart: function() { $loader.css("display",'block');$model.css('display','none');},
     ajaxStop: function() { $loader.css("display",'none');$model.css('display','block'); } 

});

</script>


 </body>


 </html>       