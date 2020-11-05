@extends('master.header')
@section('content')

<section id="hero" data-aos="zoom-in" data-aos-delay="100">
<div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

<div class="carousel-inner slider" role="listbox">

<div class="carousel-item active">
<video class="pa t0 l0 " style="z-index: -1;" autoplay="" muted="" loop="">
<source src="{{ asset('assets/img/slide/fly-school.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
<div class="carousel-container" style="display: block;margin-left: 150px; margin-top: 100px;">
<div class="carousel-content text-center animate__animated animate__fadeInUp rtl"  data-aos="fade-right">
<h2>اهلا و سهلا بكم في مدرسة الأقصى</h2>
<p>مواهب شابة تقود المستقبل</p>
<p><a href="https://app7.edu-nation.net/" target="_blank" class="btn btn-warning py-4 btn-custom-1">قم بالتسجيل</a></p>
</div>
</div>
</div>
<div class=" carousel-item  ">
<video class="pa t0 l0 " style="z-index: -1;" autoplay="" muted="" loop="">
<source src="{{ asset('assets/img/slide/summer-school-sliders.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
<div class="carousel-container " style="float: left; display: block; margin-left: 60px; margin-top: 100px;">
<div class="carousel-content-2 animate__animated animate__fadeInLeft"  animation-delay: 5s;>
<h2 data-aos="fade-left">اكتشف العالم</h2>
<h2 data-aos="fade-right">غير نفسك</h2>
<h2 data-aos="fade-left">الي الآفاق</h2>

<p class="mt-1"><a href="https://app7.edu-nation.net/" target="_blank" class="btn btn-warning py-4 btn-custom-1">قم بالتسجيل</a></p>
</div>
</div>
</div>
</div>

</div>

<a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
<span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>

<a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
<span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>

<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

</div>

</section><!-- End Hero -->

<main id="main">


<section id="testimonials" class="testimonials section-bg-f" style="background-image:linear-gradient(90deg,rgb(255 255 255 / 85%) 0%,#e6e6e605 100%),url({{ asset('assets/img/shapes-bg-color.png')}});"> 
<div class="container">


<div class="row">
<div class="col-lg-3 col-md-3 col-sm-12  aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
<div class=" box-red padding-15">
<h4 class="et_pb_module_header">العنوان</h4>                        
<div class="et_pb_blurb_description">                          
<p style="text-align: right;">عجمان – شارع الإمام أحمد بن حنبل – الجرف 2</p>                     
</div>
</div>

<div class=" box-blue padding-15">
<h4 class="et_pb_module_header">معلومات الإتصال</h4>                        

<div class="et_pb_blurb_description">                           
<p style="text-align: right;">
رقم الفاكس: Fax no : 06/ 7482922
رقم الهاتف: Tel. no. 06/ 7438449
</p>                     
</div>
</div>


<div class=" box-orange padding-15">
<h4 class="et_pb_module_header">البريد الإلكتروني:</h4>                        
<div class="et_pb_blurb_description">                           
<p style="text-align: left;">
البريد الإلكتروني: info@alaqsaps.com
</p>                      
</div>
</div>


<div class="social-links text-center text-md-right" style="margin-top:30px">
<a href="https://www.facebook.com/aqsap.school" target="blank" class="facebook " style="
margin-right: 15px;
"><i class="bx bxl-facebook fc-home"></i></a>
<a href="https://www.instagram.com/alaqsaps/" target="blank" class="instagram"><i class="  insta-home bx bxl-instagram"></i></a>

</div>


</div>

<div class="col-lg-6  col-md-6 col-sm-12  aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">

<div class=" box-no-back">
<iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Faqsap.school%2Fvideos%2F2846844512226288%2F&show_text=false&width=560" width="560" height="314" style="border:none;overflow:hidden;width: 100%" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
</div>


<div class=" box-no-back">
<div class="et_pb_module et_pb_text et_pb_text_2 et_pb_bg_layout_light  et_pb_text_align_right">                        
  <div class="et_pb_text_inner">
<h2  class="h2-home">رسالة المدرسة</h2>
<p class="p-home">بناء وإدارة نظام تعليمي ابتكاري لمجتمع معرفي ذي تنافسية عالمية يشمل كافة المراحل العمرية ويلبي احتياجات سوق العمل المستقبلية وذلك من خلال ضمان جودة مخرجات وزارة التربية والتعليم وتقديم خدمات متميزة للمتعاملين الداخليين والخارجيين .
</p>        
</div>    
</div>
</div>


</div>

<div class="col-lg-3 col-md-3 col-sm-12  aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
<div class=" box-green color_f5f5f5">

<div class="et_pb_blurb_container">          
<h4 class="et_pb_module_header color-000">معلومات عامة</h4>
<div class="et_pb_blurb_description color-000">
<p><strong>المدير:</strong> أ. فايز سعيد المغنى</p>
<p><strong>مستويات التعليم:</strong>&nbsp;KG-12</p>

<p><a href="/who-we-are">عن مدارس الأقصى الخاصة</a></p>

</div>         
</div>

</div>

