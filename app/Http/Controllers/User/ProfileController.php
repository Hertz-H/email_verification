<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function updatePage(Request $request)
    {
        $profile = new Profile();
        $data = $profile->where('user_id', Auth::user()->id)->first();


        return view('dashboard.user.update_profile')->with("data", $data);
    }
    public function update(Request $request)
    {
        $imageName = $request->prvImage;

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        // $imageName = time() . '.' . $request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        profile::where('id',  $request->id)
            ->update(
                [
                    'name' => $request->name,
                    'image' => $imageName,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'Bio' => isset($request->bio) ? $request->bio : null

                ]
            );


        return redirect('profile');
    }




    public function list()
    {
        // $data=profile::with('user')->get();
        $data = profile::ALL()->where("user_id", Auth::user()->id)->first();

        return view('dashboard.user.profile')->with("data", $data);
    }
}
