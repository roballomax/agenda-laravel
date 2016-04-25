<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CalendarController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Request $post){
        $this->validate($post, [
            'title' => 'required|min:6|max:255',
            'description' => 'min:6'
        ]);

        return back();

    }

}
