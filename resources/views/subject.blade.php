@if(Auth::check())

@if(Auth::user()->hasRole('Admin'))

{!! Form::open(array('url' => '/add_subject')) !!}
    {{ csrf_field() }}
    Subject:
    <br />
    <input type="text" name="subject" />
    {{Form::select('level',$level)}}
       
    <div class="form-group">
  <label for="level_term">Level-Term</label>
  <select class="form-control" name="type" id="type">
    <option>Theoretical</option>
    <option>Sessional</option>
  </select>
</div>

    <br /><br />
    <input type="submit" value="Upload" />


{!! Form::close() !!}


@else
<h1>You Are Not Authorised</h1>
@endif

@else
<h1>You Are Not Logged In</h1>

@endif
