@extends('layouts.app')
@section('content')
<div class="page-content p-2">
    <div class="container-fluid">
        <div class="row mt-3 mb-4 justify-content-center">
            <div class="col-6">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                   <form action="{{route('admin.result')}}" method="GET">
                    <div class="row m-2">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control me-2" placeholder="اسم الطالب">
                        </div>
                        <div class="form-group">
                            <input type="number" name="code"  class="form-control me-2" placeholder="كود الطالب">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-dark" value="ابحث">
                        </div>
                    </div>
                 
                   </form>
                </div>
            </div>

            
        </div>
        <!-- start page title -->
        <div class="row mt-3 mb-4 justify-content-center">
            <div class="col-3">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{route('result.create')}}" class="btn btn-primary">اضافه نتيجه</a>
                </div>
            </div>

            <div class="col-3">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{route('export-result')}}" class="btn btn-warning">استخراج نتيجه</a>
                </div>
            </div>

            {{-- <div class="col-3">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <a href="{{route('result.template')}}" class="btn btn-info"> استخراج ملف</a>
                </div>
            </div> --}}
        </div>                      
<div class="card">
<div class="card-body">


    <table class="table table-bordered table-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>#</th>
            <th>رقم الجلوس</th>
            <th>اسم الطالب</th>
            <th>المدرسه</th>
            <th>الاداره</th>
            <th>الرقم القومي</th>
            <th>العربي</th>
            <th>الانجليزي</th>
            <th>الدرسات</th>
            <th>الجبر</th>
            <th>الهندسة</th>
            <th>الرياضبات</th>
            <th>العلوم</th>
            <th>المجموع الكلي</th>
            <th>الدين</th>
            <th>فنون جميله</th>
            <th>حاسب الي</th>
            <th>تربيه رياضية</th>
            <th>الحاله</th>
        </thead>
        <tbody>
            @foreach ($subjects as $index => $subject )
                <tr>
                    <td>{{$index}}</td>
                    <td>{{$subject->code}}</td>
                    <td>{{$subject->name}}</td>
                    <td>{{$subject->school_name}}</td>
                    <td>{{$subject->mangment_name}}</td>
                    <td>{{$subject->national_number}}</td>
                    <td>{{$subject->arabic}}</td>
                    <td>{{$subject->english}}</td>
                    <td>{{$subject->social}}</td>
                    <td>{{$subject->algebra}}</td>
                    <td>{{$subject->engineer}}</td>
                    <td>{{$subject->math}}</td>
                    <td>{{$subject->science}}</td>
                    <td>{{$subject->total}}</td>
                    <td>{{$subject->religin}}</td>
                    <td>{{$subject->art}}</td>
                    <td>{{$subject->computer}}</td>
                    <td>{{$subject->sport}}</td>
                    <td>{{$subject->status}}</td>
                </tr>    
            @endforeach
            
        
        </tbody>
    </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        <div class="d-flex justify-content-center">
            {!! $subjects->links() !!}
        </div>
     
        
    </div> <!-- container-fluid -->
</div>
@endsection