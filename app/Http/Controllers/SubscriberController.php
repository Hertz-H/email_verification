<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
use App\Models\SubscriberCategory;
use App\Mail\SubscriptionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\JobMail;



class SubscriberController extends Controller
{
    /**----------------------
     *    subscribe a visitor to newsLetter 
     * 
     *------------------------**/
    public function subscribeToNewsLetter(Request $request)
    {
        // try {
        Validator::validate($request->all(), [

            'email' => ['required', 'email'],
            'cate_id' => ['required'],


        ], [
            'email.required' => " email is required",
            'cate_id.required' => 'category is required ',
        ]);
        // } catch (\Illuminate\Validation\ValidationException $th) {
        //     return response($th->validator->errors());
        // }
        // $subscriber = new Subscriber();
        // $subscriber->email = $request->email;
        // $subscriber->save();
        $subscriber = Subscriber::firstOrCreate(
            ['email' => $request->email]
        );

        if (SubscriberCategory::where('subscriber_id', $subscriber->id)->where('cate_id', $request->cate_id)->exists()) {
            return response(['message' => 'you have aleardy subscribed in this category']);
            // 
            // return response()->json(
            //     [
            //         'success' => false,
            //         'error' => ['you have aleardey subscribed in this category']
            //     ],
            //     400
            // );
            // return response()->json([
            //     'success' => false,
            //     'error' => []
            // ], 400);
        } else {
            $subscriberCategory = SubscriberCategory::firstOrCreate(
                [
                    'subscriber_id' => $subscriber->id,
                    'cate_id' => $request->cate_id
                ]
            );
            if (!is_null($subscriberCategory)) {
                return response(['message' => 'subscribed successfully.']);
            } else {
                return response(['message' => 'failed.']);
            }
        }

        // $subscriberCategory->subscriber_id = $subscriber->id;
        // $subscriberCategory->cate_id = $request->cate_id;
        // if ($subscriberCategory->save()) {
        // return back();
        // return response($subscriber);
        // $email_data = array('full_name' => $request->name, 'activation_url' => URL::to('/') . "/verify_email/" . $token);
        // Mail::to($request->email)->send(new WelcomeEmail($email_data));
        // Mail::to($request->email)->send(new SubscriptionMail($request->cate_id));
        // Mail::to($request->email)->send(new JobMail($request->cate_id));
        // }
    }
    public function optAction(Request $request)
    {

        $subscriber = Subscriber::find($request->id);
        if ($subscriber->status == 1) {
            $subscriber->status = 0;
        } else {
            $subscriber->status = 1;
        }
        if ($subscriber->save()) {
        }
    }
}
