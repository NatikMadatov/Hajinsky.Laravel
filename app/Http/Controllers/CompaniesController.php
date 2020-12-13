<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
   public function getCompanies(){

    	$news = DB::table('companies')->get();

    	return view ('companies',[

    		'results'=>$news
    	]);
    }


    public function getNewCompanies(){

    	return view ('NewCompanies');

    }


    public function postNewCompanies(Request $request){

    	DB::table('companies')->insert([
    		'company_name'=>$request->company_name,
    		'name'=>$request->name,
    		'surname'=>$request->surname,
    		'telephone'=>$request->telephone,
    		'staff_count'=>$request->staff_count,
    		'email'=>$request->email,
    		'password'=>$request->password

    		]);

    	return redirect()->route('getCompanies');
    }



     public function getNewCompaniesPost($id){
    	$results = DB::table('companies')->where('id',$id)->first();
    	return view('companies-edit',[
    			'results' => $results

    	]);

}

    	  public function postNewCompaniesPost($id, Request $request){

      	$p = DB::table('companies')->where('id',$id)->first();


      	$results = DB::table('companies')->where('id',$id)->update([

    					'company_name'=>$request->company_name,
    					'name'=>$request->name,
    					'surname'=>$request->surname,
    					'telephone'=>$request->telephone,
    					'staff_count'=>$request->staff_count,
    					'email'=>$request->email,
    					'password'=>$request->password
			
    					]);


      	return redirect()->back();


}



			public function deleteCompanies($id){

    				$p = DB::table('companies')->where('id',$id)->first();
    				// unlink('uploads/'.$p->image);
    				DB::table('companies')->where('id',$id)->delete();


    				return redirect()->back();


}

}
