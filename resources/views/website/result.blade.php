@extends('front.app')
@section('front')
<div class="container content px-4 px-lg-5 mt-6">

  <!-- Heading Row-->
  <div class="row gx-4 gx-lg-5 align-items-center my-5">
    <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('front/images/1.webp')}}" alt="..." /></div>
    <div class="col-lg-5">
        <h1 class="font-weight-light">     
            أهلاً بكم في موقع <span class="text-info text-bold">نذاكر</span> التعليمي لنتائج الامتحانات
        </h1>
        <p>
            نقدم لكم خدمات متميزة مثل الاستعلام عن نتيجة الشهادة الإعدادية بالإسم ورقم الجلوس.

            نقدم لكم في موقع بوابة نذاكر نتيجة الصف الثالث الإعدادي 2022 بالاسم ورقم الجلوس الترم الأول في جميع المحافظات. كما نقدم للمعلمين وللمدارس حصرياً خدمة عمل شهادة تقدير للطلاب المتفوقين
            
            ترقبوا نتيجة الثانوية العامة 2022 بالاسم ورقم الجلوس مع إمكانية معرفة الترتيب والمجاميع التكرارية للثانوية العامة والعديد من الخدمات المتميزة فقط وحصرياً عبر موقع نذاكر..
            
             
            
            برجاء الانضمام لقناتنا على تليجرام لمتابعة أخبار النتيجة لحظة بلحظة ومتابعة نشر النتائج عبر موقعنا: قناة نذاكر على تليجرام.
            
            موقع نذاكر يقدم نتيجة الشهادة الإعدادية 2022 بالاسم ورقم الجلوس حصرياً مع إمكانية تحميل شهادة تقدير للطلاب المتفوقين.

        </p>
        <a class="btn btn-info" href="#!" style="color: #fff">ابحث عن النتيجة</a>
    </div>
</div>
<div class="alert-message alert alert-block alert-info no-print"><b>
    هام جداً: انضم لقناتنا على تليجرام لمعرفة أخبار النتيجة لحظة بلحظة من هنا: </b><a href="https://t.me/natiganezakr" style="display: inline-block;background-color: white;border-radius: 5px;width: 50px;text-align: center;color: #2daae1;border: 1.5px dotted black;"><i class="fa fa-telegram" aria-hidden="true"></i></a><br>  
    تابعنا عبر فيسبوك : <div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/nezakr" data-width="30" data-layout="button_count" data-action="like" data-size="small" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=676280533135342&amp;container_width=1108&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnezakr&amp;layout=button_count&amp;locale=ar_AR&amp;sdk=joey&amp;share=true&amp;size=small&amp;width=30"><span style="vertical-align: bottom; width: 150px; height: 28px;"><iframe name="ff9be318ca4574" width="30px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v5.0/plugins/like.php?action=like&amp;app_id=676280533135342&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1abfd348946bb%26domain%3Dnatiga.nezakr.net%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fnatiga.nezakr.net%252Ff26b679f8b6645c%26relation%3Dparent.parent&amp;container_width=1108&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnezakr&amp;layout=button_count&amp;locale=ar_AR&amp;sdk=joey&amp;share=true&amp;size=small&amp;width=30" style="border: none; visibility: visible; width: 150px; height: 28px;" class=""></iframe></span></div>
    </div>

<div class="areasearch" style="color: #fff">
<h1 style="color:white">نتيجة {{$level->name}}  بالاسم ورقم الجلوس </h1>
<form class="form" action="{{route('index.result',$level->id)}}" method="get">
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

@if(empty($result))
<div class="container">
    <div class="alert alert-danger">
        لم يتم العثور علي النتيجه برجاء اعاده البحث
    </div>
</div>
@else
<div class="panel" style="height: auto !important;">
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
    <td> <div align="center"> <a href="https://www.facebook.com/sharer.php?u=https://www.natiga-4dk.net/menia/?type=num%26k=4545&amp;hashtag=%23نتائج_الإمتحانات" target="_blank">
    <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: #3c5b9b;color: white;text-align: center;font-size: 13px;">
    <i class="fa fa-facebook"></i>
    </span>
    </a>
    
    <a href="https://twitter.com/share?url=https://www.natiga-4dk.net/menia/?type=num%26k=4545&amp;text=مرحبا!%20شاهد%20نتيجتي%20عبر%20موقع%20نتيجة نت%20 &amp;hashtags=نتائج_الإمتحانات" target="_blank">
    <span style="margin-left: 5px;display: inline-block;height: 24px;width: 24px;line-height: 24px;border-radius: 24px;background-color: #2daae1;color: white;text-align: center;font-size: 13px;">
    <i class="fa fa-twitter"></i>
    </span> </a>
    <a href="whatsapp://send?text=https://www.natiga-4dk.net/menia/?type=num%26k=4545 نتائج الامتحانات" data-action="share/whatsapp/share" target="_blank">
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