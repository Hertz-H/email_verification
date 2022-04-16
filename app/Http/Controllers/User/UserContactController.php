<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\UserContact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserContactController extends Controller
{
    public function loadAdd(){
        return view('dashboard.user.add_contact');
    }

    
    public function add(Request $request){


        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'degree'=>['required','numeric','min:3','max:50']
          
           
        ],[
            'name.required'=>'name is required',

            'link.required'=>'link is required',
          

           
        ]);
   
        $contact=new UserContact();
        // $contact->user_id=Auth::user()->id;
        $contact->user_id=Auth::user()->id;
        $contact->name=$request->name;
        $contact->link=$request->link;
    
   
        if($contact->save()){
            // return redirect('list_contact')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back()->with([ 'error'=>' creation failed ' ]);;
       }
    //    return redirect('list_contact');
    }
}
