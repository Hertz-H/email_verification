<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use App\Models\Subscriber;
use Illuminate\Support\Facades\DB;

use App\Models\SubscriberCategory;


class DashboardController extends Controller
{
    function load()
    {
        $jobs = Job::with('company')->where('end_date', '>=', \Carbon\Carbon::now())->where('is_active', '1')->whereRelation('company', 'is_active', '=', '1')->orderBy('created_at', 'desc')->get();
        $companies = Company::where('is_active', '1')->get();
        $categories = Category::where('is_active', '1')->get();
        $subscribers = Subscriber::where('status', '1')->get();
        // $subscriberCategorized = SubscriberCategory::groupBy('cate_id')->get();
        $subscriberCategorized = DB::table('subscriber_categories')
            ->select('cate_id', DB::raw('count(id) as total'))
            ->groupBy('cate_id')
            ->get();
        $categoriesNames = [];
        $subscribersCount = [];
        foreach ($subscriberCategorized as $item) {
            $categoryName = Category::where('id', $item->cate_id)->first();
            array_push($categoriesNames, $categoryName->title);
            array_push($subscribersCount, $item->total);
        }
        // return response($categoriesNames);
        return view('dashboard.index', compact('jobs', 'companies', 'subscribers', 'subscriberCategorized', 'categoriesNames', 'subscribersCount'));
        // return view('dashboard.index');
    }
}
