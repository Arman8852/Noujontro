<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/approvearticle','ProjectController@approvation');

Route::post('/approve/{id}/{name}/{email}','ProjectController@approvationsuccess');



Route::get('unauthorize', 'ProjectController@unauthorize');


Route::post('unauthorizeusers','ProjectController@postunauthorize');

Route::post('deleteuser/{id}','ProjectController@postdeleteuser');

Route::get('/dashboard','PdfController@dashboard');


Route::get('/authorise','PdfController@authorizeview' );


Route::post('/authorise','PdfController@authorizeadmin');

Route::get('/rulebook',function () {
    return view('rulebook');
});



Route::get('/editsubject',function () {
    return view('Edit.levelview');
});

Route::get('/deletesubject',function () {
    return view('Edit.deletesubject');
});

Route::get('/editpostsubject','ProjectController@posteditsubject');

Route::get('/deletepostsubject','ProjectController@postdeletesubject');


Route::get('/editsubject/{id}','ProjectController@editsubject');

Route::get('/deletesubject/{id}','ProjectController@deletesubject');


Route::get('coursematerials', function () {
    return view('coursematerial');

});

Route::get('toppage', function () {
    return view('toppage');
});


Route::get('labtoppage', function () {
    return view('labpdfform');
});



Route::get('/higherstudy','ProjectController@higherstudy');

Route::get('/article/{id}','ProjectController@getarticle');




Route::get('/submithigherstudyarticle', function () {
    return view('Article.Higherstudy');
});


Route::post('/submithigherstudyarticle','ProjectController@posthigherstudies');

Route::post('/credentials','PdfController@submit');
Route::post('/labcredentials','ProjectController@submit');
Route::get('/getfile','ProjectController@getfileauto');


Route::get('/getbooks','ProjectController@getbooksauto');


Route::get('/test','PdfController@addfile');
Route::get('/user','PdfController@testuser');
Route::get('/namesoftware',function () {
    return view('namesoftware');
});


Route::post('google','PdfController@google');

Route::get('/level',function () {
    return view('levelterm');
});

 //---------------------------------   
 Route::get('/uploadprojectfile',function () {
    return view('Project.uploadform');
});



Route::get('/project338/{id}','UploadController@showprojectfile');

Route::post('/uploadprojectfile','UploadController@Uploadprojectfile');


//-----------------------------------------   

Route::get('/get_subject','PdfController@subject');

Route::post('/add_subject','PdfController@addsubject');

Route::get('download','PdfController@download');

Route::post('level','PdfController@level');

Route::get('delete','PdfController@delete');




Route::get('subject/{id}','PdfController@getsubject');
Route::get('subject/file/{id}/{type}','PdfController@getsubjectfile');

Route::get('downloadfile/{id}','PdfController@downloadsubjectfile');


Route::get('getsubjectajax/{id}','PdfController@getsubjectajax');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----------------------------------------
Route::get('namebooks','UploadController@showbooks');

Route::get('uploadbooksform',function () {
    return view('Books.upload');
});

Route::post('uploadbooks','UploadController@uploadbooks');


Route::get('/play','UploadController@testplay');


//---------------------------


Route::get('about_us',function () {
    return view('About.about');
});

Route::get('credit',function () {
    return view('About.credit');
});

Route::get('/testuser',function () {
    return view('testuser');
});

//------------------------------

Route::get('uploadthesisfile',function () {
    return view('Thesis.uploadform');
});


Route::post('uploadthesisfile','UploadController@uploadthesisfile');

//--------------------------------------


Route::get('picnic',function () {
    return view('picnic');

    });

Route::get('sports',function () {
    return view('sports');

});
//--------------------------------------

Route::get('/deleteunnecessaryfiles',function () {
    return view('Delete.filelevel');
});

Route::get('/filesubjectlist/{id}','UploadController@showsubject');

Route::get('/getfilefordelete/{id}','UploadController@showfilefordelete');

Route::get('/deletefileform','UploadController@deletefile');

Route::get('/deletearticle/{id}','ProjectController@deletearticle');
//-------------------------------------------

Route::get('/magazine2018',function () {
    return view('Magazine.magazine');
});

Route::get('/getleveldetails','PdfController@getleveldetails');


