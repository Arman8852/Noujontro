<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<title>Namepedia</title>
   </head>

   <body>


<h1 class="text-center">Write an Article about your journey.</h1>
<h1 class="text-center">We are proud of you</h1>
<h1 class="text-center"> and looking forward to hear your story</h1>

{!! Form::open(array('url' => '/submithigherstudyarticle')) !!}


<textarea name="article-body"></textarea>

<input type="text" class="col-sm-12 form-control" name="article-heading" placeholder="Heading Of Your Article"><br/><hr/>

<input type="text" class="col-sm-4 form-control" name="author-name" placeholder="Your Name"><br/><hr/>


<input type="text" class="col-sm-3 form-control" name="author-description" placeholder="Tell Us Something About You"><br/><hr/>

<input type="text" class="col-sm-3 form-control" name="author-email" placeholder="Your Email Account"><br/><hr/>


<input type="submit" class="btn btn-primary form-control" value="Publish">

{{!!Form::close()}}

<script type="text/javascript"  src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>

    </body>
    </html>