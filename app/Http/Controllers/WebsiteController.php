<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    //
    public function index()
    {
        $levels_one = DB::table('area')->where('level_id',1)->get();
        $levels_two = DB::table('area')->where('level_id',2)->get();
        $levels_three = DB::table('area')->where('level_id',3)->get();
        $last_update = DB::table('area')->latest()->first();
        return view('website.index',compact('levels_one','levels_two','levels_three','last_update'));
    }

}
