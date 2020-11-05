@extends('master.header')
@section('content')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>تواصل معنا</h2>
          <ol>
            <li><a href="/">الصفحة الرئيسية</a></li>
            <li>تواصل معنا</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
 
      <iframe  style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.0231244387783!2d55.501030385668216!3d25.40403652951335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef5f7dfb7a5dd07%3A0xf5683ab945f9416f!2zQWwgQXFzYSBQcml2YXRlIFNjaG9vbCDZhdiv2LHYs9ipINin2YTYo9mC2LXZiSDYp9mE2K7Yp9i12Kk!5e0!3m2!1sar!2str!4v1603882727119!5m2!1sar!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>الموقع</h4>
                  <p>عجمان – شارع الإمام أحمد بن حنبل – الجرف 2- </p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>البريد الإلكتروني</h4>
                  <p>info@alaqsaps.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>رقم التواصل</h4>
                  <p>Tel. no. 06/ 7438449<br>Fax no : 06/ 7482922</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center rtl" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="  {{ route('contact') }}" method="post"  class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="الأسم " data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="الرسالة"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="form-group" ><button class="btn btn-danger btn-download" style="float: unset !important;">ارسل</button></div>
            </form>
          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection


  @section('js')
  <script type="text/javascript">
  $("#header").addClass("active");
        $(".nav-menu").removeClass("h-color");
  </script>
@endsection