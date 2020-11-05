@extends('master.header')
@section('content')

<section class="hero-wrap hero-wrap-2" style="    height: auto; background-image: linear-gradient(100deg,#dc354514 0%,#ffffff 100%),url(https://jis.com.tr/assets/2018/08/shapes-bg-color.png);">

     <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center fadeInUp ftco-animated">
         	<h6 class="mb-3 bread application-h6"> التسجيل</h6>
			<h4 class="mb-3 bread application-h">أهلاً بكم في مدرستنا </h4>
			<h5 class="mb-3 bread application-h5">أهلاً بكم في مدارس الأقصى الخاصة، من فضلك املأ إستمارة التسجيل أدناه قبل زيارتك إلى المدرسة لتقديم جميع الأوراق المطلوبة.</h5>

<p><a href="#" target="_blank" class="btn btn-warning py-4 btn-custom-1" style="    float: right;
    background: #dc3545;
    color: #fff;
    border-color: #dc354559;">تحميل إستمارة التسجيل</a></p>

		
          </div>
        </div>
      </div> 
  
    </section>

    <div style="clear:both"></div>

 @endsection

  @section('js')
  <script type="text/javascript">
  $("#header").addClass("active");
        $(".nav-menu").removeClass("h-color");
  </script>
@endsection