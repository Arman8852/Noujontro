
@if(Auth::check())

@if(Auth::user()->hasRole('Admin'))
{!! Form::open(array('url' => '/authorise')) !!}
    
   
    <div class="row text-center">
      <div class="col-md-6">
        <div class="form-group">
          <label for="first">User Name</label><br/>
         {{Form::select('user',$users, ['class' => 'form-control'])}}
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="first">User Role</label><br/>
         {{Form::select('role',$roles,['class' => 'form-control'])}}
        </div>
      </div>
      <!--  col-md-6   -->
      <button type="submit" class="text-center btn btn-danger">Authorise</button>
    </div>

    


    {{Form::close()}}


@else
<h1>You Are Not Authorised</h1>
@endif

@else
<h1>You Are Not Logged In</h1>

@endif