@extends('front.app')
@section('front')
<div class="container content px-4 px-lg-5 mt-6">
    <div class="panel" style="height: auto !important;" id="result123">
        <table class="table redTable2">
        <thead> <tr>
        <th colspan="2" class="no-print"> بيانات الطالب</th>
         </tr>
        </thead>
        <tbody>
        <style>
                    .bg-info{background-color:#5bc0de!important;color:#fff}.bg-warning{background-color:#f0ad4e!important;color:#fff}.bg-primary{background-color:#0275d8!important;color:#fff}.bg-success{background-color:#5cb85c!important;color:#fff}.bg-danger{background-color:#d9534f!important;color:#fff}
        </style>
        <tr>
        <th>اسم الطالب</th>
        <td>{{$result['name']}}</td> </tr>
        <tr> <th>رقم الجلوس</th>
        <td>{{$result['code']}}</td> </tr>
        <tr> <th>المدرسة</th>
        <td>
        {{$result['school_name']}}
        </td> </tr> <tr> <th>الإدارة التعليمية</th>
        <td>
            {{$result['mangment_name']}}    
      </td> </tr>
        <tr> <th>المجموع الكلي</th>
        <td><span style="color:green;">{{$result['total']}}</span></td>
        </tr>
        <tr class="no-print"> <th>شارك نتيجتك</th>
        <td> <div style="text-align: center;text-decoration: none"> 
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://nategmsryh.com/result/show/{{$result['id']}}&amp;hashtag=%23نتائج_الإمتحانات" target="_blank">
            <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: blue;color: white;text-align: center;font-size: 13px;">
            <i class="fa fa-facebook"></i>
          </span>
        </a>
        
        <a href="https://twitter.com/share?url=https://nategmsryh.com/result/show/{{$result['id']}}&amp;text=شاهد&amp;hashtags=نتائج_الإمتحانات" target="_blank">
        <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: #2daae1;color: white;text-align: center;font-size: 13px;">
        <i class="fa fa-twitter"></i>
        </span> </a>
        <a href="whatsapp://send?text=https://nategmsryh.com/result/show/{{$result['id']}}" data-action="share/whatsapp/share" target="_blank">
        <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: #25D366;color: white;text-align: center;font-size: 13px;">
        <i class="fa fa-whatsapp"></i>
        </span>
        </a>
        </div></td>
        </tr>
        </tbody>
        </table>
        <h5>اولا مواد تضاف للمجموع</h5>
        <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">الماده </th>
                <th scope="col">الدرجه</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>اللغة العربية</td>
                <td>{{$result['arabic']}}</td>
              </tr>
              <tr>
                <td>اللغة الانجليزية </td>
                <td>{{$result['english']}}</td>
              </tr>
              <tr>
                <td>الجبر</td>
                <td>{{$result['algebra']}}</td>
              </tr>
      
              <tr>
                <td>الهندسة</td>
                <td>{{$result['engineer']}}</td>
              </tr>
              <tr>
                <td>مجموع الرياضيات</td>
                <td>{{$result['math']}}</td>
              </tr>
      
              <tr>
                <td>العلوم</td>
                <td>{{$result['science']}}</td>
              </tr>
              <tr>
                <td>الدراسات</td>
                <td>{{$result['social']}}</td>
              </tr>
            </tbody>
          </table>
          <h5>ثانيا مواد لا تضاف للمجموع</h5>
          <table class="table table-striped text-center">
              <thead>
                <tr>
                  <th scope="col">الماده </th>
                  <th scope="col">الدرجه</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>دين</td>
                    <td>{{$result['religin']}}</td>
                </tr>
                <tr>
                    <td>تربية فنية</td>
                    <td>{{$result['art']}}</td>
                </tr>
                <tr>
                  <td>الجبر</td>
                  <td>{{$result['algebra']}}</td>
                </tr>
      
                <tr>
                    <td>حاسب آلي </td>
                    <td>{{$result['computer']}}</td>
                <tr>
                    <td>تربية رياضيه</td>
                    <td>{{$result['sport']}}</td>
                </tr>
              </tbody>
            </table>
        </div>
      <div class="row gx-4 gx-lg-5 mt-5">
          <div class="col-md-4 mb-5">
              <div class="card h-100">
                  <div class="card-body">
                      <h3 class="card-title text-center">نتائج المرحله الابتدائية</h3>
                      <div class="list-group">
                          @foreach ($levels_one as $level )
                              <a href="{{route('index.result',$level->id)}}" class="list-group-item list-group-item-action" style="text-decoration: #2daae1 !important">{{$level->name}}</a>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4 mb-5">
              <div class="card h-100">
                  <div class="card-body">
                      <h3 class="card-title text-center">نتائج المرحله الاعدادية</h3>
                      <div class="list-group">
                          @foreach ($levels_two as $level)
                              <a href="{{route('index.result',$level->id)}}" class="list-group-item list-group-item-action" style="text-decoration: #2daae1 !important">{{$level->name}}</a>
                          @endforeach 
                         
                        </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4 mb-5">
              <div class="card h-100">
                  <div class="card-body">
                      <h3 class="card-title text-center">نتائج المرحله الثانويه</h3>
                      <div class="list-group">
                          @foreach ($levels_three as $level )
                              <a href="{{route('index.result',$level->id)}}" class="list-group-item list-group-item-action" style="text-decoration: #2daae1 !important">{{$level->name}}</a>
                          @endforeach
                          
                        </div>
                  </div>
              </div>
          </div>
      </div> 
    </div>
</div>
  @endsection