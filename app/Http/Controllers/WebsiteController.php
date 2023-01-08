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
        $levels_one = DB::table('area')->where('level_id',4)->get();
        $levels_two = DB::table('area')->where('level_id',5)->get();
        $levels_three = DB::table('area')->where('level_id',6)->get();
        $last_update = DB::table('area')->latest()->first();
        return view('website.index',compact('levels_one','levels_two','levels_three','last_update'));
    }

    public function result(Request $request,$id)
    {
        $levels_one = DB::table('area')->where('level_id',4)->get();
        $levels_two = DB::table('area')->where('level_id',5)->get();
        $levels_three = DB::table('area')->where('level_id',6)->get();
       
        $level =DB::table('area')->where('id',$id)->first();
        // return $level;
        $query = Subject::query();

            if($request->type == 'num')
            {
                $result = $query->where('code',$request->result)->where('area_id',$id)->latest()->first();
                return view('website.result',compact('result','level','levels_one','levels_two','levels_three'));
            }
            if($request->type == 'ename')
            {
                $result = $query->where('name',$request->result)->where('area_id',$id)->latest()->first();
                return view('website.result',compact('result','level','levels_one','levels_two','levels_three'));
            }
            $result ='';
        return view('website.result',compact('result','level','levels_one','levels_two','levels_three'));
    }

}
