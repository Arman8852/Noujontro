<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

  
 <title>Noujontro</title>



</head>

<body>

{!! Form::open(array('url' => '/uploadthesisfile')) !!}
 <div class="row">



 <div class="col-md-6">

<div class="form-group">
  <label for="section">Thesis Title</label>
  <input type="text" placeholder="Thesis title" required="true" class="form-control" name="title" >
</div>

</div>
      
<div class="col-md-6">

<div class="form-group">
  <label for="Group">Thesis Author</label>
 <input type="text" required="true" class="form-control" name="author" placeholder="Thesis authors name" >
</div>

</div>


</div>



<div class="row">


<div class="col-md-4 col-md-offest-4">

<div class="form-group">
  <label for="Group">Upload File</label>
 <input type="file" required="true" class="form-control" name="file" >
</div>

</div>

</div>
<div class="col-md-6">

 <button type="submit" class=" btn btn-primary">Submit</button>

</div>

 {!!Form::close()!!}













</body>

</html>