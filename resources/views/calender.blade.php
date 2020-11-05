<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <title>مدرسة الأقصى الخاصة</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
<link rel='stylesheet' id='et-builder-googlefonts-cached-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCairo%3A200%2C300%2Cregular%2C600%2C700%2C900%7CRubik%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CCabin+Sketch%3Aregular%2C700#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='et-builder-googlefonts-cached-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCairo%3A200%2C300%2Cregular%2C600%2C700%2C900%7CRubik%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CCabin+Sketch%3Aregular%2C700#038;subset=latin,latin-ext
' type='text/css' media='all' />
<link rel='stylesheet' id='et-builder-googlefonts-cached-css'  href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CCairo%3A200%2C300%2Cregular%2C600%2C700%2C900%7CEl+Messiri%3Aregular%2C500%2C600%2C700%7CRubik%3A300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic%7CCabin+Sketch%3Aregular%2C700#038;subset=latin,latin-ext' type='text/css' media='all' />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style-ar.css') }}" rel="stylesheet">

<link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
<link href='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
<script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
<script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js'></script>
<script>

    $(document).ready(function() {
    $('#calendar').fullCalendar({


    // customize the button names,
    // otherwise they'd all just say "list"
    views: {
  
        listMonth: {
          buttonText: 'قائمة'
        },
        listYear: {
          buttonText: ' قائمة سنوية'
        },
        month:    'تقويم',
    },

    header: {
      left: 'prev,next',
      center: 'title',
      right: 'month,listMonth,listYear'
    },
     
       editable: false,
      eventLimit: true, 
    events: <?php echo json_encode($Events); ?>
  });

  calendar.render();
  });

</script>
</head>
<body>


    <!-- ======= Header ======= -->

@include('master.head')


<style type="text/css">
  .fc-row , .fc-day-header{
    height: 80px !important;
  }
  .fc-scroller{
    height: unset !important;
  }

  .fc-event{
    background-color: #3ebfff;
}

</style>

<main>
<!--
@include('master.header-sub')-->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs rtl">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>الأجندة المدرسية</h2>
          <ol>
            <li><a href="/">الصفحة الرئيسية</a></li>
            <li>الأجندة المدرسية</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

<section id="blog" class="blog">
      <div class="container">
<div class="row">
  <div class="col-md-4 rtl" >
    <div class="sidebar aos-init aos-animate" data-aos="fade-left">

              <h3 class="sidebar-title">ملاحظات</h3>
              <div class="sidebar-item search-form">
 {!! $articale->articales_description !!}
 <div class="radios">
                        <label class="label_radio r_on" for="radio-01">
                        <a class="color-cel1 btn  disabled" href=""></a> الاختبار القصير الأول                 
                        </label>
                        <label class="label_radio r_off" for="radio-02">
                          <a class="color-cel2 btn  disabled" href=""></a> الاختبار القصير الثاني
                                              </label>

                      <label class="label_radio r_off" for="radio-03">       
                           <a class="color-cel3 btn  disabled" href=""></a> أحداث منوعة 
                                              </label>
                      </div>
  </div>
</div>
<p class="manager-p" style="padding-top: 50px;">
مدير المدرسة 
</p>

<p class="manager-p2">
أ. فايز سعيد المغنى
</p>
</div>


<div class="col-md-8 rtl">
  
    <div class="sidebar aos-init aos-animate" data-aos="fade-left">
  <div id='calendar'></div>
</div>
  <br>
</div>
</div>
</div>

</div>
</section>



    <!-- education website -->
    <section id="clients" class="clients" style="
    background-image: url('https://jis.com.tr/assets/2018/07/jess-watters-483666-unsplash.jpg'); ">

      <div class="container aos-init aos-animate"  data-aos="zoom-in" data-aos-delay="100">

        <div class="section-title">
          <h2>تواصل معنا</h2>
        </div>

        <div class="row clearfix aos-init aos-animate"  data-aos="zoom-in" data-aos-delay="100" >

          <div class="col-md-6 et_pb_column">
         <div class="et_pb_promo_description et_pb_module et_pb_cta_0 et_hover_enabled et_pb_promo et_pb_bg_layout_light  et_pb_text_align_right">               
            <h2 class="et_pb_module_header">تفضلوا بزيارتنا</h2>    
             <p><strong>الموقع:&nbsp;</strong>Göztepe Mah. 2334. Sok. No:4، Bağcılar/İstanbul, Türkiye.&nbsp;
                <a href="https://g.page/JISchools?share" target="_blank" rel="noopener noreferrer">[زيارة]</a></p>
                <p><strong>رقم الهاتف:</strong> <span dir="ltr">+90 (212) 445 00 42</span><br> <strong>رقم الجوال:</strong> 
                    <span dir="ltr">+90 (530) 596 22 91</span><br> <strong>البريد الإلكتروني:</strong>&nbsp;<a style="font-size: 14px;" href="mailto:info@jis.com.tr">info@jis.com.tr</a><br> <strong>ساعات الدوام:</strong> الإثنين-الجمعة: 9am – 5pm</p> 


<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button" href="https://jis.com.tr/ar/%d8%a7%d8%aa%d8%b5%d9%84-%d8%a8%d9%86%d8%a7/">اتصل بنا الآن</a></div>

                                   </div>
          </div>


          <div class="col-md-6 row">
           <div class="col-md-6">
            <div class=" box-green">
<div class="percent"><p><span class="percent-value">27</span></p></div>
<h3 class="precent-title"> مرافق  </h3>
          </div>
      </div>
    <div class="col-md-6">
            <div class=" box-red">
<div class="percent"><p><span class="percent-value">27</span></p></div>
<h3 class="precent-title"> مرافق  </h3>
          </div>
      </div>    <div class="col-md-6">
            <div class=" box-blue">
<div class="percent"><p><span class="percent-value">27</span></p></div>
<h3 class="precent-title"> مرافق  </h3>
          </div>
      </div>    <div class="col-md-6">
            <div class=" box-orange">
<div class="percent"><p><span class="percent-value">27</span></p></div>
<h3 class="precent-title"> مرافق  </h3>
          </div>
      </div>

        </div>

      </div>
    </section>
    <!-- end educa -->
  </main><!-- End #main -->


  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Company</span></strong>. All Rights Reserved
        </div>

      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <script type="text/javascript">
  $("#header").addClass("active");
        $(".nav-menu").removeClass("h-color");


  </script>

</body>
</html>
