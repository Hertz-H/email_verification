<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User\Education;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class EducationController extends Controller
{




    public function loadAdd(){
      
        return view('dashboard.user.add_education');
    }

      public function list(){

        $data = Education::with('user')->get();
     
        return view('dashboard.user.list_education')->with("data",$data);
    }

    public function updatePage(Request $request){
        echo $request->id;
        $data=Education::find($request->id);
        if(isset($data)){
            echo "there is data "  ;
        }
      

        return view('dashboard.user.update_education')->with("data",$data);
    }
    public function update(Request $request){

        Education::where('id',  $request->id)
                ->update([
                            'name'=>$request->name,
                            'degree'=>$request->degree,
                            'start_date'=>$request->from,
                            'end_date'=>$request->to
                           ]
                        );
 

        return redirect('list_education');
    }
    

    public function activate(Request $request){
        echo $request->id ;
        echo $request->active ;
        $active=1;
        if($request->active==1){
            $active=0;
        }
      
        Education::where('id',  $request->id)
                ->update([
                           'is_active'=>$active,
                           ]
                        );
        return redirect('list_education');
    }



    public function add(Request $request){


        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'degree'=>['required','min:3','max:50']
          
           
        ],[
            'name.required'=>'name is required',
             'degree.required'=>'degree is required',
            'name.min'=>'name must be at least 3 letters',
            'name.max'=>'name must be at most 50 letters',
            'degree.min'=>'degree must be at least 3 letters',
            'degree.max'=>'degree must be at most 50 letters',

           
        ]);
   
        $Education=new Education();
        // $Education->user_id=Auth::user()->id;
       
        $Education->user_id=Auth::user()->id;

        $Education->name=$request->name;
        $Education->degree=$request->degree;
        $Education->start_date=$request->from;
        $Education->end_date=$request->to;
       
   
        if($Education->save()){

            return redirect('list_education')->with([ 'success'=>'created successfully' ]);
        }
       else{
         
           return back()->with([ 'error'=>' creation failed ' ]);;
       }
    //    return redirect('list_education');
    }



}
