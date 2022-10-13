<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Add;
use App\Http\Requests\AdRequest;
use App\Http\Controllers\Enum\FeedbackMessage;
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
    public function update(AdRequest $request)
    {

        $imageName = $request->prvImage;
        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }


        $ad = Add::find($request->id);
        $ad->company = $request->name;
        $ad->image = $imageName;
        $ad->link = $request->link;
        $ad->start_date = $request->start_date;
        $ad->end_date = $request->end_date;


        if ($ad->save()) {
            to_route('ad.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('ad.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function activate(Request $request)
    {
        $ad = Add::find($request->id);
        $ad->is_active = $request->active == 1 ? 0 : 1;
        if ($ad->save()) {

            to_route('ad.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('ad.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }

    public function add(AdRequest $request)
    {
        $request->validated();
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
            to_route('ad.index')->with(['success' => FeedbackMessage::ADD_SUCCESS]);
        }
        return to_route('ad.index')->with(['error' => FeedbackMessage::ADD_FAILED]);
    }
}
