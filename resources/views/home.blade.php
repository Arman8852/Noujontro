@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

 @if(Auth::user()->hasRole('Admin'))

 <p class="text-center">{{Auth::user()->name}},You are an Admin-level user</p>

 

<div class="container">

<div class="row">

<div class="col-xs-6 col-xs-offset-3">

  <a href="/authorise"><button class="btn btn-success"  type="button" >Authorise Others
    </button></a>

    <a href="/unauthorize"><button class="btn btn-success"  type="button" >Deauthorise Others
    </button></a>

    <a href="/approvearticle"><button class="btn btn-danger" type="button" >Approve Article
    </button></a>

    <a href="/get_subject"><button class="btn btn-primary" type="button" >Add Subject
    </button></a>

    <a href="/editsubject"><button class="btn btn-primary" type="button" >Edit Subject
    </button></a>

<a href="/test"><button class="btn btn-danger" type="button" >Add Course File
    </button></a>

    <a href="/uploadprojectfile"><button class="btn btn-danger" type="button" >Add Project File
    </button></a>

    <a href="/uploadbooksform"><button class="btn btn-danger" type="button" >Uplaod Books
    </button></a>

    <a href="/deleteunnecessaryfiles"><button class="btn btn-primary" type="button" >Delete Unnecessary Files
</button></a>

</div>
</div>
</div>

<div id="sfc1cshnffjaukdwwade4yb5r1udk7w5z1c"></div>
<script type="text/javascript" src="https://counter8.freecounter.ovh/private/counter.js?c=1cshnffjaukdwwade4yb5r1udk7w5z1c&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="web counter"><img src="https://counter8.freecounter.ovh/private/freecounterstat.php?c=1cshnffjaukdwwade4yb5r1udk7w5z1c" border="0" title="web counter" alt="web counter"></a></noscript>




 @endif

 @if(Auth::user()->hasRole('Moderator'))

<p class="text-center">{{Auth::user()->name}},You are a Moderator-level user</p>

<div class="container">

<div class="row">

<div class="col-xs-6 col-xs-offset-5">

 <a href="/test"><button class="btn btn-danger" type="button">Add File
    </button></a>

<a href="/uploadprojectfile"><button class="btn btn-danger" type="button" >Add Project File
</button></a>

<a href="/deleteunnecessaryfiles"><button class="btn btn-danger" type="button" >Delete Unnecessary Files
</button></a>


</div>
</div>
</div>

<div id="sfc1cshnffjaukdwwade4yb5r1udk7w5z1c"></div>
<script type="text/javascript" src="https://counter8.freecounter.ovh/private/counter.js?c=1cshnffjaukdwwade4yb5r1udk7w5z1c&down=async" async></script>
<noscript><a href="https://www.freecounterstat.com" title="web counter"><img src="https://counter8.freecounter.ovh/private/freecounterstat.php?c=1cshnffjaukdwwade4yb5r1udk7w5z1c" border="0" title="web counter" alt="web counter"></a></noscript>

@endif
</div>
@endsection

<div class="container">
  

    </div>






