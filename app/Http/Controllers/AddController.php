<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;
use Illuminate\Support\Facades\Validator;

class AddController extends Controller
{

    public function loadAdd()
    {

        return view('dashboard.add_ads');
    }

    public function list()
    {
        $data = Add::orderBy('updated_at', 'desc')->get();

        return view('dashboard.list_ads')->with("data", $data);
    }

    public function updatePage(Request $request)
    {
        $data = Add::find($request->id);


        return view('dashboard.update_ad')->with("data", $data);
    }
    public function update(Request $request)
    {
        $imageName = $request->prvImage;

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        Add::where('id',  $request->id)
            ->update(
                [
                    'company' => $request->name,
                    'image' => $imageName,
                    'link' => $request->link,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date

                ]
            );


        return redirect('list_ads');
    }


    public function activate(Request $request)
    {
        echo $request->id;
        echo $request->active;
        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        Add::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_ads');
    }

    public function add(Request $request)
    {
        Validator::validate($request->all(), [
            'name' => ['required', 'min:3', 'max:50'],
            'image' => ['required'],
            'link' => ['required', 'min:10', 'max:50'],
            'start_date' => ['required'],
            'end_date' => ['required'],



        ], [

            'name.required' => 'name is required',
            'name.min' => 'name must be at least 3 letters',
            'name.max' => 'name must be at most 50 letters',
            'image.required' => 'image is required',
            'link.required' => 'link is required',
            'link.min' => 'should insert a link',
            'link.max' => 'name must be at most 50 letters',
            'start_date.required' => 'start date is required',
            'end_date.required' => 'end date is required',


        ]);
        $ad = new Add();
        $ad->company = $request->name;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $ad->image = $imageName;
        $ad->link = $request->link;
        $ad->start_date = $request->start_date;
        $ad->end_date = $request->end_date;
        if ($ad->save()) {
            return redirect('list_ads')->with(['success' => 'created successfully']);
        } else {
            return back();
        }
        return view('dashboard.add_ads');
    }
}
