<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Facades\Validator;
class AdController extends Controller
{
   
    public function loadAdd(){

        return view('dashboard.add_ads');
    }

    public function list(){
        $data=Ad::all();

        return view('dashboard.list_ads')->with("data",$data);
    }

    public function updatePage(Request $request){
        $data=Ad::find($request->id);
        if(isset($data)){
            echo "there is data "  ;
        }
      

        return view('dashboard.update_ad')->with("data",$data);
    }
    public function update(Request $request){
        echo $request->id   ;
        $imageName=time().'.'.$request->image->extension();
         $request->image->move(public_path('images'),$imageName);
      
         Ad::where('id',  $request->id)
                ->update([
                           'company'=>$request->name,
                           'image'=>$imageName
                           ]
                        );
 

        return redirect('list_ads');
    }
    

    public function activate(Request $request){
        echo $request->id ;
        echo $request->active ;
        $active=1;
        if($request->active==1){
            $active=0;
        }
      
        Ad::where('id',  $request->id)
                ->update([
                           'is_active'=>$active,
                           ]
                        );
        return redirect('list_ads');
    }






    public function add(Request $request){
        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'image'=>['required'],
           
        ],[
          
            'name.required'=>'name is required',
            'name.min'=>'name must be at least 3 letters',
            'name.max'=>'name must be at most 50 letters',
            'image.required'=>'image is required',
        ]);
        $ad=new Ad();
        $ad->company=$request->name;
        $imageName=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'),$imageName);
        $ad->image=$imageName;
   
        if($ad->save()){
            return redirect('list_ads')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back();
       }
        return view('dashboard.add_ads');
    }
    
}
