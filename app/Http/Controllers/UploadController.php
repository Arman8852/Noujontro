<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projectfile;

use App\Subject;

use App\Books;

use App\NameFile;

use DB;

use Storage;
class UploadController extends Controller
{
    
public function Uploadprojectfile(Request $request){
    
   $Projectfile=new Projectfile;
   $Projectfile->file=$request->input('file_name');
   $Projectfile->type=$request->input('type');      
   $Projectfile->location=$request->input('file_loaction');

    $Projectfile->save();

   return "Project File Has Been Uplaoded Successfully";

  }


public function showprojectfile($id){

	$type=$id;

  $files=Projectfile::where('type',$id)->get();


  return view('Project.show',compact('files','type'));


}

public function uploadbooks(Request $request){

  $book=new Books;

   $book->name=$request->input('book_name');
    $book->author=$request->input('book_author');
    $book->edition=$request->input('book_edition');
    $book->link=$request->input('book_link');

    $book->save();

}

public function showbooks(){

  $books=Books::orderBy('name','asc')->paginate(20);

  return view('Books.show',compact('books'));

}

public function showsubject($id){

$subjects=Subject::where('level_id',$id)->get();

  
  return view('Delete.subjectview',compact('subjects'));


}

public function showfilefordelete($id){

$files=NameFile::where('subject_id',$id)->get();

  
  return view('Delete.deleteview',compact('files'));


}


public function deletefile(Request $request){

    $id=$request->input('id');

     $fileid=$request->input('fileid');
   

    
  Storage::disk('google')->delete($fileid);

  

DB::table('name_files')
            ->where('id', $id)
            ->delete();
   

return "File is deleted";


}



}
