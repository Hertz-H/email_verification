<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Enum\FeedbackMessage;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\DB;
use App\Helpers\UploadFile;
use App\Models\Company;
use Yajra\DataTables\Datatables;
use App\Models\Location;

use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function load()
    {
        $data = Company::with('location')->where('is_active', '1')->get();
        return view('template.company_page')->with("data", $data);
    }

    public function loadAdd()
    {
        $locations = Location::All();

        return view('dashboard.add_company', compact('locations'));
    }
    public function index()
    {
        return view('welcome');
    }
    public function listDAtaTable(Request $request)
    {

        if ($request->ajax()) {
            $data = Company::All();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // $data = Company::with('jobs')->get();
        // return response( $data);
        // $data = Company::All();

        // return view('dashboard.company.index')->with("data", $data);
    }



    public function list()
    {

        $data = Company::with('jobs')->orderBy('updated_at', 'desc')->get();
        return view('dashboard.list_companies')->with("data", $data);
    }
    public function updatePage(Request $request)
    {
        $data = Company::with('location')->find($request->id);
        $locations = Location::All();

        return view('dashboard.update_company', compact('data', 'locations'));
    }

    public function update(CompanyRequest $request)
    {
        $request->validated();


        $imageName = $request->prvImage;
        if ($request->logo) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);
        }
        $company = Company::find($request->id);
        $company->name = $request->name;
        $company->logo = $imageName;
        $company->location_id = $request->location_id;
        $company->link = $request->link;
        $company->email = $request->email;
        if ($company->save()) {

            to_route('company.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('company.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function activate(Request $request)
    {
        $company = Company::find($request->id);
        $company->is_active = $request->active == 1 ? 0 : 1;
        if ($company->save()) {

            to_route('company.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('company.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }



    public function add(CompanyRequest $request)
    {

        $request->validated();
        $company = new Company();
        $company->name = $request->name;
        $imageName = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $imageName);
        $company->logo = $imageName;
        $company->location_id = $request->location_id;
        $company->link = $request->link;
        $company->email = $request->email;

        if ($company->save()) {
            return to_route('company.index')->with(['success' => FeedbackMessage::ADD_SUCCESS]);
            return to_route('company.index')->with(['error' => FeedbackMessage::ADD_FAILED]);
        }
    }
}
