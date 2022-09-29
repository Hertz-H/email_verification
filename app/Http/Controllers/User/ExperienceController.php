<?php

namespace App\Http\Controllers\User;

use App\Models\User\Experience;
use App\Models\User\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function loadAdd()
    {
        $data = Profile::where("user_id", Auth::user()->id)->first();
        return view('dashboard.user.add_experience', compact('data'));
    }
    public function list()
    {
        //* get the profile with the experience of a specific user  
        $data = Profile::with(['experience'])->where("user_id", Auth::user()->id)->first();
        // return response($data);
        // $data = Education::All();

        return view('dashboard.user.list_experiences', compact('data'));
    }

    public function updatePage(Request $request)
    {
        // $data = Profile::with(['experience'])->where("user_id", Auth::user()->id)->where("", $request->id)->first();
        // $data = Profile::with('experience')->where("user_id", Auth::user()->id)->whereRelation('experience', 'id', '=', $request->id)->first();
        // $Experience = $data->experience;
        // $data = Experience::find($request->id);
        $data = Profile::with('experience')->where("user_id", Auth::user()->id)->whereRelation('experience', 'id', '=', $request->id)->first();
        return view('dashboard.user.update_experience', compact('data'));
    }
    public function update(Request $request)
    {

        Experience::where('id',  $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'company' => $request->company,
                    'start_date' => $request->from,
                    'end_date' => $request->to,
                    'description' => $request->description
                ]
            );


        return redirect('list_experiences');
    }


    public function activate(Request $request)
    {
        echo $request->id;
        echo $request->active;
        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        Experience::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_experiences');
    }
    public function add(Request $request)
    {


        Validator::validate($request->all(), [
            'name' => ['required', 'min:2', 'max:50'],
            'company' => ['required', 'min:3', 'max:50'],
            'description' => ['required', 'min:15', 'max:100']


        ], [
            'name.required' => 'name is required',
            'name.min' => 'name must be at least 2 letters',
            'name.max' => 'name must be at most 50 letters',
            'name.required' => 'company is required',
            'company.min' => 'company must be at least 3 letters',
            'company.max' => 'company must be at most 50 letters',
            'description.required' => 'description is required',
            'description.min' => ' must be at least 3 letters',
            'description.max' => ' must be at most 50 letters',

        ]);

        $Experience = new Experience();
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        $Experience->profile_id = $userProfile['id'];
        $Experience->name = $request->name;
        $Experience->company = $request->company;
        $Experience->description = $request->description;
        $Experience->start_date = $request->from;
        $Experience->end_date = $request->to;

        if ($Experience->save()) {
            return redirect('list_experiences')->with(['success' => 'created successfully']);
        } else {
            return back()->with(['error' => ' creation failed ']);;
        }
    }
}
