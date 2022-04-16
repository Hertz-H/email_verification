<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
class ServiceController extends Controller
{
    public function load(){
  $data=Service::all()->where('is_active',1);
        return view('template.services')->with("data",$data);
    }
    public function loadAdd(){

        return view('dashboard.add_service');
    }
    public function add(Request $request){
      
        Validator::validate($request->all(),[
            'title'=>['required','min:3','max:50'],
          
            'description'=>['required'],
           
        ],[
            'title.required'=>'tilte is required',
            'title.min'=>'title must be at least 3 letters',
            'title.max'=>'title must be at most 50 letters',
             'description.required'=>'description is required',
        ]);
        $service=new Service();
        $service->title=$request->title;
        $service->description=$request->description;
   
        if($service->save()){
            return redirect('list_services')->with([ 'success'=>'created successfully' ]);
        }
       else{
            return redirect('list_services')->with([ 'error'=>'creation failed' ]);
       }
       
    }


    public function updatePage(Request $request){
        $data=Service::find($request->id);
        if(isset($data)){
            echo "there is data "  ;
        }

        return view('dashboard.update_service')->with("data",$data);
    }
    public function update(Request $request){
        echo $request->id   ;
        Service::where('id',  $request->id)
                ->update([
                           'title'=>$request->title,
                           'description'=>$request->description
                           ]
                        );
 

        return redirect('list_services');
    }
    

    public function activate(Request $request){
        echo $request->id ;
        echo $request->active ;
        $active=1;
        if($request->active==1){
            $active=0;
        }
      
        Service::where('id',  $request->id)
                ->update([
                           'is_active'=>$active,
                           ]
                        );
        return redirect('list_services');
    }






    public function list(){
        $data=Service::all();
        // $data=Service::all()->where("is_active",1);

        return view('dashboard.list_services')->with("data",$data);
    }
    
}