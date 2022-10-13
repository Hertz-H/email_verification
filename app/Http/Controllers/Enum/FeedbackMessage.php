<?php

namespace App\Http\Controllers\Enum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackMessage extends Controller
{
    const ADD_SUCCESS = "Created successfully";
    const UPDATE_SUCCESS = "Updated successfully";
    const ADD_FAILED = " Create  Failed";
    const UPDATE_FAILED = " Update  Failed";
}