<div class=" box-no-back">
<div class="et_pb_text_inner">          <h2 class="h2-home">التقويم</h2>        </div>
<div class="et_pb_blurb et_pb_blurb_4">
<div class="et_pb_blurb_content">
<div class="et_pb_blurb_container">
<h4 class="et_pb_module_header calender-home">20 – 24 آب</h4>           
<div class="et_pb_blurb_description">عطلة العيد            
</div>         
</div>        
</div>      
</div>

<div class="et_pb_blurb et_pb_blurb_5">                       
<div class="et_pb_blurb_content">                   
<div class="et_pb_blurb_container">           
<h4 class="et_pb_module_header calender-home">27 – 31 آب</h4>           
<div class="et_pb_blurb_description">ميع توجيهات الموظفين والاجتماعات           
</div>          </div>        
</div>      
</div>
<div class="et_pb_blurb et_pb_blurb_5">                       
<div class="et_pb_blurb_content">                   
<div class="et_pb_blurb_container">           
<h4 class="et_pb_module_header calender-home">27 – 31 آب</h4>           
<div class="et_pb_blurb_description">ميع توجيهات الموظفين والاجتماعات           
</div>          </div>        
</div>      
</div>

<div class="et_pb_blurb et_pb_blurb_8">                       
<div class="et_pb_blurb_content">                   
<div class="et_pb_blurb_container">           
<h4 class="et_pb_module_header calender-home">27 – 31 آب</h4>           
<div class="et_pb_blurb_description">ميع توجيهات الموظفين والاجتماعات           
</div>          </div>        
</div>      
</div>  
</div>

</div>

</div>
</section>
<!--
<section class="cta-four">
<img src="{{ asset('assets/img/circle-stripe-1.png')}}" class="cta-four__stripe" alt="">
<img src="{{ asset('assets/img/line-stripe-1.png')}}" class="cta-four__line" alt="">
</section>
-->


<!-- news -->
<div class="site-section bg-light">
<div class="container">
<div class="row">
<div class="col-md-6 mb-5 mb-md-0">
<img src="{{ asset('assets/img/about-112.jpg')}}" alt="Image" class="img-fluid" >
</div>
<div class="col-md-5 ml-auto pl-md-5 rtl">
<span class="text-cursive h5 text-red">حول مدرستنا</span>
<h3 class="text-black">مدرسة الأقصى الخاصة</h3>
<p><span>سميت بهذا الإسم تيمناَ بأولى القبلتين وثالث الحرمين الشريفين المسجد الأقصى المبارك في بيت المقدس بفلسطين ، قال الله تعالى ( سبحان الذي أسرى بعبده ليلا من المسجد الحرام الي المسجد الأقصى ) صدق الله العظيم</span></p>
<p class="mt-5"><a href="/who-we-are" class="btn btn-warning py-4 btn-custom-1">إقـــرأ المــزيد</a></p>
</div>
</div>
</div>
</div>


<section id="testimonials" class="testimonials section-bg rtl"  data-aos="zoom-in" data-aos-delay="100" style="background:#fff;background-image:   linear-gradient(90deg,rgb(255 255 255 / 85%) 0%,#e6e6e605 100%),url({{ asset('assets/img/shapes-bg-color.png')}});"> 


<div class="container">

<div class="row">

<div class="section-title section-t-d aos-init aos-animate col-md-12"  data-aos="zoom-in" data-aos-delay="100" >
<h2>آخر الأخبار</h2>

<h3> <strong>آخر أخبار وفعاليات المدرسة</strong></h3>
<p>هدفنا تقديم تعليم على مستوى عالمي للطلاب من مختلف الجنسيات والخلفيات من خلال برنامج شامل، وخلق بيئة إيجابية وداعمة تمكن طلابنا من تطوير مهارات التفكير النقدي والتحليلي، وإلهام الابتكار و الإبداع.</p>
</div>

</div>
<div class="row">
<div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
<div class="testimonial-item mt-4">
<img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
<h3>Matt Brandon</h3>
<h4>مدرسة الأقصى</h4>
<p>
<i class="bx bxs-quote-alt-right quote-icon-right"></i>
Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
<i class="bx bxs-quote-alt-left quote-icon-left"></i>
</p>
</div>
</div>

<div class="col-lg-12 aos-init aos-animate section-title section-t-d " data-aos="fade-up" data-aos-delay="300">

<p class="mt-1"><a href="/news" target="_blank" class="btn btn-warning py-4 btn-custom-1">إقرأ  المزيد</a></p>
</div>
</div>

</div>
</section>

<!-- end news -->
<!--
<section id="clients" class="clients">
<div class="container" data-aos="fade-up">

<div class="section-title">
<h2>Clients</h2>
</div>

<div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
</div>
</div>

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
</div>
</div>

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
</div>
</div>

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
</div>
</div>

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
</div>
</div>

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
</div>
</div>

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
</div>
</div>

<div class="col-lg-3 col-md-4 col-6">
<div class="client-logo">
<img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
</div>
</div>

</div>

</div>
</section> End Our Clients Section -->

@endsection

@section('js')
<script type="text/javascript">
$(window).on("scroll", function() {
if($(window).scrollTop() > 50) {
$("#header").addClass("active");
$(".nav-menu").removeClass("h-color");

} else {
//remove the background property so it comes transparent again (defined in your css)
$("#header").removeClass("active");
$(".nav-menu").addClass("h-color");

}
});
</script>
@endsection
