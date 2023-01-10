@extends('front.app')
@section('front')
<div class="container content px-4 px-lg-5 mt-6">

  <!-- Heading Row-->
  <div class="row gx-4 gx-lg-5 align-items-center my-5">
    <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('front/images/1.webp')}}" alt="..." /></div>
    <div class="col-lg-5">
        <h1 class="font-weight-light">     
            أهلاً بكم في موقع <span class="text-info text-bold">نتائج مصرية</span> التعليمي لنتائج الامتحانات
        </h1>
        <p>
          قدم لكم نتائج الشهادة الابتدائية والشهادة الاعدادية بالاسم ورقم الجلوس جميع محافظات مصر الفصل الدراسي الاول 2022-2023، مع امكانية البحث برقم الجلوس او الاسم وعرض النتائج بالاضافة الي عمل شهادات تقدير للطلاب المتفوقين وتراقبوا نتيجة الشهادة الاعدادية بالاسم خلال الساعات القادمة في جميع المحافظات
        </p>
        <a class="btn btn-info" href="#!" style="color: #fff">ابحث عن النتيجة</a>
    </div>
</div>
<div class="alert-message alert alert-block alert-info no-print"><b>
  هام جداً: انضم لصفحتنا على الفيس بوك لمعرفة أخبار النتيجة لحظة بلحظة من هنا: </b><a href="https://www.facebook.com/nategmsryh" style="display: inline-block;background-color: white;border-radius: 50%;width: 30px;text-align: center;color: blue;border: 1.5px dotted black;"><i class="fa fa-facebook" aria-hidden="true"></i></a><br>  
  </div>

<div class="areasearch" style="color: #fff">
<h1 style="color:white" id="natigte">نتيجة {{$level->name}}  بالاسم ورقم الجلوس </h1>
<form class="form" action="{{route('index.result',$level->id)}}#result123" method="get" >
    @csrf
<div class="form__control">
{{-- <input type="hidden" name="c" value="Alexandria"> --}}
<span class="searchBy">البحث بـ </span>
<label class="containerb">
 <input type="radio" checked="checked" value="num" name="type">
 <span class="checkmark"></span> <span class="text"> رقم الجلوس</span>
</label>
<label class="containerb">
 <input type="radio" name="type" value="ename"> 
 <span class="checkmark"></span> <span class="text">الاسم </span>
</label>
</div>  	

<div class="input-group form__search">
<input name="result" class="form-control" value="" placeholder="رقم الجلوس أو كلمة البحث.." type="text">
<span class="input-group-btn">
<button class="btn btn-dark" type="submit"> <i class="fa fa-search"></i> </button>
</span>
</div>
</form></div>

@if(!empty($result))
@if (count($result) == 1)
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
  <td>{{$result[0]['name']}}</td> </tr>
  <tr> <th>رقم الجلوس</th>
  <td>{{$result[0]['code']}}</td> </tr>
  <tr> <th>المدرسة</th>
  <td>
  {{$result[0]['school_name']}}
  </td> </tr> <tr> <th>الإدارة التعليمية</th>
  <td>
      {{$result[0]['mangment_name']}}    
</td> </tr>
  <tr> <th>المجموع الكلي</th>
  <td><span style="color:green;">{{$result[0]['total']}}</span></td>
  </tr>
  <tr class="no-print"> <th>شارك نتيجتك</th>
  <td> <div style="text-align: center;text-decoration: none"> 
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://nategmsryh.com/result/{{$result[0]['area_id']}}?type={{$_GET['type']}}&result={{$_GET['result']}}&amp;hashtag=%23نتائج_الإمتحانات" target="_blank">
      <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: blue;color: white;text-align: center;font-size: 13px;">
      <i class="fa fa-facebook"></i>
    </span>
  </a>
  
  <a href="https://twitter.com/share?url=https://nategmsryh.com/result/{{$result[0]['area_id']}}?type={{$_GET['type']}}&result={{$_GET['result']}}&amp;text=شاهد&amp;hashtags=نتائج_الإمتحانات" target="_blank">
  <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: #2daae1;color: white;text-align: center;font-size: 13px;">
  <i class="fa fa-twitter"></i>
  </span> </a>
  <a href="whatsapp://send?text=https://nategmsryh.com/result/{{$result[0]['area_id']}}?type={{$_GET['type']}}&result={{$_GET['result']}}" data-action="share/whatsapp/share" target="_blank">
  <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: #25D366;color: white;text-align: center;font-size: 13px;">
  <i class="fa fa-whatsapp"></i>
  </span>
  </a>
  </div></td>
  </tr>
  </tbody>
  </table>
  <h5>اولا مواد تضاف للمجموع</h5>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">الماده </th>
          <th scope="col">الدرجه</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>اللغة العربية</td>
          <td>{{$result[0]['arabic']}}</td>
        </tr>
        <tr>
          <td>اللغة الانجليزية </td>
          <td>{{$result[0]['english']}}</td>
        </tr>
        <tr>
          <td>الجبر</td>
          <td>{{$result[0]['algebra']}}</td>
        </tr>

        <tr>
          <td>الهندسة</td>
          <td>{{$result[0]['engineer']}}</td>
        </tr>
        <tr>
          <td>مجموع الرياضيات</td>
          <td>{{$result[0]['math']}}</td>
        </tr>

        <tr>
          <td>العلوم</td>
          <td>{{$result[0]['science']}}</td>
        </tr>
        <tr>
          <td>الدراسات</td>
          <td>{{$result[0]['social']}}</td>
        </tr>
      </tbody>
    </table>
    <h5>ثانيا مواد لا تضاف للمجموع</h5>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">الماده </th>
            <th scope="col">الدرجه</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              <td>دين</td>
              <td>{{$result[0]['religin']}}</td>
          </tr>
          <tr>
              <td>تربية فنية</td>
              <td>{{$result[0]['art']}}</td>
          </tr>
          <tr>
            <td>الجبر</td>
            <td>{{$result[0]['algebra']}}</td>
          </tr>

          <tr>
              <td>حاسب آلي </td>
              <td>{{$result[0]['computer']}}</td>
          <tr>
              <td>تربية رياضيه</td>
              <td>{{$result[0]['sport']}}</td>
          </tr>
        </tbody>
      </table>
  </div>
@elseif (count($result) > 1)
@foreach ($result as $r )
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
  <td><a href="{{route('result.show',$r['id'])}}">{{$r['name']}} </a></td> </tr>
  <tr> <th>رقم الجلوس</th>
  <td>{{$r['code']}}</td> </tr>
  <tr> <th>المدرسة</th>
  <td>
  {{$r['school_name']}}
  </td> </tr> <tr> <th>الإدارة التعليمية</th>
  <td>
      {{$r['mangment_name']}}    
</td> </tr>
  <tr> <th>المجموع الكلي</th>
  <td><span style="color:green;">{{$r['total']}}</span></td>
  </tr>
  </tbody>
  </table>
@endforeach
<div class="d-flex justify-content-center">
  {!! $result->withQueryString()->links() !!}
</div>
@endif
@endif
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


@endsection