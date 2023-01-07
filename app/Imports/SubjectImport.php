<?php

namespace App\Imports;

use App\Models\Subject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SubjectImport implements ToModel , WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        return new Subject([
            //
            'code' =>$row[0] ?? null,

            'name' => $row[1] ?? null,
            
            'school_name' =>$row[2] ?? null,
            
            'mangment_name'=>$row[3] ?? null,
            
            'national_number'=>$row[4] ?? null,
            
            'arabic'=>$row[5] ?? null,
            
            'english'=>$row[6] ?? null,
            
            'social'=>$row[7] ?? null,
            
            'algebra'=>$row[8] ?? null,
            
            'engineer'=>$row[9] ?? null ,
            
            'math'=>$row[10] ?? null,
            
            'science'=>$row[11] ?? null,
            
            'total'=>$row[12] ?? null,
            
            'religin'=>$row[13] ?? null,
            
            'art'=>$row[14] ?? null,
            
            'computer'=>$row[15] ?? null,
            
            'sport'=>$row[16] ?? null,
            
            'status'=>$row[17] ??null
        ]);
    }
}
