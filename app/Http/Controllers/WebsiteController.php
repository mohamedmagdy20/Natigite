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
                if($result != null)
                {
                    $result = [$result];
                }else{
                    $result = '';
                }
                return view('website.result',compact('result','level','levels_one','levels_two','levels_three'));
            }
            if($request->type == 'ename')
            {
                $result = $query->where('area_id',$id)->where('name', 'like', '%' . $request->result . '%')->paginate(10);
                return view('website.result',compact('result','level','levels_one','levels_two','levels_three'));
            }
            $result ='';
        return view('website.result',compact('result','level','levels_one','levels_two','levels_three'));
    }

    public function show($id)
    {
        $levels_one = DB::table('area')->where('level_id',4)->get();
        $levels_two = DB::table('area')->where('level_id',5)->get();
        $levels_three = DB::table('area')->where('level_id',6)->get();
        $result = Subject::find($id);
        return view('website.show',compact('result','levels_one','levels_two','levels_three'));
    }

}
