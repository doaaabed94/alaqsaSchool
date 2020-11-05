@extends('master.header')
@section('content')

<section id="breadcrumbs" class="breadcrumbs rtl " >
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>القبول و التسجيل</h2>
          <ol>
            <li><a href="/">الصفحة الرئيسية</a></li>
            <li>الأوراق المطلوبة للتسجيل</li>
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
      <h4 class="mb-3 bread application-h text-center" style="font-size: 24px !important;">الأوراق المطلوبة في التسجيل</h4>
      </div>
      </div>

</div>
</section>

 <div class="container">
             <div class="row align-items-center rtl">
        


<div class="col-md-8 row ftco-animate pb-5 text-center fadeInUp ftco-animated">
  <div class="col-md-12">
    <h4 class="mb-3 bread application-h" style="font-size: 22px !important;">ما هي الأوراق المطلوبة للتسجيل في مدرسة الأقصى الخاصة ؟</h4>
  </div>
                <div class="col-lg-6 col-md-12">
                        

   <div class="et_pb_module et_pb_text et_pb_text_2 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">          
    <h3>1.</h3><p class="text_inner-p">صورة جواز سفر الطالب سارية المفعول </p></div>      
  </div> 
  <div class="et_pb_module et_pb_text et_pb_text_3 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">          
    <h3>2.</h3><p class="text_inner-p">صورة من بطاقة الهوية للطالب أو استمارة الهوية مختومة   </p>
  </div>      
</div> 
<div class="et_pb_module et_pb_text et_pb_text_4 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">         
 <h3>3.</h3><p class="text_inner-p">يصورة إقامة الطالب سارية المفعول  </p>
</div>     
 </div>
<div class="et_pb_module et_pb_text et_pb_text_5 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">         
 <h3>4.</h3><p class="text_inner-p">شهادة ميلاد الطالب  </p>
</div>     
 </div>
                </div><!-- end col -->

        <div class="col-lg-6 col-md-12">
                             

   <div class="et_pb_module et_pb_text et_pb_text_2 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">          
    <h3>5.</h3><p class="text_inner-p">صورة جواز ولي الأمر أو الكفيل  </p></div>      
  </div> 
  <div class="et_pb_module et_pb_text et_pb_text_3 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">          
    <h3>6.</h3><p class="text_inner-p">شهادة درجات الطالب للعام السابق مصدقة (للمنقول أو المعاد قيده أو المستجد )  </p>
  </div>      
</div> 
<div class="et_pb_module et_pb_text et_pb_text_4 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">         
 <h3>7.</h3><p class="text_inner-p">يوثيقة انتقال الطالب مصدقة   </p>
</div>     
 </div>
<div class="et_pb_module et_pb_text et_pb_text_5 et_pb_bg_layout_light  et_pb_text_align_right et_had_animation" style="">                       <div class="et_pb_text_inner">         
 <h3>8.</h3><p class="text_inner-p">دفتر التحصين أو التطعيمات (فقط KG1  و KG2 و GRADE1 ) </p>
</div>     
 </div>
                  
                </div><!-- end col -->

                <div class="col-md-12">

                     <div class="et_pb_module et_pb_text et_pb_text_0 et_pb_bg_layout_light  et_pb_text_align_right">                        
  <div class="et_pb_text_inner">         
  <p class="manager-p" style="text-align: right;">
 ملاحظة / 
</p>
<p class="manager-p2" style="text-align: right;">
• ترفق صورة الطالب مع طلب الإلتحاق 
</p>
<p class="manager-p2"  style="text-align: right;">
• كل المستندات والوثائق الخاصة بملف الطالب توضع داخل ملف موحد حسب ما هو متفق عليه 
</p>

</div>     

         </div>
       </div>
</div>




<div class="col-md-4 mb-5 mb-md-0 ">
<img src="{{ asset('assets/img/about-112.jpg')}}" alt="Image" class="img-fluid img-manager img-rounded img-inside-div" style="border-top-left-radius: 200px; height: auto !important;">
</div>


      </div>
   
              </div>
</div>

        </div>

</section>
 @endsection

  @section('js')
  <script type="text/javascript">
  $("#header").addClass("active");
        $(".nav-menu").removeClass("h-color");
  </script>
@endsection