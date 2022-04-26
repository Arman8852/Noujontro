<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

use App\NameFile;

use App\User;

use App\Subject;

use App\Books;

use DB;

use App\Role;

use App\Higherstudy;

use Mail;

use App\Notifications\ArticleSubmitted;


class ProjectController extends Controller
{
    public function submit(Request $request){

  $partners=explode(',',$request->input('partners'));
   
  $data = array(
   'experiment_no' => $request->input('experiment_no'),
   "experiment_title" => $request->input("experiment_title"),
   'course_no' => $request->input('course_no'),
   'course_title' => $request->input('course_title'),
   'submitted_by' =>$request->input('submitted_by'),
   'student_id' => $request->input('st_id'),
   'level' => $request->input('lt'),
   'section' => $request->input('sec'),
   'group' => $request->input('group'),

   
   
   'date_p' => $request->input('date_p'),
   'date_s' => $request->input('date_s'),

  );

  

  $pdf = PDF::loadView('labpdfformat',compact('data','partners'))->setPaper('a4');
 
  return $pdf->download('Lab-Top-Page.pdf');

}



public function getfileauto(Request $request){

$term=ucwords($request->term);
      $data=NameFile::where('file','LIKE',$term.'%')->take(40)->get();
      $result=array();
      foreach($data as $key=>$file){
       $result[]=['value'=>$file->file,'id'=>$file->fileid];

      }
      
      return response()->json($result);
    }



    public function getbooksauto(Request $request){

$term=ucwords($request->term);
      $data=Books::where('name','LIKE',$term.'%')->take(40)->get();
      $result=array();
      foreach($data as $key=>$book){
       $result[]=['value'=>$book->name,'id'=>$book->link];

      }
      
      return response()->json($result);
    }


public function editsubject($id){

   $subjects=Subject::where('level_id',$id)->get();

    return view('Edit.subjectview',compact('subjects'));


}

public function deletesubject($id){

   $subjects=Subject::where('level_id',$id)->get();

    return view('Edit.deleteview',compact('subjects'));


}





public function posteditsubject(Request $request){


   $id=$request->input('id');

   $subject=$request->input('subject');

    $type=$request->input('type');
   

DB::table('subjects')
            ->where('id', $id)
            ->update(['subject' => $subject,'type' => $type]);
   

return "Success";


}





public function postdeletesubject(Request $request){


$id=$request->input('id');


DB::table('subjects')
            ->where('id', $id)
            ->delete();

return "Subject Deleted";


}

public function unauthorize(){

$users = User::all();


return view('Authorize.unauthorize',compact('users'));

}



public function postdeleteuser($id){

DB::table('users')
            ->where('id',$id)
            ->delete();

return "User Deleted";


}



public function postunauthorize(Request $request){

$user=User::where('name',$request->input('user'))->firstOrFail();

$input =$request->input('role');

$role=Role::where('name','=',$input)->firstOrFail()->id;


$user->detachRole($role);

return 'Role have been detached';



}

public function higherstudy(){

$articles=Higherstudy::where('status','approved')->orderBy('created_at', 'desc')->paginate(5);

return view('Article.paginate',compact('articles'));


}



public function posthigherstudies(Request $request){

   $higherstudy=new Higherstudy;

    $higherstudy->author_name=$request->input("author-name");

   $higherstudy->author_description=$request->input("author-description");

   $higherstudy->author_email=$request->input("author-email");

   $higherstudy->article_header=$request->input("article-heading");

    $higherstudy->article_body=$request->input("article-body");
   
    $higherstudy->status='pending';

   $higherstudy->save();


  
   
  return "We will email you as soon as your article will publish";


}

public function getarticle($id){


$article=Higherstudy::where('id',$id)->firstOrFail();

return view('Article.show',compact('article'));



}

public function sendmail(){

 $title = "Hello Arman";
        $content = "How are You?";

        Mail::send('Email.article', ['title' => $title, 'content' => $content], function ($message)
        {

            

            $message->to('8852test@gmail.com')->subject($name);;

        });

        return response()->json(['message' => 'Request completed']);






}



public function approvation(){

$articles=Higherstudy::paginate(5);

return view('Article.approvation',compact('articles'));



}

public function approvationsuccess($id,$name,$email){


        $title = $name;
        $content = $id;
        $email = $email;


   DB::table('higherstudies')
            ->where('id', $content)
            ->update(['status' => 'approved']);

        
        /*Mail::send('Email.article', ['title' => $title, 'content' => $content], function ($message)use($email)
        {

            

            $message->to($email)->subject("Article Published In Namepedia");

        });*/





 
   

return 'The Post has been approved';



}

public function deletearticle($id){


        DB::table('higherstudies')
            ->where('id', $id)
            ->delete();

return 'The Post has been deleted';

}




}
