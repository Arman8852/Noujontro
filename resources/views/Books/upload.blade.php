<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<title>Namepedia</title>
   </head>

   <body>

   {!! Form::open(array('url' => '/uploadbooks')) !!}
     <input type="text" class="col-sm-12 form-control" name="book_name" required placeholder="Name of Book"><br/>
     <input type="text" class="col-sm-12 form-control" name="book_author" placeholder="Author of Book"><br/>

     <input type="text" class="col-sm-12 form-control" name="book_edition" placeholder="Edition of Book"><br/>


    <input type="text" class="col-sm-12 form-control" name="book_link" required  placeholder="File link of Book in drive"><br/><hr/>


    <input type="submit" class="btn btn-primary form-control" value="Publish">

   {!!Form::close()!!}

   </body>

   </html>