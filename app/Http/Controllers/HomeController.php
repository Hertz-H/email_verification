<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Job;
use App\Models\Company;
use App\Models\Ad;

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
        if(!Hash::check($request->old_password, auth()->user()->password)){
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
    public function load(){
        $job=Job::select('jobs.*','companies.name','companies.logo','companies.location','companies.is_active')
        ->join('companies','jobs.company_id','=','companies.id')
        ->where('companies.is_active','1')
        ->where('jobs.is_active','1')
        ->get();
        $company = Company::All()->where('is_active','1');
        $ad=Ad::all()->where('is_active','1')->take(2);

        $data=[
           'job'=> $job,
           'company'=> $company,
           'ad'=> $ad

        ];
        return view('index')->with('data',$data);
    }




    
}
