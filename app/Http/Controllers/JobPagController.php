<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Mail\JobMail;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use App\Models\Subscriber;
use App\Models\Location;


use Illuminate\Support\Facades\Validator;

class JobPagController extends Controller
{
    public function load()
    {
        // $data = Job::select('jobs.*', 'companies.name', 'companies.logo', 'companies.location', 'companies.is_active')
        //     ->join('companies', 'jobs.company_id', '=', 'companies.id')
        //     ->where('companies.is_active', '1')
        //     ->where('jobs.is_active', '1')
        //     ->get();
        $companies = Company::where('is_active', '1')->get();
        // $currentDate = strtotime(\Carbon\Carbon::now());
        $data = Job::with('company', 'company.location')->where('is_active', '1')->where('end_date', '>=', \Carbon\Carbon::now())->whereRelation('company', 'is_active', '=', '1')->get();
        $locations = Location::get();

        return  view('template.jobs_page', compact('data', 'companies', 'locations'));
    }

    public function loadDetails(Request $request)
    {
        $similar_jobs = [];
        $data = Job::with(['company', 'company.location', 'category'])->where('id', $request->id)->first();
        $category = Category::where('id', '=', $data->cate_id)->first();
        $similar_jobs = Category::with(['cat_jobs', 'cat_jobs.company'])->where('id', '=', $data->cate_id)->whereRelation('cat_jobs', 'id', '<>', $request->id)->orderBy('created_at', 'desc')->first();

        // if (!empty($data)) {
        //     echo $data->cat_id;
        //     $similar_jobs = Job::with('company')->where('cate_id', $data->cat_id)->get();
        // }

        // $similar_jobs = Category::with(['cat_jobs', 'cat_jobs->company'])->where()->whereRelation('company', 'is_active', '=', '1')->get();

        // if ($similar_jobs == []) {
        //     echo "inside simmilar";
        // }
        // return  response($data->category);
        return view('template.job_details', compact('data', 'category', 'similar_jobs'));
    }



    public function updatePage(Request $request)
    {

        $data = Job::with(['company', 'category'])->firstWhere('id', $request->id);
        // $job = Job::find($request->id);
        $companies = Company::All();
        $categories = Category::All();

        // $data = [
        //     "company" => $company,
        //     "job" => $job
        // ];
        return view('dashboard.update_job', compact('data', 'companies', 'categories'));
    }
    public function update(Request $request)
    {
        echo $request->id;
        Job::where('id',  $request->id)
            ->update(
                [
                    'title' => $request->title,
                    'cate_id' => $request->category,
                    'company_id' => $request->company,
                    'inerval' => $request->interval,
                    'start_date' => $request->from,
                    'end_date' => $request->to,
                    'requirements' => $request->requirements,

                ]
            );


        return redirect('list_jobs');
    }


    public function activate(Request $request)
    {
        echo $request->id;
        echo $request->active;
        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        Job::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_jobs');
    }


    public function list()
    {
        // $data = Job::select('jobs.*', 'companies.name', 'companies.logo')
        //     ->join('companies', 'jobs.company_id', '=', 'companies.id')
        //     ->get();
        $data = Job::with('company')->orderBy('updated_at', 'desc')->get();

        return view('dashboard.list_jobs')->with("data", $data);
    }



    public function loadAdd()
    {
        $data = Company::all();
        $categories = Category::all();
        return view('dashboard.add_job', compact('data', 'categories'));
    }


    public function add(Request $request)
    {


        Validator::validate($request->all(), [
            'title' => ['required', 'min:3', 'max:50'],

            'requirements' => ['required'],


            // 'title'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            // 'description'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],
            // 'requirements'=>['regex:/(^([a-zA-z]+)(\d+)?$)/'],

        ], [
            'name.required' => 'name is required',
            'name.min' => 'name must be at least 3 letters',
            'name.max' => 'name must be at most 50 letters',

            'requirements.required' => 'requirements is required',

            // 'title.regex'=>'tilte must contain letters',
            //  'description.regex'=>'description must contain letters',
            //  'requirements.regex'=>' requirements must contain letters',
        ]);
        $job = new Job();
        $job->cate_id = $request->category;
        $job->company_id = $request->company;
        $job->title = $request->title;
        $job->inerval = $request->interval;
        $job->start_date = $request->from;
        $job->end_date = $request->to;
        $job->requirements = $request->requirements;

        // $job->company_id=$request->company;

        if ($job->save()) {
            //  return route('companies')->with([ 'success'=>'created successfully' ]);
            $subscribers = Subscriber::with(['subscriberCategories', 'subscriberCategories.category'])->whereRelation('subscriberCategories', 'cate_id', '=', $job->cate_id)->get();

            //foreach from subscribers in this category
            foreach ($subscribers as $subscriber) {
                $emailData = ['job' => $job, 'subscriber_id' => $subscriber->id];
                Mail::to($subscriber->email)->send(new JobMail($emailData));
            }
            return to_route('list_jobs')->with(['success' => 'created successfully']);
        } else {
            return back()->with(['error' => 'failed insertion']);
        }
        // return redirect('list_jobs');
    }
}
