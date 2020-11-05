@extends('master.header')
@section('content')

<section id="breadcrumbs" class="breadcrumbs rtl " >
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>القبول و التسجيل</h2>
          <ol>
            <li><a href="/">الصفحة الرئيسية</a></li>
            <li>قواعد عامة للطالب</li>
          </ol>
        </div>

      </div>
    </section>

<section class="hero-wrap hero-wrap-2 pt-0" style="margin-bottom: 90px;">

 <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-12 ftco-animate pb-5 text-center fadeInUp ftco-animated">
      <h6 class="mb-3 bread application-h6 text-center"> التسجيل</h6>
      <h4 class="mb-3 bread application-h text-center" style="color: #0044cc!important;">أهلاً بكم في مدرستنا </h4>
    <h4 class="mb-3 bread application-h text-center" style="font-size: 24px !important;">قواعد عامة للطالب</h4>
      </div>
      </div>

</div>

</section>
<div class="container ">
        <div class="row rtl">
          <div class="col-md-12">
               <h4 class="mb-3 bread application-h" style="font-size: 24px !important;">لائحة إدارة سلوك الطلبة بالتعلم عن بعد في مؤسسات التعليم العام</h4>
             </div>
                  <div class="col-md-3 mt-5">
                  <ul class="nav nav-pills nav-fill d-md-flex d-block">
                    <li class="nav-item px-lg-2 mb-md-0 mb-2">
                      <a class="nav-link active py-2" data-toggle="tab" href="#all"> جميع المخالفات</a>
                    </li>

                    <li class="nav-item px-lg-2 mb-md-0 mb-2">
                      <a class="nav-link py-2" data-toggle="tab" href="#first">مخالفات الدرجة الأولى<br>( البسيطة )</a>
                    </li>
                       <li class="nav-item px-lg-2  mb-md-0 mb-2">
                      <a class="nav-link  py-2" data-toggle="tab" href="#second">مخالفات الدرجة التانية <br>( متوسطة الخطورة )</a>
                    </li>
                    <li class="nav-item px-lg-2  mb-md-0 mb-2">
                      <a class="nav-link py-2" data-toggle="tab" href="#third">مخالفات الدرجة الثالثة <br>( الخطيرة )</a>
                    </li>
                    <li class="nav-item px-lg-2  mb-md-0 mb-2">
                      <a class="nav-link py-2" data-toggle="tab" href="#fourth">مخالفات الدرجة الرابعة <br>( شديدة الخطورة )</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="tab-content rounded mt-2">

                    <div class="tab-pane  container p-0 active" id="all">
                      <section id="testimonials" class="testimonials section-bg pt-0">

  <div class="container">
        <div class="row">


          <div class="col-lg-6" data-aos="fade-up">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة الأولى( البسيطة )</h3>
              <h4>مدرسة الأقصى</h4>
              <p>
               
1.1-تكرار التأخر عن الحضور في الوقت المحدد لبدء الحصة الدراسية ودون عذر مقبول.

<br>
1.2- عدم اتباع قواعد السلوك أثناء حضور الحصة الدراسية خلال البث المباشر
<br>
 
