@extends('master.header')
@section('content')

@include('master.header-sub')

<div class="container">

            <div class="row align-items-center">
            		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{ asset('assets/img/about11.jpg') }}" alt="" class="img-manager img-fluid img-rounded">

                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">

  {!! $data->articales_description !!}

<!--

                     <h4 class="h3-who h4-manager" style="color: #dc3545;"> بسم الله الرحمن الرحيم</h4>
                     <h2 class="h3-who h4-manager">الإخوة أولياء الأمور الكرام – المعلمون الأفاضل – أبنائي وبناتي الطلاب </h2>
                        
<p class="p-who p-manager">تغمرني السعادة وأنا أحييكم جميعا بأطيب التحيات مثمناَ لكم جهودكم الطيبة للعمل معاَ من أجل تحقيق بيئة تربوية سليمة ، سائلين الله عزوجل أن يجعله عاماَ حافلاَ بالمنجزات على كافة المستويات مؤكدين بحول الله تعالى عزمنا على العمل سوياَ لتحقيق رسالة التربية والتعليم .
<br>
ان التوجيهات المستقبلية للتعليم ترتكز على عقيدتنا الراسخة بأن التعليم هو أداة فاعلة في مسيرة التنمية قادرة على تحقيق التطلعات والتوقعات ، ساعيين الي غرس حب العلم والتعلم لكي يتمكن أبنائنا الطلاب والطالبات من الوصول الي المعرفة وانتاجها بأنفسهم مع العمل على بناء شخصياتهم وغرس القيم الإنسانية بهم وتعزيز روح الإنفتاح الواعي لديهم والإيمان بقيم العمل و الإنتاج ، واشاعة مبدء الحوار وروح التسامح والتعامل الراقي مع التطورات التكنولوجية وتطبيقاتها .
<br>
وختاماَ ، سدد الله الجهود ، وبارك الخطى ووفق الجميع لما يحب ويرضى متمنياَ لمدرسة الأقصى الخاصة بعجمان وللجميع النجاح والتوفيق  
</p>
                        <p class="manager-p" style="padding-top: 50px;">
مدير المدرسة 
</p>
<p class="manager-p2">
أ. فايز سعيد المغنى
</p>


-->
                    </div><!-- end messagebox -->
                </div><!-- end col -->
			
			</div>
		
        </div>

 @endsection

  @section('js')
  <script type="text/javascript">
  $("#header").addClass("active");
        $(".nav-menu").removeClass("h-color");
  </script>
@endsection