<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;
use App\Http\Controllers\Enum\FeedbackMessage;
use Illuminate\Support\Facades\Validator;
use App\Models\Location;


class LocationController extends Controller
{
    public function loadAdd()
    {

        return view('dashboard.add_location');
    }

    public function add(LocationRequest $request)
    {
        $request->validated();
        $location = new Location();
        $location->name = $request->name;

        if ($location->save()) {
            to_route('location.index')->with(['success' => FeedbackMessage::ADD_SUCCESS]);
        }
        return to_route('location.index')->with(['error' => FeedbackMessage::ADD_FAILED]);
    }


    public function updatePage(Request $request)
    {
        $data = Location::find($request->id);
        return view('dashboard.update_location')->with("data", $data);
    }

    public function update(LocationRequest $request)
    {
        $request->validated();
        $location =  Location::find($request->id);
        $location->name = $request->name;

        if ($location->save()) {
            to_route('location.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('location.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function activate(Request $request)
    {

        $location = Location::find($request->id);
        $location->is_active = $request->active == 1 ? 0 : 1;
        if ($location->save()) {

            to_route('location.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('location.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }






    public function list()
    {
        $data = Location::orderBy('updated_at', 'desc')->get();
        return view('dashboard.list_locations')->with("data", $data);
    }
}
