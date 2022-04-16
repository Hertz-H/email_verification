<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function load(){

        return view('template.contact_us');
    }
    public function loadAdd(){
        return view('dashboard.user.add_contact');
    }
    public function updatePage(Request $request){
        $data=Contact::find($request->id);
      
        return view('dashboard.user.update_contact')->with("data",$data);
    }
    public function update(Request $request){
      
        echo  $request->id;
     contact::where('id',  $request->id)
                ->update([
                           'name'=>$request->name,
                           'link'=>$request->link
                           ]
                        );
 
                   
        return redirect('list_contacts');
    }
    

    public function activate(Request $request){
        echo $request->id ;
        echo $request->active ;
        $active=1;
        if($request->active==1){
            $active=0;
        }
      
        contact::where('id',  $request->id)
                ->update([
                           'is_active'=>$active,
                           ]
                        );
        return redirect('list_contacts');
    }
    
    public function list(){
       
        $data=Contact::with('user')->get();
        return view('dashboard.user.list_contacts')->with("data",$data);
    }
    
    public function add(Request $request){


        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'link'=>['required','min:20','max:50']
          
           
        ],[
            'name.required'=>'name is required',
            'link.required'=>'link is required',
          

           
        ]);
   
        $contact=new Contact();
      
        $contact->user_id=Auth::user()->id;;
        $contact->name=$request->name;
        $contact->link=$request->link;
    
   
        if($contact->save()){
            return redirect('list_contacts')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back()->with([ 'error'=>' creation failed ' ]);
       }
    //    return redirect('list_contact');
    }
}
