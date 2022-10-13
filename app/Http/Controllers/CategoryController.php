<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Enum\FeedbackMessage;

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

    public function add(CategoryRequest $request)
    {
        $request->validated();
        $category = new Category();
        $category->title = $request->title;

        if ($category->save()) {
            to_route('category.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('category.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function updatePage(Request $request)
    {
        $data = Category::find($request->id);
        return view('dashboard.update_category')->with("data", $data);
    }

    public function update(CategoryRequest $request)
    {
        $request->validated();
        $category = Category::find($request->id);
        $category->title = $request->title;
        if ($category->save()) {
            to_route('category.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('category.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }


    public function activate(Request $request)
    {
        $category = Category::find($request->id);
        $category->is_active = $request->active == 1 ? 0 : 1;
        if ($category->save()) {

            to_route('category.index')->with(['success' => FeedbackMessage::UPDATE_SUCCESS]);
        }
        return to_route('category.index')->with(['error' => FeedbackMessage::UPDATE_FAILED]);
    }

    public function list()
    {
        $data = Category::orderBy('updated_at', 'desc')->get();
        return view('dashboard.list_categories')->with("data", $data);
    }
}
