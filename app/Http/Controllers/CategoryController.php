<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    // public function load(){
    //     $data=Category::all()->where('is_active',1);
    //           return view('template.categories')->with("data",$data);
    //       }
    public function loadAdd()
    {

        return view('dashboard.add_category');
    }

    public function add(Request $request)
    {

        Validator::validate($request->all(), [
            'title' => ['required', 'min:3', 'max:50'],


        ], [
            'title.required' => 'tilte is required',
            'title.min' => 'title must be at least 3 letters',
            'title.max' => 'title must be at most 50 letters',

        ]);
        $category = new Category();
        $category->title = $request->title;

        if ($category->save()) {
            return redirect('list_categories')->with(['success' => 'created successfully']);
        } else {
            return redirect('list_categories')->with(['error' => 'creation failed']);
        }
    }


    public function updatePage(Request $request)
    {
        $data = Category::find($request->id);
        return view('dashboard.update_category')->with("data", $data);
    }

    public function update(Request $request)
    {

        Category::where('id',  $request->id)
            ->update(
                [
                    'title' => $request->title,

                ]
            );


        return redirect('list_categories');
    }


    public function activate(Request $request)
    {

        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        Category::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_categories');
    }






    public function list()
    {
        $data = Category::orderBy('updated_at', 'desc')->get();
        return view('dashboard.list_categories')->with("data", $data);
    }
}
