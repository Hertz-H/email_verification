<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Job;
use App\Models\Company;

use App\Models\Category;
use App\Models\Add;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */




    /**----------------------
     *  load updatePassword page
     *------------------------**/
    public function changePassword()
    {
        return view('auth.change_password');
    }





    /**----------------------
     *    updatePassword
     *------------------------**/
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }


    /**----------------------
     *    load the rest password
     *------------------------**/
    public function index()
    {
        return view('home');
    }

    /**----------------------
     *    load the home front 
     *------------------------**/
    public function load()
    {
        // $job=Job::select('jobs.*','companies.name','companies.logo','companies.location','companies.is_active')
        // ->join('companies','jobs.company_id','=','companies.id')
        // ->where('companies.is_active','1')
        // ->where('jobs.is_active','1')
        // ->get();
        $now = substr(Carbon::now()->format('Y-m-d'), 0, 10);
        $job = Job::with('company', 'company.location')->where('end_date', '>=', $now)->where('is_active', '1')->whereRelation('company', 'is_active', '=', '1')->orderBy('created_at', 'desc')->take(8)->get();
        $company = Company::with('location')->where('is_active', '1')->take(6)->get();
        $categories = Category::where('is_active', '1')->get();
        // $ad = Add::where('start_date', '<=', \Carbon\Carbon::now())->where('end_date', '>=', \Carbon\Carbon::now())->where('is_active', '1')->orderBy('created_at', 'desc')->take(2)->get();
        // dd($now);
        $ad = Add::where('end_date', '>=', $now)->where('is_active', '1')->orderBy('created_at', 'desc')->take(2)->get();
        // $ad = Add::where('is_active', '1')->orderBy('created_at', 'desc')->take(2)->get();


        $data = [
            'job' => $job,
            'company' => $company,
            'ad' => $ad,
            'category' => $categories

        ];
        return view('index')->with('data', $data);
        // return response($ad);
    }
}
