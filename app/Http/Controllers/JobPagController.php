<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Enum\FeedbackMessage;

use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Mail\JobMail;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use App\Models\Subscriber;
use App\Models\Location;
use Carbon\Carbon;

use Illuminate\Support\Facades\Validator;

class JobPagController extends Controller
{
    public function load()
    {

        $companies = Company::where('is_active', '1')->get();
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

        return view('template.job_details', compact('data', 'category', 'similar_jobs'));
    }



    public function updatePage(Request $request)
    {

        $data = Job::with(['company', 'category'])->firstWhere('id', $request->id);
        $companies = Company::All();
        $categories = Category::All();

        return view('dashboard.update_job', compact('data', 'companies', 'categories'));
    }


    public function update(JobRequest $request)
    {
        $request->validated();
        $job = Job::find($request->id);
        $job->cate_id = $request->category;
        $job->company_id = $request->company;
        $job->title = $request->title;
        $job->inerval = $request->interval;
        $job->start_date = $request->from;
        $job->end_date = $request->to;
        $job->requirements = $request->requirements;
        if ($job->save()) {
            return to_route('list_jobs')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return back()->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function activate(Request $request)
    {
        $job = Job::find($request->id);
        $job->is_active = $request->active == 1 ? 0 : 1;
        if ($job->save()) {
            return to_route('list_jobs')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('list_jobs')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function list()
    {

        $data = Job::with('company')->orderBy('updated_at', 'desc')->get();
        return view('dashboard.list_jobs')->with("data", $data);
    }



    public function loadAdd()
    {
        $data = Company::all();
        $categories = Category::all();
        return view('dashboard.add_job', compact('data', 'categories'));
    }


    public function add(JobRequest $request)
    {
        $request->validated();
        $job = new Job();
        $job->cate_id = $request->category;
        $job->company_id = $request->company;
        $job->title = $request->title;
        $job->inerval = $request->interval;
        $job->start_date = $request->from;
        $job->end_date = $request->to;
        $job->requirements = $request->requirements;



        if ($job->save()) {
            $subscribers = Subscriber::with(['subscriberCategories', 'subscriberCategories.category'])->whereRelation('subscriberCategories', 'cate_id', '=', $job->cate_id)->get();
            foreach ($subscribers as $subscriber) {
                $emailData = ['job' => $job, 'subscriber_id' => $subscriber->id];

                Mail::to($subscriber->email)->send(new JobMail($emailData));
            }
            return to_route('list_jobs')->with(['success' => FeedbackMessage::ADD_SUCCESS]);
        }

        return back()->with(['error' => FeedbackMessage::ADD_FAILED]);
    }
}
