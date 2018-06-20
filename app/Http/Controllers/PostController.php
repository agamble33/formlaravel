<?php

namespace App\Http\Controllers;
use App\Customer;

use Illuminate\Http\Request;


class PostController extends Controller{
    
    public function entry(){ 
    
        return view('customer');
    }
    public function customer(Request $request){
       //allways dd($request);
      $this->validate($request, [ // really study this action
          'email' => 'required',
          'domain' => 'required',
          'phone' => 'required',
          'url' => 'required',
      ]);
      
      $customer = new Customer; 

      $customer->email = $request->input('email');
      $customer->domain = $request->input('domain');
      $customer->phone = $request->input('phone');
      $customer->url = $request->input('url');
      $customer->save(); //save to database
      return view('customer');

//class PostController extends Controller{
    //public function entry(){
   // public function entry(){ //post
        //$customer=new Entry(); //adding row and model name 
        //$customer->customer=$request->customer; 
        //$customer->save(); //save to database
        //return view('customer');
    //}
   // public function customer(Request $request){
       // $this->validate($request, [
          //'email' => 'required',
          //'domain' => 'required',
          //'phone' => 'required',
          //'url' => 'required',
       // ]);
    // $customer = new Customer(); //adding row and model name
        //$customer->email = $request->input('email');
       // $customer->domain = $request->input('domain');

       // $customer->phone = $request->input('phone');
       // $customer->url = $request->input('url');
      //  $customer->save();



    //public function final(Request $request){
    //REQUEST DATA FROM LOGIN PAGE
   //$name = $request->username;
//color = $request->color;
    //return view('final', compact('name', 'color'));

   // }

//REQUEST DATA FROM LOGIN PAGE
 //$name = $request->username;
 //$color = $request->color;
//return viefinal', compact('name', 'color'));






   //public function entry(){
        
    	//return view('customer');
       // }
    //}

    //public function yo(Request $request){ //post
    	//$customer=new Entry(); //adding row and model name 
    	//$customer->customer=$request->customer; 
       // $customer->save(); //save to database
    	//return redirect()->action('PostController@entry');
//}
	//}

}
}



   