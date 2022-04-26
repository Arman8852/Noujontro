<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

  <title>Namepedia</title>



</head>

<body>

@if(Auth::check())

@if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('Moderator'))

{!! Form::open(array('url' => '/uploadprojectfile')) !!}

<div class="container">
     <h2>Upload Project File</h2> 
<div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">File Name</label>
          <input type="text" required="true" class="form-control" name="file_name" placeholder="File Name">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="first">File Location</label>
          <input type="text" required="true" class="form-control" name="file_loaction" placeholder="Location Link In Drive">
        </div>
      </div>
      <!--  col-md-6   -->


<div class="col-md-6">

<div class="form-group">
  <label for="level_term">Vessel Type</label>
  <select class="form-control" name="type" id="type">
    <option>Sea Going General Cargo</option>
    <option>Sea Going Bulk Cargo</option>
    <option>Sea Going Oil Tanker</option>
    <option>Sea Going Container Vessel</option>
    <option>Offshore Structure</option>
    <option>Sea Going Tug</option>
    <option>Sea Going Dredger</option>
    <option>Inland General Cargo</option>
    <option>Inland Bulk Cargo</option>
    <option>Inland Oil Tanker</option>
    <option>Inland Container Vessel</option>
    <option>Inland Tug</option>
    <option>Inland Dredger</option>
  </select>
</div>

</div>




    </div>



<div class="row">
<div class="col-md-6">

<button type="submit" class="text-center btn btn-primary">Upload Project File</button>


</div>

</div>

</div>




{{Form::close()}}

@else
<h1>You Are Not Authorised</h1>
@endif

@else
<h1>You Are Not Logged In</h1>

@endif




</body>


</html>
