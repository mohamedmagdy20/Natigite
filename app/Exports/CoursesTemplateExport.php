<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CoursesTemplateExport implements FromCollection, WithHeadings
{
  /**
     * @return array
     */
    public function array(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'رقم الجلوس',

            'اسم الطالب',
            
            'اسم المدرسة',
            
            'الاداره',
            
            'الرقم القومي',
            
            'اللغه العربيه',
            
            'اللغه الانجليزيه',
            
            'الدرسات الاجتماعيه',
            
            'الجبر',
            
            'الهندسه',
            
            'الرياضيات',
            
            'العلوم',
            
            'المجموع الكلي',
            
            'الدين',
            
            'الفنون الجميله',
            
            'الحاسب الالي',
            'التربيه الرياضية',

            'الحاله'
        ];
    }
}
