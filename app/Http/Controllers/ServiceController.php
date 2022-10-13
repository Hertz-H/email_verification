<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\ServiceRequest;
use App\Http\Controllers\Enum\FeedbackMessage;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function load()
    {
        $data = Service::all()->where('is_active', 1);
        return view('template.services')->with("data", $data);
    }
    public function loadAdd()
    {

        return view('dashboard.add_service');
    }
    public function add(ServiceRequest $request)
    {
        $request->validated();
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;

        if ($service->save()) {
            to_route('service.index')->with(['success' => FeedbackMessage::ADD_SUCCESS]);
        }
        return to_route('service.index')->with(['error' => FeedbackMessage::ADD_FAILED]);
    }


    public function updatePage(ServiceRequest $request)
    {
        $data = Service::find($request->id);
        return view('dashboard.update_service')->with("data", $data);
    }
    public function update(ServiceRequest $request)
    {
        $request->validated();
        $service = Service::find($request->id);
        $service->title = $request->title;
        $service->description = $request->description;

        if ($service->save()) {
            to_route('service.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('service.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function activate(Request $request)
    {

        $service = Service::find($request->id);
        $service->is_active = $request->active == 1 ? 0 : 1;
        if ($service->save()) {

            to_route('service.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('service.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }






    public function list()
    {
        $data = Service::orderBy('updated_at', 'desc')->get();
        // $data=Service::all()->where("is_active",1);

        return view('dashboard.list_services')->with("data", $data);
    }
}
