<?php

namespace App\Http\Controllers;
use App\Car;
use App\car_owner;

use Illuminate\Http\Request;
use App\wait_user;
use App\wait_car;
use App\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function index()
    {
        return view('index');
    }
    function logout()
    {
        session()->flush();
        return redirect('/E-contract/login');
    }
    function login()
    {
        return view('login');
    }
    function signup()
    {
        return view('signup');
    }
    function store(Request $request)
    {
        $validation=$request->validate(
        [
            'userName'=>'required|min:3|max:20',
            'email'=>'required|unique:users|min:3|max:25',
            'age'=>'required|max:3',
            'national_id'=>'required|unique:users|min:14|max:14',
           
            'nImage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
       
        
        $validation2=$request->validate(
            [
               
                'email'=>'required|unique:wait_users|min:3|max:25',
                
                'national_id'=>'required|unique:wait_users|min:14|max:14',
               
                
    
            ]);
           
        $natioalimage="";
        $userimage="";
        if($request->hasFile('nImage'))
        {
            $image1=$request->file('nImage');
            $name1=time().'.'.$image1->getClientOriginalExtension();
            $destination1=public_path('images');
            $image1->move($destination1,$name1);
            $natioalimage='images/'.$name1;
        }
        if($request->hasFile('image'))
        {
            $image2=$request->file('image');
            $name2=time().'.'.$image2->getClientOriginalExtension();
            $destination2=public_path('images');
            $image2->move($destination2,$name2);
            $userimage='images/'.$name2;
        }
       $user = new wait_user();
        $user->name=$request->userName;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->national_id=$request->national_id;
        $user->address=$request->address;
        $user->image=$userimage;
        $user->id_image=$natioalimage;
        $user->age=$request->age;
        $user->save();
        return redirect('E-contract/login');
    }
    function storeCar(Request $request)
    {
        $validation=$request->validate(
            [
                'color'=>'required|min:3|max:20',
                'serial'=>'required|unique:cars|min:3|max:25',
                'model'=>'required|max:25',
            ]);
    
            $validation2=$request->validate(
                [ 
                    'serial'=>'required|unique:wait_cars|min:3|max:25',
                ]);
            
           $car = new wait_car();
          /* $owner = new car_owner();  
           $owner->car_id=$request->serial;
           $owner->car_id=Auth::user()->national_id;
           $owner->save();*/
            $car->color=$request->color;
            $car->serial=$request->serial;
            $car->model=$request->model;
            $car->add_by=session()->get('national_id');
            $car->save();
            return redirect('E-contract/addcar');

    }
    function userHome()
    {
        if(session()->has('national_id'))
        {
            $user = User::where('national_id',session()->get('national_id'))->get();
            //$usere = User::select('email')->where('national_id', $id)->get();
            return view('userindex',compact('user'));
        }
        return redirect('E-contract/login');
        
    }
   
     function adminHome()
    {
        if(session()->has('national_id'))
        {
            $users=wait_user::get()->count();
            $cars=wait_car::get()->count();
            $user = User::where('national_id', session()->get('national_id'))->get();
            
           return view('adminIndex',compact('users','cars','user'));
        }
        return redirect('E-contract/login');
        
    }
    function waitUsers()
    {
        if(session()->has('national_id'))
        {
        $users=wait_user::get()->count();
        $userss=wait_user::get();
        $cars=wait_car::get()->count();
        //return session()->get('national_id');
        return view('showWaitusers',compact('userss','cars','users'));}
        return redirect('E-contract/login');
    }
    function waitCars()
    {
        if(session()->has('national_id'))
        {
        $cars=wait_car::get()->count();
        $carss=wait_car::get();
        $users=wait_user::get()->count();
        return view('showWaitcars',compact('carss','users','cars'));}
        return redirect('E-contract/login');
    }
    function checkuser(Request $request)
    {
        
        //$users=wait_user::get()->count();
        //$cars=wait_car::get()->count();
        $usere = User::where('email', $request->userEmail)->get();
       // return $usere;
       //$cred=array('email'=>$request->userEmail,'password'=>$request->userPassword);
      foreach($usere as $em)
      {
         //return $em->password;
        if(($em->email==$request->userEmail)&&($em->password==$request->userPassword))
        {
            //return $em->national_id;
            if($em->is_admin == 1)
            {
                session()->put('national_id',$em->national_id);
                return $this->adminHome();
            }
            else
            {
                //return $usere;
                session()->put('national_id',$em->national_id);
                return $this->userHome();
            }
           
        }
        else{
        
        return redirect('E-contract/login');
        }
         
      }
    }

    function search(Request $request)
    { 
        if(session()->has('national_id'))
        {
        $carrs=array();
        $users=wait_user::get()->count();
        $cars=wait_car::get()->count();
        $user = User::where('national_id',$request->national_id)->get();
        $carss= car_owner::where('user_id',$request->national_id)->get();
        foreach($carss as $car)
        {
            $car = Car::where('serial',$car->car_id)->get();
            //$carinfo=array($car->car_id,$car->user_id);
           array_push($carrs,$car);   
        }
        return view('searchResult',compact('user','carrs','cars','users'));
    }
    return redirect('E-contract/login');
       //return $user;
    }
    function acceptuser($id)
    {
        if(session()->has('national_id'))
        {
       $newuser=wait_user::where('national_id', $id)->get();
       //dd($newuser);
      /* $d=[
           'title'=>"you have been accepted in E-contract",
           'body'=>"congratulations "
       ];*/
       $user = new User();
       foreach($newuser as $new)
       {
           $user->name=$new->name;
           $user->email=$new->email;
           $user->national_id=$new->national_id;
           $user->password=$new->password;
           $user->age=$new->age;
           $user->address=$new->address;
           $user->image=$new->image;
           $user->id_image=$new->id_image;
           $user->save();
           $newuser=wait_user::where('national_id', $id)->delete();
          // \Mail::to($new->email)->send(new \App\Mail\acceptMail($d));
           return redirect('/E-contract/waitUsers');
        }
           
        return redirect('E-contract/login');
       }
       

    }
    function deleteuser($id)
    {
        if(session()->has('national_id'))
        {
        $newuser=wait_user::where('national_id', $id)->delete();

        return redirect('/E-contract/waitUsers');}
    
         return redirect('E-contract/login');
    }

    function acceptcar($id)
    {
        if(session()->has('national_id'))
        {
            $newcar=wait_car::where('serial', $id)->get();
            //dd($newcar);
            $car = new Car();
            $caro = new car_owner();
                foreach($newcar as $new)
                {
                    $caro->car_id=$new->serial;
                    $caro->user_id=$new->add_by;
                    $car->model=$new->model;
                    $car->serial=$new->serial;
                    $car->color=$new->color;
                    $car->save();
                    $caro->save();
                    $newcar=wait_car::where('serial', $id)->delete();
                    return redirect('/E-contract/waitCars');

                }
        }
        return redirect('E-contract/login');

    }
    function deletecar($id)
    {
        if(session()->has('national_id'))
        {
        $newcar=wait_car::where('serial', $id)->delete();

        return redirect('/E-contract/waitCars');
             }
        return redirect('E-contract/login');
    }

    function addcarform()
    {
        if(session()->has('national_id'))
        {
        return view('addCar');}
        return redirect('E-contract/login');
    }
}
