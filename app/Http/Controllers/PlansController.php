<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PlansController extends Controller



   {
    public function getPlans(){

    	$news = DB::table('plans')->get();

    	return view ('plans',[

    		'results'=>$news
    	]);
    }


    public function getNewPlans(){

    	return view ('NewPlans');

    }


    public function postNewPlans(Request $request){

    	DB::table('plans')->insert([
    		'name_az'=>$request->name_az,
    		'name_en'=>$request->name_en,
    		'name_ru'=>$request->name_ru,
    		'price'=>$request->price,
    		'count'=>$request->count

    		]);

    	return redirect()->route('getPlans');
    }



     public function getNewPlansPost($id){
    	$results = DB::table('plans')->where('id',$id)->first();
    	return view('plans-edit',[
    			'results' => $results

    	]);

}

    	  public function postNewPlansPost($id, Request $request){

      	$p = DB::table('plans')->where('id',$id)->first();


      	$results = DB::table('plans')->where('id',$id)->update([

    					'name_az'=>$request->name_az,
    					'name_en'=>$request->name_en,
    					'name_ru'=>$request->name_ru,
    					'price'=>$request->price,
    					'count'=>$request->count

    					]);


      	return redirect()->back();


}



			public function deletePlans($id){

    				$p = DB::table('plans')->where('id',$id)->first();
    				// unlink('uploads/'.$p->image);
    				DB::table('plans')->where('id',$id)->delete();


    				return redirect()->back();


}


}
	


    		
    	