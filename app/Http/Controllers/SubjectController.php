<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Imports\SubjectImport;
use App\Exports\ExportSubject;
use App\Exports\CoursesTemplateExport;

use Maatwebsite\Excel\Facades\Excel;
class SubjectController extends Controller
{
    //
    public function index()
    {
        $subjects = Subject::paginate(15);
        return view('result.index',compact('subjects'));
    }

    public function create()
    {
        return view('result.create');
    }
    public function import(Request $request)
    {
        $request->validate([
            'file'=>'required|file'
        ]);
        set_time_limit(300);
        Excel::import(new SubjectImport, $request->file('file')->store('files'));

        return back()->with('success','تم رفع النتيجه بنجاح');
    }

    public function export(Request $request)
    {
        return Excel::download(new ExportSubject, 'result.xlsx');
    }

    public function downloadResultTemplate()
    {
        return Excel::download(new CoursesTemplateExport(), 'مثال.xlsx');
    }
}
