<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\Contact;
use App\Models\User\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function load()
    {


        return view('template.contact_us');
    }
    // public function load()
    // {
    //     $data = Profile::with('contact')->where("user_id", Auth::user()->id)->first();

    //     return view('template.contact_us', compact('data'));
    // }
    public function loadAdd()
    {
        $data = Profile::where("user_id", Auth::user()->id)->first();
        return view('dashboard.user.add_contact', compact('data'));
    }
    public function updatePage(Request $request)
    {

        $data = Profile::with('contact')->where("user_id", Auth::user()->id)->whereRelation('contact', 'id', '=', $request->id)->first();

        return view('dashboard.user.update_contact', compact('data'));
    }
    public function update(Request $request)
    {


        contact::where('id',  $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'link' => $request->link
                ]
            );


        return redirect('list_contacts');
    }


    public function activate(Request $request)
    {
        echo $request->id;
        echo $request->active;
        $active = 1;
        if ($request->active == 1) {
            $active = 0;
        }

        contact::where('id',  $request->id)
            ->update(
                [
                    'is_active' => $active,
                ]
            );
        return redirect('list_contacts');
    }

    public function list()
    {

        $data = Profile::with('contact')->firstWhere("user_id", Auth::user()->id);
        return view('dashboard.user.list_contacts', compact('data'));
    }

    public function add(Request $request)
    {


        Validator::validate($request->all(), [
            'name' => ['required', 'min:3', 'max:50'],
            'link' => ['required', 'min:20', 'max:50']


        ], [
            'name.required' => 'name is required',
            'link.required' => 'link is required',



        ]);

        $contact = new Contact();
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        $contact->profile_id = $userProfile['id'];
        $contact->name = $request->name;
        $contact->link = $request->link;


        if ($contact->save()) {
            return redirect('list_contacts')->with(['success' => 'created successfully']);
        } else {
            return back()->with(['error' => ' creation failed ']);
        }
        //    return redirect('list_contact');
    }
}
