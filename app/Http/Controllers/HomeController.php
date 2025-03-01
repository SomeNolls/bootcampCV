<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\text_fields;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fields = text_fields::all();
        return view('home' , compact('fields'));
    }

    public function update(Request $request)
    {
        $fields =  text_fields::all();
        
        $fields[0]->text = $request->about;
        $fields[1]->text = $request->skills;
        $fields[2]->text = $request->exp;
        $fields[3]->text = $request->edu;
        
        $fields[0]->save();
        $fields[1]->save();
        $fields[2]->save();
        $fields[3]->save();
        return view('/welcome' , compact('fields'));
    }
}
