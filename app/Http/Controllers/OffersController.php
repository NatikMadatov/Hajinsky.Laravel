<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OffersController extends Controller
{
     public function getOffers(){
    	$news = DB::table('offers')->get();

    	return view ('offers',[
    	'results' =>$news
    ]);
    }


    public function getNewOffers(){

    	return view ('NewOffers');


    }

    public function postNewOffers(Request $request){


    	DB::table('offers')->insert([
    		'name_az'=>$request->name_az,
    		'name_en'=>$request->name_en,
    		'name_ru'=>$request->name_ru
    		


    		
    	]);
    	return redirect()->route('getOffers');
    }



    public function deleteOffers($id){
    	$p = DB::table('offers')->where('id',$id)->first();
    	// unlink('uploads/'.$p->image);
    	DB::table('offers')->where('id',$id)->delete();
    	return redirect()->back();


    }


     public function getNewOffersPost($id){
    	$results = DB::table('offers')->where('id',$id)->first();
    	return view('offers-edit',[
    			'results' => $results

    	]);


    }


     public function postNewOffersPost($id, Request $request){

      	$p = DB::table('offers')->where('id',$id)->first();


      	$results = DB::table('offers')->where('id',$id)->update([

    					'name_az'=>$request->name_az,
    					'name_en'=>$request->name_en, 
    					'name_ru'=>$request->name_ru
    					
    		]);




    
    					return redirect()->back();

    	
    
}

}
