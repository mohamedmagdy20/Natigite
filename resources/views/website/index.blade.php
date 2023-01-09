@extends('front.app')
@section('front')
<div class="container content px-4 px-lg-5 mt-6">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('front/images/1.webp')}}" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">     
                أهلاً بكم في موقع <span class="text-info text-bold">نتيجتي</span> التعليمي لنتائج الامتحانات
            </h1>
            <p>
                نقدم لكم خدمات متميزة مثل الاستعلام عن نتيجة الشهادة الإعدادية بالإسم ورقم الجلوس.

                نقدم لكم في موقع بوابة نذاكر نتيجة الصف الثالث الإعدادي 2023 بالاسم ورقم الجلوس الترم الأول في جميع المحافظات. كما نقدم للمعلمين وللمدارس حصرياً خدمة عمل شهادة تقدير للطلاب المتفوقين
                
                ترقبوا نتيجة الثانوية العامة 2023 بالاسم ورقم الجلوس مع إمكانية معرفة الترتيب والمجاميع التكرارية للثانوية العامة والعديد من الخدمات المتميزة فقط وحصرياً عبر موقع نذاكر..  
                برجاء الانضمام لقناتنا على تليجرام لمتابعة أخبار النتيجة لحظة بلحظة ومتابعة نشر النتائج عبر موقعنا: قناة نذاكر على تليجرام.
                
                موقع نذاكر يقدم0 نتيجة الشهادة الإعدادية 2023 بالاسم ورقم الجلوس حصرياً مع إمكانية تحميل شهادة تقدير للطلاب المتفوقين.

            </p>
            <a class="btn btn-info" href="{{route('index')}}" style="color: #fff">ابحث عن النتيجة</a>
        </div>
    </div>
    <div class="alert-message alert alert-block alert-info no-print"><b>
        هام جداً: انضم لقناتنا على تليجرام لمعرفة أخبار النتيجة لحظة بلحظة من هنا: </b><a href="{{route('index')}}" style="display: inline-block;background-color: white;border-radius: 5px;width: 50px;text-align: center;color: #2daae1;border: 1.5px dotted black;"><i class="fa fa-telegram" aria-hidden="true"></i></a><br>  
        تابعنا عبر فيسبوك : <div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/"><i class="fa fa-facebook"></i> </div>
        </div>
  
        <!-- Call to Action-->
    {{-- <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
    </div> --}}
    <!-- Content Row-->
    <div class="row gx-4 gx-lg-5">
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

    <div class="col-md-12 mb-5">
        <div class="card h-100" style="background-color:#b6effb !important ">
            <div class="card-body">
                <h3 class="card-title ">اخر الاخبار</h3>
                @if (empty($last_update))
                <p>ظهرت على موقع نتيجتي حصرياً 
                    <a href="{{route('index.result',$last_update->id)}}">{{$last_update->name}}
                    </a>..

                    ونقدم لكم أيضاً في موقع نتيجتي وحصرياً نتيجة الثانوية العامة 2023 بالاسم ورقم الجلوس مع إمكانية معرفة الترتيب والمجاميع التكرارية للثانوية العامة والعديد من الخدمات المتميزة..</p>
                    
                @else
                <p>
                    ترقبو النتائج قريبا 
                    ونقدم لكم أيضاً في موقع نتيجتي وحصرياً نتيجة الثانوية العامة 2023 بالاسم ورقم الجلوس مع إمكانية معرفة الترتيب والمجاميع التكرارية للثانوية العامة والعديد من الخدمات المتميزة..
                   
                </p>                    
                @endif
            
                </div>
        </div>
    </div>

    
</div>
@endsection