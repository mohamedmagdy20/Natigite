<?php

namespace App\Imports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;

class SubjectImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Subject([
            //
            'name' => $row[0],
            'school_name'=>$row[1],
            'mangment_name'=>$row[2],
            'national_number'=>$row[3],
            'arabic'=>$row[4],
            'english'=>$row[5],
            'social'=>$row[6],
            'algebra'=>$row[8],
            'engineer'=>$row[9],
            'math'=>$row[10],
            'science'=>$row[11],
            'total'=>$row[12],
            'religin'=>$row[13],
            'art'=>$row[14],
            'computer'=>$row[15],
            'sport'=>$row[16],
            'status'=>$row[17]
        ]);
    }
}
