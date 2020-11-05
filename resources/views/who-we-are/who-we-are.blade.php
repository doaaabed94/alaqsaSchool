@extends('master.header')
@section('content')

@include('master.header-sub')
<div class="row">

<div class="col-md-6 left-full-bg" >
	<div class="et_pb_with_border et_pb_module et_pb_text et_pb_text_1 et_pb_bg_layout_dark  et_pb_text_align_justified">												<div class="et_pb_text_inner">					
		<h2 style="text-align: right;">حول مدرسة الأقصى الخاصة</h2>
		<p style="text-align: justify ; width: 85%;">
			{{$data->articales_description}}
		</p>			
	</div>			
</div>
</div>

<div class="col-md-6 right-full-bg" style="background-image: linear-gradient(#fffc, rgb(197 219 242 / 11%)),url({{ asset('assets/img/slider-1.jpg') }});">
	
</div>


<div class="row justify-content-center who-sec-2" style="background-image: linear-gradient(90deg,rgb(255 255 255 / 85%) 0%,#e6e6e605 100%),url({{ asset('assets/img/shapes-bg-color.png')}});">
          <div class="col-md-6 text-center heading-section ftco-animate fadeInUp ftco-animated">
  {!! $vision->articales_description !!}


    <!--


       	<h3 class="h3-who"><strong>رؤية المدرسة </strong></h3>
	<p class="p-who">تعليم ابتكاري لمجتمع معرفي ريادي عالمي </p>

	<h3 class="h3-who"><strong>رسالة المدرسة </strong></h3>
	<p class="p-who">بناء وإدارة نظام تعليمي ابتكاري لمجتمع معرفي ذي تنافسية عالمية يشمل كافة المراحل العمرية ويلبي احتياجات سوق العمل المستقبلية وذلك من خلال ضمان جودة مخرجات وزارة التربية والتعليم وتقديم خدمات متميزة للمتعاملين الداخليين والخارجيين .</p>			


<h3 class="h3-who"><strong>قيم المدرسة  </strong></h3>
	<p class="p-who">المواطنة والمسؤولية     <br>  
قيم ومبادئ الإسلام  <br>
الإلتزام والشفافية  <br>
التكافؤ والعدالة  <br>
المشاركة والمساءلة  <br>
العلوم والتكنولوجيا والإبتكار </p>


<h3 class="h3-who"><strong>المناهج </strong></h3>
	<p class="p-who">
تعتمد و تطبق مدرسة الأقصى الخاصة منهاج وزارة التربية والتعليم في دولة الإمارات العربية المتحدة
		
	</p>



    -->
    
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