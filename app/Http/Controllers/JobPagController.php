<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;

use Illuminate\Support\Facades\Validator;

class JobPagController extends Controller
{
    public function load(){
        $data=Job::select('jobs.*','companies.name','companies.logo','companies.location','companies.is_active')
        ->join('companies','jobs.company_id','=','companies.id')
        ->where('companies.is_active','1')
        ->where('jobs.is_active','1')
        ->get();
 
        return  view('template.jobs_page')->with("data",$data);
    }

    public function loadDetails(){
        
        return view('template.job_details');
    }

   
    
    public function updatePage(Request $request){
        $job=Job::find($request->id);
        $company=Company::All();
        $data = [
            "company"=>$company,
            "job"=>$job
        ];
        return view('dashboard.update_job')->with("data",$data);
    }
    public function update(Request $request){
        echo $request->id   ;
        Job::where('id',  $request->id)
                ->update([
                           'title'=>$request->title,
                           'description'=>$request->description,
                           'company_id'=>$request->company,
                           'interval'=>$request->interval,
                           'start_date'=>$request->from,
                           'end_date'=>$request->to,
                           'requirements'=>$request->requirements,
                           'description'=>$request->description
                           ]
                        );
 

        return redirect('list_jobs');
    }
    

    public function activate(Request $request){
        echo $request->id ;
        echo $request->active ;
        $active=1;
        if($request->active==1){
            $active=0;
        }
      
        Job::where('id',  $request->id)
                ->update([
                           'is_active'=>$active,
                           ]
                        );
        return redirect('list_jobs');
    }


    public function list(){
        $data=Job::select('jobs.*','companies.name','companies.logo')
             ->join('companies','jobs.company_id','=','companies.id')
             ->get();
        return view('dashboard.list_jobs')->with("data",$data);
   
    }



    public function loadAdd(){
        $data=Company::all();
        return view('dashboard.add_job')->with("data",$data);
    }

    
    public function add(Request $request){
      

        Validator::validate($request->all(),[
            'title'=>['required','min:3','max:50'],
            'description'=>['required'],
            'requirements'=>['required'],


            // 'title'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            // 'description'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            // 'requirements'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
           
        ],[
            'name.required'=>'name is required',
            'name.min'=>'name must be at least 3 letters',
            'name.max'=>'name must be at most 50 letters',
            'description.required'=>'description is required',
            'requirements.required'=>'requirements is required',

            // 'title.regex'=>'tilte must contain letters',
            //  'description.regex'=>'description must contain letters',
            //  'requirements.regex'=>' requirements must contain letters',
        ]);
        $job=new Job();
        $job->company_id=$request->company;
        $job->title=$request->title;
        $job->interval=$request->interval;
        $job->start_date=$request->from;
        $job->end_date=$request->to;
        $job->requirements=$request->requirements;
        $job->description=$request->description;
        // $job->company_id=$request->company;
   
        if($job->save()){
           //  return route('companies')->with([ 'success'=>'created successfully' ]);
        }
       else{
           return back();
       }
       return redirect('list_jobs');
    }
    
}