1.3-( عدم المحافظة على الهدوء واالانضباط اثناء الحصة وإصدار أصوات غير لائقة داخل الصف أو خارجه.

<br>

1.4 - سوء  استعمال الأجهزة الإلكترونية كالحاسوب اللوحي وغيرها أثناء الحصة الدراسية عن بعد 

<br>

ويشمل ذلك ممارسة الألعاب الإلكترونية ووضع السماعات في الصف.

              </p>
            </div>

          </div>
          <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>       الإجراءات : حسم 4 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>
              <p>


<span class="color-red">في حال ارتكابها:</span> تنبيه الطالب على الخاص
<br>

التكرار الأول: الاتصال بولي الامر وتسجيل ذلك
<br>

التكرار الثالث: ابلاغ ولي الأمر و حسم الدرجة كاملة
<br>

التكرار التاني: حسم درجتين

              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة التانية ( متوسطة الخطورة )</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
               
2.1 -  عدم حضور (3  ) حصص دراسية بدون عذر مقبول ليوم دراسي كامل اثناء التعلم عن بعد.
<br>

2.2 - التحريض على الشجار أو تهديد أو تخويف أي من الزملاء اثناء حصص التعلم عن بعد
<br>

2.3 - إحضار الهاتف النقال أو إساءة استعمال أي من وسائل الاتصال
<br>

2.4 - الإساءة اللفظية أو التطاول على الطلبة أو العاملين أو ضيوف المدرسة الأفتراضية.

              </p>
            </div>
          </div>

               <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>الإجراءات : حسم 8 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
            
<span class="color-red">في حال ارتكابها:</span> ابلاغ ولي الأمر وتسجيل ذلك
<br>

التكرار الأول: حسم نصف الدرجة ومقدارها 4درجات
<br>

التكرار التاني: ابلاغ ولي الأمر وحسم الدرجة كاملة ومقدارها  8درجات

              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة الثالثة ( الخطيرة )</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
                
3.1- التنمر بأنواعه وأشكاله المختلفة

<br>

3.2- محاولة التشهير بالزملاء والعاملين بالمدرسة في وسائل التواصل الاجتماعي والإساءة لهم.
<br>

3.3 - انتحال صفة الغير في المعاملات المدرسية، أو تزوير الوثائق الخاصة بالمدرسة.

<br>

3.4 - إتلاف أو تخريب اجهزة الحاسوب الآلي او البرامج (الخاصة بالمبادرة).
<br>


3.5 -  تصوير وحيازة وتداول صور العاملين بالمدرسة والطلبة دون إذن منهم.

              </p>
            </div>
          </div>

                <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
              <h3>الإجراءات : حسم 12 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
             
<span class="color-red">في حال ارتكابها:</span> حسم الدرجة كاملا وابلاغ ولي الأمر واتخاد الإجراءات

              </p>
            </div>
          </div>


             <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة الرابعة ( شديدة الخطورة )</h3>
              <h4>مدرسة الأقصى</h4>

              <p>

4.1 - استخدام  وسائل الأتصال ( الخاصة بالمبادرة )أو التواصل الأجتماعي في أغراض غير قانونية 
     
        أو غير أخلاقية أو فيما يسيئ للمؤسسة التعليمية أو العاملين بها أو للأخرين.
<br>

4.2 - إرتكاب الجرائم الإلكترونية أو المشاركة فيها او التستر عليها.
<br>

4.3 - جلب وحيازة وعرض وترويج مواد إعلامية أو إلكترونية غير مرخص بها، 
       
        ومخالفة القيم والأخلاق والآداب والنظام العام، وما يخدش الحياء العام.

<br>

4.4 - تسريب أسئلة الإمتحانات أو المشاركة فيها   بأي شكل من الأشكال.

<br>

4.5 - التعرض بالإساءة للرموز السياسية أو الدينية أو الاجتماعية بالدولة

<br>

4.6 - بث أو نشر أفكار ومعتقدات متطرفة أو تكفيرية أو إلحادية أو مسيئة لنظم المجتمع السياسية والاجتماعية.


              </p>
            </div>
          </div>

                <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
              <h3>الإجراءات : حسم 12 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
             

<span class="color-red">في حال ارتكابها:</span> رسوب في مادة السلوك وتحويل الحالة الى ادارة الشئون القانوية بالوزارة
<br>
                     
                      ايقاف فوري للطالب عن الدراسة وابلاغ ولي الأمر   


              </p>
            </div>
          </div>



        </div>

      </div>
    </section><!-- End Testimonials Section -->

                    </div>

                     <div class="tab-pane  container p-0 " id="first">
                      <section id="testimonials" class="testimonials section-bg pt-0">

  <div class="container">
        <div class="row">
                        <div class="col-lg-6" data-aos="fade-up">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة الأولى( البسيطة )</h3>
              <h4>مدرسة الأقصى</h4>
              <p>
               
1.1-تكرار التأخر عن الحضور في الوقت المحدد لبدء الحصة الدراسية ودون عذر مقبول.

<br>
1.2- عدم اتباع قواعد السلوك أثناء حضور الحصة الدراسية خلال البث المباشر
<br>
 
1.3-( عدم المحافظة على الهدوء واالانضباط اثناء الحصة وإصدار أصوات غير لائقة داخل الصف أو خارجه.

<br>

1.4 - سوء  استعمال الأجهزة الإلكترونية كالحاسوب اللوحي وغيرها أثناء الحصة الدراسية عن بعد 

<br>

ويشمل ذلك ممارسة الألعاب الإلكترونية ووضع السماعات في الصف.

              </p>
            </div>

          </div>
          <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>       الإجراءات : حسم 4 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>
              <p>


<span class="color-red">في حال ارتكابها:</span> تنبيه الطالب على الخاص
<br>

التكرار الأول: الاتصال بولي الامر وتسجيل ذلك
<br>

التكرار الثالث: ابلاغ ولي الأمر و حسم الدرجة كاملة
<br>

التكرار التاني: حسم درجتين

              </p>
            </div>
          </div>

                    </div>
</div>
</section>
</div>
                     <div class="tab-pane  container p-0 " id="second">
                         <section id="testimonials" class="testimonials section-bg pt-0">

  <div class="container">
        <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة التانية ( متوسطة الخطورة )</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
               
2.1 -  عدم حضور (3  ) حصص دراسية بدون عذر مقبول ليوم دراسي كامل اثناء التعلم عن بعد.
<br>

2.2 - التحريض على الشجار أو تهديد أو تخويف أي من الزملاء اثناء حصص التعلم عن بعد
<br>

2.3 - إحضار الهاتف النقال أو إساءة استعمال أي من وسائل الاتصال
<br>

2.4 - الإساءة اللفظية أو التطاول على الطلبة أو العاملين أو ضيوف المدرسة الأفتراضية.

              </p>
            </div>
          </div>

               <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>الإجراءات : حسم 8 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
            
<span class="color-red">في حال ارتكابها:</span> ابلاغ ولي الأمر وتسجيل ذلك
<br>

التكرار الأول: حسم نصف الدرجة ومقدارها 4درجات
<br>

التكرار التاني: ابلاغ ولي الأمر وحسم الدرجة كاملة ومقدارها  8درجات

              </p>
            </div>
          </div>

                    </div>
</div>
</section>
</div>
                     <div class="tab-pane  container p-0 " id="third">
                         <section id="testimonials" class="testimonials section-bg pt-0">

  <div class="container">
        <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة الثالثة ( الخطيرة )</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
                
3.1- التنمر بأنواعه وأشكاله المختلفة

<br>

3.2- محاولة التشهير بالزملاء والعاملين بالمدرسة في وسائل التواصل الاجتماعي والإساءة لهم.
<br>

3.3 - انتحال صفة الغير في المعاملات المدرسية، أو تزوير الوثائق الخاصة بالمدرسة.

<br>

3.4 - إتلاف أو تخريب اجهزة الحاسوب الآلي او البرامج (الخاصة بالمبادرة).
<br>


3.5 -  تصوير وحيازة وتداول صور العاملين بالمدرسة والطلبة دون إذن منهم.

              </p>
            </div>
          </div>

                <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
              <h3>الإجراءات : حسم 12 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
             
<span class="color-red">في حال ارتكابها:</span> حسم الدرجة كاملا وابلاغ ولي الأمر واتخاد الإجراءات

              </p>
            </div>
          </div>
                    </div>

</div>
</section>
</div>

                     <div class="tab-pane  container p-0 " id="fourth">
                         <section id="testimonials" class="testimonials section-bg pt-0">

  <div class="container">
        <div class="row">
                   
             <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>مخالفات الدرجة الرابعة ( شديدة الخطورة )</h3>
              <h4>مدرسة الأقصى</h4>

              <p>

4.1 - استخدام  وسائل الأتصال ( الخاصة بالمبادرة )أو التواصل الأجتماعي في أغراض غير قانونية 
     
        أو غير أخلاقية أو فيما يسيئ للمؤسسة التعليمية أو العاملين بها أو للأخرين.
<br>

4.2 - إرتكاب الجرائم الإلكترونية أو المشاركة فيها او التستر عليها.
<br>

4.3 - جلب وحيازة وعرض وترويج مواد إعلامية أو إلكترونية غير مرخص بها، 
       
        ومخالفة القيم والأخلاق والآداب والنظام العام، وما يخدش الحياء العام.

<br>

4.4 - تسريب أسئلة الإمتحانات أو المشاركة فيها   بأي شكل من الأشكال.

<br>

4.5 - التعرض بالإساءة للرموز السياسية أو الدينية أو الاجتماعية بالدولة

<br>

4.6 - بث أو نشر أفكار ومعتقدات متطرفة أو تكفيرية أو إلحادية أو مسيئة لنظم المجتمع السياسية والاجتماعية.


              </p>
            </div>
          </div>

                <div class="col-lg-1 roles-action-img" data-aos="fade-up" data-aos-delay="100" style="margin: auto 0px;">
            <img src="{{ asset('assets/img/dash_arrow.png')}}" alt="Image" style="
    width: 100px;
    height: 100px;
    margin: auto 0px;
">
</div>
          <div class="col-lg-5 roles-action" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
              <h3>الإجراءات : حسم 12 درجات لكل منها</h3>
              <h4>مدرسة الأقصى</h4>

              <p>
             

<span class="color-red">في حال ارتكابها:</span> رسوب في مادة السلوك وتحويل الحالة الى ادارة الشئون القانوية بالوزارة
<br>
                     
                      ايقاف فوري للطالب عن الدراسة وابلاغ ولي الأمر   


              </p>
         </div>
       </div>
     </div>
   </div>
 </section>
</div>

</div>
</div>
</div>
</div>


@endsection

  @section('js')
  <script type="text/javascript">
  $("#header").addClass("active");
        $(".nav-menu").removeClass("h-color");
  </script>
@endsection