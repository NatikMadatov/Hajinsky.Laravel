<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    public function getProject(){
    	$news = DB::table('projects')->get();

    	return view ('project',[
    	'results' =>$news
    ]);
    }


    public function getNewProject(){

    	return view ('NewProject');
    }


    public function postNewProject(Request $request){

    		$file = $request->file('image');

    		if($file) {

    			$file_extension = $file->getClientOriginalExtension();
    			$type = ["jpg","png","webp","gif","bmp","jpeg"];

    			if(in_array($file_extension, $type)) {
    				$myfile =str_slug($request->name).'-'. str_slug(Carbon::now()).
    				rand(999999,10000000000).'.'.$file->

    					getClientOriginalExtension();




    			}

    			$file = $file->move('uploads/', $myfile);
    		}




    	DB::table('projects')->insert([
    		'name_az'=>$request->name_az,
    		'name_en'=>$request->name_en,
    		'name_ru'=>$request->name_ru,
    		'text'=>$request->text_az,
    		'text_en'=>$request->text_en,
    		'text_ru'=>$request->text_ru,
    		'date'=>$request->date,
    		'image'=>$myfile,
    		'url'=>$request->URL,


    		
    	]);
    	return redirect()->route('getProject');
    }



    public function deleteProject($id){
    	$p = DB::table('projects')->where('id',$id)->first();
    	unlink('uploads/'.$p->image);
    	DB::table('projects')->where('id',$id)->delete();
    	return redirect()->back();


    }



    public function getNewProjectPost($id){
    	$results = DB::table('projects')->where('id',$id)->first();
    	return view('project-edit',[
    			'results' => $results

    	]);


    }


      public function postNewProjectPost($id, Request $request){

      	$p = DB::table('projects')->where('id',$id)->first();


      			$file = $request->file('image');

    		if($file) {

    			$file_extension = $file->getClientOriginalExtension();
    			$type = ["jpg","png","webp","gif","bmp","jpeg"];

    			if(in_array($file_extension, $type)) {
    				$myfile =str_slug($request->name).'-'. str_slug(Carbon::now()).
    				rand(999999,10000000000).'.'.$file->

    					getClientOriginalExtension();




    			}

    			$file = $file->move('uploads/', $myfile);


    			$results = DB::table('projects')->where('id',$id)->update([

    				'image' =>$myfile
    			]);


    			unlink('uploads/'.$p->image);
    		}


    		$results = DB::table('projects')->where('id',$id)->update([

    					'name_az'=>$request->name_az,
    					'name_en'=>$request->name_en, 
    					'name_ru'=>$request->name_ru,
    					'text'=>$request->text_az,
    					'text_en'=>$request->text_en,
    					'text_ru'=>$request->text_ru,
    					'date'=>$request->date,
    					'url'=>$request->URL,
    		]);




    
    					return redirect()->back();


    }
}
