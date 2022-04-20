<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function post(Request $request)
    {
        $this->validate($request, Practice::$rules);
        $form = $request->all();
        Practice::create($form);
        return view('thanks');
    }
}
