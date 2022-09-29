<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Profile;
use Illuminate\Http\Request;
use App\Models\User\Education;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{




    public function loadAdd()
    {
        $data = Profile::where("user_id", Auth::user()->id)->first();

        return view('dashboard.user.add_education', compact('data'));
    }

    public function list()
    {

        $data = Profile::with('education')->where('user_id', Auth::user()->id)->first();

        return view('dashboard.user.list_education', compact('data'));
    }

    public function updatePage(Request $request)
    {
        // $data = Education::find($request->id);
        $data = Profile::with('education')->where("user_id", Auth::user()->id)->whereRelation('education', 'id', '=', $request->id)->first();
        return view('dashboard.user.update_education', compact('data'));
    }
    public function update(Request $request)
    {

        Education::where('id',  $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'degree' => $request->degree,
                    'start_date' => $request->from,
                    'end_date' => $request->to
                ]
            );


        return redirect('list_education');
    }


    public function activate(Request $request)
    {
        echo $request->id;
        echo $request->active;
        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        Education::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_education');
    }



    public function add(Request $request)
    {

        Validator::validate($request->all(), [
            'name' => ['required', 'min:2', 'max:50'],
            'degree' => ['required', 'min:3', 'max:50']


        ], [
            'name.required' => 'name is required',
            'degree.required' => 'degree is required',
            'name.min' => 'name must be at least 2 letters',
            'name.max' => 'name must be at most 50 letters',
            'degree.min' => 'degree must be at least 2 letters',
            'degree.max' => 'degree must be at most 50 letters',


        ]);

        $Education = new Education();
        // $Education->user_id=Auth::user()->id;
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        $Education->name = $request->name;
        $Education->degree = $request->degree;
        $Education->start_date = $request->from;
        $Education->end_date = $request->to;
        $Education->profile_id = $userProfile['id'];

        // response($$Education);

        if ($Education->save()) {

            return redirect('list_education')->with(['success' => 'created successfully']);
        } else {

            return back()->with(['error' => ' creation failed ']);;
        }
        //    return redirect('list_education');
    }
}
