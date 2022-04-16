<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Skill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function loadAdd(){
       
        return view('dashboard.user.add_skill');
    }

    
    public function add(Request $request){


        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'degree'=>['required','numeric','min:3','max:50']
          
           
        ],[
            'name.required'=>'name is required',
            'name.min'=>'name must be at least 3 letters',
            'name.max'=>'name must be at most 50 letters',
            'degree.required'=>'degree is required',
            'degree.numeric'=>' must be numeric value',
            'degree.min'=>'can not  be smaller than 10 ',
            'degree.max'=>'can not  be larger than 100 ',

           
        ]);
   
        $skill=new Skill();
       
        echo Auth::user()->id;
        $skill->user_id=Auth::user()->id;
        $skill->name=$request->name;
        $skill->degree=$request->degree;
    
   
        if($skill->save()){
            return redirect('list_skills')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back()->with([ 'error'=>' creation failed ' ]);;
       }
  
    }

    
    public function updatePage(Request $request){
        $data=skill::find($request->id);
        if(isset($data)){
            echo "there is data "  ;
        }
      

        return view('dashboard.user.update_skill')->with("data",$data);
    }
    public function update(Request $request){
      
        echo  $request->id;
     Skill::where('id',  $request->id)
                ->update([
                           'name'=>$request->name,
                           'degree'=>$request->degree
                           ]
                        );
 
                   
        return redirect('list_skills');
    }
    

    public function activate(Request $request){
        echo $request->id ;
        echo $request->active ;
        $active=1;
        if($request->active==1){
            $active=0;
        }
      
        Skill::where('id',  $request->id)
                ->update([
                           'is_active'=>$active,
                           ]
                        );
        return redirect('list_skills');
    }
    
    public function list(){
        $data=Skill::with('user')->get();;
      
        return view('dashboard.user.list_skills')->with("data",$data);
    }
    
}
