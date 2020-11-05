<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>لوحة التحكم - مدرسة الأقصى الخاصة</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('dashboard/css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('dashboard/css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ asset('dashboard/css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('dashboard/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{ asset('dashboard/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('dashboard/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('dashboard/css/owl.carousel.css')}}" type="text/css">
  <link href="{{ asset('dashboard/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('dashboard/css/fullcalendar.css')}}">
  <link href="{{ asset('dashboard/css/widgets.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{ asset('dashboard/css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{ asset('dashboard/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">


    <link href="{{ asset('dashboard/css/daterangepicker.css')}}" rel="stylesheet" />
  <link href="{{ asset('dashboard/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
  <link href="{{ asset('dashboard/css/bootstrap-colorpicker.css')}}" rel="stylesheet" />
  <!-- =======================================================
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  ======================================================= -->
</head>

<body>
  @yield('modal')
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/" class="logo">ALAQSA <span class="lite">School</span></a>
      <!--logo end-->

 


    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="/admin">
                          <i class="icon_house_alt"></i>
                          <span>الصفحة الرئيسية</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>من نحن</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/who-we-are"> (تعديل )من نحن</a></li>
              <li><a class="" href="/admin/school-manager-word">(تعديل )كلمة مدير المدرسة</a></li>
            <!--  <li><a class="" href="/admin/trustees-word">(تعديل )كلمة مدير مجلس الأمناء</a></li> -->

            </ul>
          </li>


   <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>أجندة المدرسة</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/calender"> عرض الأجندة المدرسية</a></li>
              <li><a class="" href="/admin/calender/add"> إضافة حدث جديد</a></li>           
            </ul>
          </li>


            <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>أخبار المدرسة</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/news/add">إضافة خبر جديد</a></li>
              <li><a class="" href="/admin/news/edit"> عرض أخبار المدرسة</a></li>
              <li><a class="" href="/admin/news"> حذف - تعديل خبر</a></li>
            </ul>
          </li>


              <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_piechart"></i>
                          <span>مكتبة المدرسة</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/library">عرض جميع الكتب</a></li>
              <li><a class="" href="/admin/library/add">إضافة كتاب جديد</a></li>
              <li><a class="" href="/admin/library/edit"> تعديل او حذف كتاب</a></li>
              <li><a class="" href="/admin/type-library">عرض أقسام  الكتب</a></li>

              <li><a class="" href="/admin/type-library/add">إضافة قسم جديد</a></li>
              <li><a class="" href="/admin/type-library/edit">تعديل او حذف قسم</a></li>

            </ul>
          </li>

   <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_piechart"></i>
                          <span>أنشطة المدرسة</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/activity/add">إضافة نشاط جديد</a></li>
              <li><a class="" href="/admin/activity/edit">تعديل او حذف نشاط </a></li>
              <li><a class="" href="/admin/activity">عرض أنشطة المدرسة</a></li>
            </ul>
          </li>

   <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_piechart"></i>
                          <span>القبول و التسجيل</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/admission">(تعديل)سياسات و قواعد عامة</a></li>

              <li><a class="" href="/admin/documents">وثائق مطلوبة (تعديل)</a></li>
              <li><a class="" href="/admin/age-acceptance">سن القبول ( تعديل)</a></li>
              <li><a class="" href="/admin/registration-dates">مواعيد التسجيل (تعديل)</a></li>
              <li><a class="" href="/admin/students-affairs">شئون الطلبة (تعديل)</a></li>

          
            </ul>
          </li>
   <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>البوم صور المدرسة</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/facilities">عرض جميع مرافق المدرسة</a></li>
              <li><a class="" href="/admin/facilities/add">إضافة مرفق جديد</a></li>
              <li><a class="" href="/admin/facilities/edit">تعديل - حذف مرفق مدرسي</a></li>
              <li><a class="" href="/admin/gallery">عرض صور مرافق المدرسة</a></li>
              <li><a class="" href="/admin/gallery/add">إضافة صورة جديدة</a></li>
              <li><a class="" href="/admin/gallery/edit">تعديل- حذف صورة</a></li>
            </ul>
          </li>
  <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>رسائل الزوار</span>
                          <span class="menu-arrow arrow_carrot-left"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="/admin/messages">عرض جميع رسائل الزوار</a></li>
              <li><a class="" href="/admin/problem_messages"> عرض رسائل الشكوى </a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

@yield('content')
  </section>
  <!-- container section start -->


  <script src="{{ asset('dashboard/js/jquery.js')}}"></script>
  <script src="{{ asset('dashboard/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{ asset('dashboard/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('dashboard/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('dashboard/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('dashboard/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ asset('dashboard/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('dashboard/assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{ asset('dashboard/js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{ asset('dashboard/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{ asset('dashboard/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <<script src="{{ asset('dashboard/js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('dashboard/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{ asset('dashboard/js/calendar-custom.js')}}"></script>
    <script src="{{ asset('dashboard/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{ asset('dashboard/js/jquery.customSelect.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/chart-master/Chart.js')}}"></script>

  
    <!-- custom script for this page-->
    <script src="{{ asset('dashboard/js/sparkline-chart.js')}}"></script>
    <script src="{{ asset('dashboard/js/easy-pie-chart.js')}}"></script>
    <script src="{{ asset('dashboard/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('dashboard/js/xcharts.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/jquery.autosize.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/jquery.placeholder.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/gdp-data.js')}}"></script>
    <script src="{{ asset('dashboard/js/morris.min.js')}}"></script>
    <script src="{{ asset('dashboard/js/sparklines.js')}}"></script>
    <script src="{{ asset('dashboard/js/charts.js')}}"></script>
    <script src="{{ asset('dashboard/js/jquery.slimscroll.min.js')}}"></script>



  <!--custom checkbox & radio-->
  <script type="text/javascript" src="{{ asset('dashboard/js/ga.js')}}"></script>
  <!--custom switch-->
  <script src="{{ asset('dashboard/js/bootstrap-switch.js')}}"></script>
  <!--custom tagsinput-->
  <script src="{{ asset('dashboard/js/jquery.tagsinput.js')}}"></script>


  <!-- bootstrap-wysiwyg -->
  <script src="{{ asset('dashboard/js/jquery.hotkeys.js')}}"></script>
  <script src="{{ asset('dashboard/js/bootstrap-wysiwyg.js')}}"></script>
  <script src="{{ asset('dashboard/js/bootstrap-wysiwyg-custom.js')}}"></script>
  <script src="{{ asset('dashboard/js/moment.js')}}"></script>
  <script type="text/javascript" src="{{ asset('dashboard/assets/ckeditor/ckeditor.js')}}"></script>
  <!-- custom form component script for this page-->
  <script src="{{ asset('dashboard/js/form-component.js')}}"></script>
  <!-- custome script for all page -->
  <script src="{{ asset('dashboard/js/scripts.js')}}"></script>

  <!-- custome script for all page -->
@yield('js')


  <!-- bootstrap-wysiwyg -->
<script type="text/javascript">



  $(document).ready(function(){
    $("#edit_note").click(function(){
  var ddd = document.getElementById( 'editor' ).innerHTML;
  var _token = $('input[name="_token"]').val();

$.ajax({
    method: 'get', // Type of response and matches what we said in the route
    url: '/test', // This is the url we gave in the route
    data: {_token : _token , ddd: ddd}, // <-- this is your POST data
    success: function(response){ // What to do if we succeed
        window.location = '{{ url("/admin/calender") }}';
    },
    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
        console.log(JSON.stringify(jqXHR));
        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
});
     
    });
});

</script>

</body>

</html>
