<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        // return view('dashboard.list_companies')->with("data", $data);
    }



    public function list()
    {

        $data = Company::with('jobs')->orderBy('updated_at', 'desc')->get();

        return view('dashboard.list_companies')->with("data", $data);
        // return response( $data);
        // $data = Company::All();
        // if(isset($data)){
        //     echo "there is data "  ;
        // }
    }
    public function updatePage(Request $request)
    {
        $data = Company::with('location')->find($request->id);
        $locations = Location::All();

        return view('dashboard.update_company', compact('data', 'locations'));
    }
    public function update(Request $request)
    {
        $imageName = $request->prvImage;

        if ($request->logo) {
            $imageName = time() . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $imageName);
        }
        // $request->logo = $request->logo ??  $request->prvImage;
        // echo  $request->logo->extension();
        Company::where('id',  $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'logo' => $imageName,
                    'link' => $request->link,
                    'location_id' => $request->location_id,
                    'email' => $request->email,

                ]
            );


        return redirect('list_companies');
    }


    public function activate(Request $request)
    {
        echo $request->id;
        echo $request->active;
        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        Company::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_companies');
    }













    public function add(Request $request)
    {

        Validator::validate($request->all(), [


            // 'link'=>['regex:/^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/'],
            //['regex:/(^([a-zA-z]+)(\d+)?$)/']
            // 'user_pass'=>['required','min:5']
            'logo' => ['required'],
            'name' => ['required', 'min:3', 'max:50'],


        ], [
            'name.required' => 'name is required',
            'name.min' => 'name must be at least 3 letters',
            'name.max' => 'name must be at most 50 letters',
            //    ' link.regex'=>'link must vaild facebook format '
            'logo.required' => 'logo is required',
        ]);
        $company = new Company();
        $company->name = $request->name;
        $imageName = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $imageName);
        $company->logo = $imageName;

        //  $company->logo=$request->logo;
        $company->location_id = $request->location_id;
        $company->link = $request->link;
        $company->email = $request->email;


        if ($company->save()) {
            return  redirect('list_companies');
            //  return route('companies')->with([ 'success'=>'created successfully' ]);
        } else {
            return back();
        }
        // echo  UploadFile::uploadFile($request->logo);

    }
}
