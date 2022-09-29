<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Location;


class LocationController extends Controller
{
    public function loadAdd()
    {

        return view('dashboard.add_location');
    }

    public function add(Request $request)
    {

        Validator::validate($request->all(), [
            'name' => ['required', 'min:3', 'max:50'],
        ], [
            'name.required' => 'name is required',
            'name.min' => 'name must be at least 3 letters',
            'name.max' => 'name must be at most 50 letters',

        ]);
        $location = new Location();
        $location->name = $request->name;

        if ($location->save()) {
            // return response($location);
            return redirect('list_locations')->with(['success' => 'created successfully']);
        } else {
            // return response($location);
            return redirect('list_locations')->with(['error' => 'creation failed']);
        }
    }


    public function updatePage(Request $request)
    {
        $data = Location::find($request->id);
        return view('dashboard.update_location')->with("data", $data);
    }

    public function update(Request $request)
    {

        Location::where('id',  $request->id)
            ->update(
                [
                    'name' => $request->name,

                ]
            );


        return redirect('list_locations');
    }


    public function activate(Request $request)
    {

        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        Location::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_locations');
    }






    public function list()
    {
        $data = Location::orderBy('updated_at', 'desc')->get();
        return view('dashboard.list_locations')->with("data", $data);
    }
}
