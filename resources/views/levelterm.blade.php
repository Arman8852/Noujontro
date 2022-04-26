@if(Auth::check())

@if(Auth::user()->hasRole('Admin'))
  

<form action="/level" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    Level-Term:
    <br />
    <input type="text" name="level" />
    
    <br /><br />
    <input type="submit" value="Upload" />
</form>

@else
<h1>You Are Not Authorised</h1>

@endif


@else
<h1>You Are Not Logged In</h1>

@endif