<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use Storage;
use File;
use App\LevelTerm;
use App\Subject;
use App\NameFile;
use DB;
use App\User;
use App\Role;

class PdfController extends Controller
{
    
public function submit(Request $request){

  
 
   $student=$request->input('submitted_by');
   $partners=explode(',',$request->input('partners'));
   
  $data = array(
   'assignment_no' => $request->input('assignment_no'),
   "assignment_title" => $request->input("assignment_title"),
   'course_no' => $request->input('course_no'),
   'course_title' => $request->input('course_title'),
   'submitted_by' =>$request->input('submitted_by'),
   'student_id' => $request->input('st_id'),
   'level' => $request->input('lt'),
   'teacher' => $request->input('teacher'),
   'designation'=>$request->input('designation'),
   'date' => $request->input('date'),

  );

  

  $pdf = PDF::loadView('assignmentpdfformat',compact('data','partners'))->setPaper('a4');
 
  return $pdf->download('Top-Page-'.$student.'.pdf');

  //return view('test',compact('partners'));

//return $data;

}

public function dashboard(){

   $users=User::pluck('name','id');

    $roles=Role::pluck('name','id');

   return view('home',compact('users','roles'));

}


public function getId(Array $array, $key, $value)
{   
  foreach ($array as $subarray)
    {  
      if (isset($subarray[$key]) && $subarray[$key] == $value)
      return $subarray;       
    } 
}





public function google(Request $request){

$files = $request->file('files');

if($request->hasFile('files')){


foreach ($files as $file) {

   $filedata=new NameFile;

  $subject = $request->input('subject');
  $type = $request->input('type');

  $extension = $file->getClientOriginalExtension();
  $name = $file->getClientOriginalName();

  $onlyname=basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension());

  

  $disk = Storage::disk('google');
   $disk->put($name, fopen($file, 'r+'));

  $listContents = Storage::disk('google')->listContents();

  $fileid = $this->getId($listContents, 'filename', $onlyname);

  

  $filedata->file=$file->getClientOriginalName();;

  $filedata->subject_id=$subject;

  $filedata->fileid=$fileid['path'];
  $filedata->type=$type;
  $filedata->extension=$extension;

  $filedata->save();



}

return $fileid['path'];

}

}

public function level(Request $request){


$level=new LevelTerm;

$level->levelterm=$request->input('level');;


$level->save();


}

public function authorizeadmin(Request $request){
     
     $user_id=$request->input('user');
   $role_id=$request->input('role');

  $user = User::where('id', '=',$user_id )->firstOrFail();
   $admin_role=Role::where('id','=',$role_id)->firstOrFail()->id;

$user->attachRole($admin_role);

return 'Success';


}

public function authorizeview(){

   $users=User::pluck('name','id');
   $roles=Role::pluck('name','id');

  return view('authorize',compact('users','roles'));


}





public function testuser(){

/*$moderator = new Role();

$moderator->name         = 'Admin';
$moderator->display_name = 'Can do anything'; // optional
$moderator->description  = 'Admin is  allowed to manage and edit other users'; // optional

$moderator->save();
*/

$admin=User::where('email','=','arman8852@gmail.com')->firstOrFail();

$role=Role::where('name','=','Admin')->firstOrFail()->id;


$admin->attachRole($role);

return 'Role has been attached';
}




public function subject(){

   $level=LevelTerm::pluck('levelterm','id');


   return view('subject',compact('level'));


}

public function addsubject(Request $request){


$subject=new Subject;

$subject->subject=$request->input('subject');
$subject->level_id=$request->input('level');
$subject->type=$request->input('type');
$subject->save();
$levels=LevelTerm::all();

//return view('id',compact('levels'));

}

public function addfile(){

  $terms = LevelTerm::pluck("levelterm","id");
        

   


   return view('id',compact('terms'));


}



public function downloadsubjectfile ($id){
   

    $fileId = $id;

  $listContents = Storage::disk('google')->listContents();

  $crosscheck = $this->getId($listContents, 'path', $fileId);

  $filename=$crosscheck['filename'];
  $extension=$crosscheck['extension'];

  $fs =  Storage::disk('google')->getDriver();

$stream = $fs->readStream($fileId);

return response()->stream(
    function() use($stream) {
      
        fpassthru($stream);
    }, 
    200,
    [
        'Content-Type' =>'application/txt',
        'Content-disposition' => 'attachment; filename="'.$filename.'.'.$extension.'"',
    ]);










/*return response($rawData, 200)
    ->header('ContentType','application/txt')
    ->header('Content-Disposition', 'attachment; filename='.$filename.'.'.$extension);*/



}

public function delete(){


  $fileid = '0Bwmau31byrynSHNSd3VRNXNQakk';

  Storage::disk('google')->delete($fileid);

  return "deleted";


}

public function coursefiles(){

  

  return view('dropdown');


}


public function getleveldetails(){

$level=LevelTerm::all();


return $level;


}



public function getsubject($id){

  

  $theoreticals=Subject::where('level_id',$id)->where('type','Theoretical')->get();

   $sessionals=Subject::where('level_id',$id)->where('type','Sessional')->get();

    $level=LevelTerm::where('id',$id)->firstOrFail();

    

   return view('subjectlist',compact('theoreticals','sessionals','level'));

}

public function getsubjectfile($id,$type){

  $files=NameFile::where('subject_id',$id)->where('type',$type)->get();

  $count=NameFile::where('subject_id',$id)->where('type',$type)->count();

  $subject=NameFile::where('subject_id',$id)->firstOrFail();

   return view('filelist',compact('files','subject','type','count'));



}

public function getsubjectajax($id){


 $subjects = DB::table("subjects")
                    ->where("level_id",$id)
                    ->pluck("subject","id");
        return json_encode($subjects);

   





}




}
