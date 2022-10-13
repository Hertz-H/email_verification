<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use App\Models\Subscriber;
use App\Models\Add;


use Illuminate\Support\Facades\DB;

use App\Models\SubscriberCategory;


class DashboardController extends Controller
{
    function load()
    {
        $now = substr(\Carbon\Carbon::now()->format('Y-m-d'), 0, 10);

        $jobs = Job::with('company')->where('is_active', '1')->whereRelation('company', 'is_active', '=', '1')->orderBy('created_at', 'desc')->get();
        $openedJobs = Job::where('end_date', '>=',  $now)->where('is_active', '1')->whereRelation('company', 'is_active', '=', '1')->orderBy('created_at', 'desc')->get();
        $closedJobs = Job::where('end_date', '<=',  $now)->where('is_active', '1')->whereRelation('company', 'is_active', '=', '1')->orderBy('created_at', 'desc')->get();
        $adds = Add::where('is_active', '1')->orderBy('updated_at', 'desc')->get();
        $companies = Company::where('is_active', '1')->get();
        $categories = Category::where('is_active', '1')->get();
        $subscribers = Subscriber::where('status', '1')->get();
        // $subscriberCategorized = SubscriberCategory::groupBy('cate_id')->get();
        $subscriberCategorized = DB::table('subscriber_categories')
            ->join('categories', 'categories.id', '=', 'subscriber_categories.cate_id')
            ->join('subscribers', 'subscribers.id', '=', 'subscriber_categories.subscriber_id')
            ->select('cate_id', DB::raw('count(subscriber_categories.id) as total'))->where('subscribers.status', '1')->where('categories.is_active', '1')->groupBy('cate_id')->get();
        $categoriesNames = [];
        $subscribersNums = [];
        foreach ($subscriberCategorized as $item) {
            $categoryName = Category::where('id', $item->cate_id)->first();
            array_push($categoriesNames, $categoryName->title);
            array_push($subscribersNums, $item->total);
        }
        // return response($categoriesNames);
        return view('dashboard.index', compact('jobs', 'companies', 'subscribers', 'subscriberCategorized', 'categoriesNames', 'subscribersNums', 'openedJobs', 'closedJobs', 'adds'));
        // return view('dashboard.index');
    }
}
