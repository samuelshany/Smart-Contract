<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ApiController extends Controller
{
    /*function userHome()
    {
        
            $user = User::where('national_id',session()->get('national_id'))->get();
            //$usere = User::select('email')->where('national_id', $id)->get();
            return view('userindex',compact('user'));
        
        return redirect('E-contract/login');
        
    }
    function addcarform()
    {
        if(session()->has('national_id'))
        {
        return view('addCar');}
        return redirect('E-contract/login');
    }*/
    function login(Request $request)
    {
       // return view('loginApi') ;
        return $this->checkuser($request);
    }
    function checkuser(Request $request)
    {
        
       //return $request;
        $usere = User::where('email', $request->email)->get();
    //return $request->userEmail;
      foreach($usere as $em)
      {
         //return $em->password;
        if(($em->email==$request->email)&&($em->password==$request->password))
        {
            
                //return $usere;
            
                return response()->json($usere);
            
           
        }
        else{
        
        return redirect('E-contract/login');
        }
         
      }
    }
}
