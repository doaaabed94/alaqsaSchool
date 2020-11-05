@extends('dashboard.master')
@section('modal')


<div class="modal fade" id="calenderDeleteDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">حذف الحدث</h4>
      </div>
      <div class="modal-body">
        <h6>هل تريد أن  تحذف هذا الحدث من الأجندة المدرسية ؟</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-modal" data-dismiss="modal">اغلق</button>
      <form method="POST" action="{{ route('delete_calender') }}" class="btn-modal">@csrf
      <input type="hidden" value="" name="calender_id" id="rents_id" > <button type="submit" class="btn btn-danger ">{{ __('حذف') }} </button></form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection
@section('content')

    <section id="main-content">
      <section class="wrapper rtl">

      	   <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header rtl"><i class="fa fa-list-alt"></i>الأجندة المدرسية</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/admin">صفحة لوحة التحكم الرئيسية</a></li>
              <li><i class="fa fa-desktop"></i>إضافة حدث في الأجندة المدرسية</li>
            </ol>
          </div>
        </div>


        <div class="row">
    <div class="col-lg-3">
    </div>

        <div class="col-lg-9 rtl">
                <section class="panel">
                  <header class="panel-heading">
                    إضافة حدث في الأجندة المدرسية
                  </header>
                  <div class="panel-body">      

                    <form class="form-horizontal rtl " method="POST" action="{{ route('add_calender') }}">
                      @csrf
                      <!--date picker start-->
                        <div class="form-group ">
                        <div class="col-sm-9 offset-sm-3 float-r">
                        <label class="control-label col-sm-4">عنوان الحدث</label>

                          <input name="title" type="text" class="form-input form-control" value="عنوان الحدث">
                        </div>

                      </div>

                      <div class="form-group ">
                        <div class="col-sm-9 float-r">
                        <label class="control-label col-sm-4">تاريخ بداية الحدث</label>

                          <input name="start" type="date" value="28-10-2013" size="16" class="form-input form-control">
                        </div>

                      </div>

                      <div class="form-group ">
                        <div class="col-sm-9 float-r">
                        <label class="control-label col-sm-4">تاريخ نهاية الحدث  (غير إلزامي )</label>

                          <div class="input-prepend">
                            <input name="end" type="date" class="form-input form-control">
                          </div>

                        </div>
                      </div>
                      <!--date picker end-->

                      <!--color picker start-->
                      <div class="form-group ">

                        <div class="col-sm-9 float-r">
                       <label class="control-label col-sm-4">لون الحدث</label>
                       <br>
                      <div class="radios">
                        <label class="label_radio r_on" for="radio-01">
                          <input name="color" id="radio-01" value="#0044cc" type="radio" checked=""><a class="color-cel1 btn  disabled" href=""></a> الاختبار القصير الأول                 
                        </label>
                        <label class="label_radio r_off" for="radio-02">
                           <input name="color" id="radio-02" value="#ff2d55" type="radio">
                           <a class="color-cel2 btn  disabled" href=""></a> الاختبار القصير الثاني
                                              </label>

                      <label class="label_radio r_off" for="radio-03">
                           <input name="color" id="radio-03" value="#3e3e3e" type="radio">
                           <a class="color-cel3 btn  disabled" href=""></a> أحداث منوعة (إجازة,بدء دوام, ,,, وغيرها)
                                              </label>
                      </div>


                        </div>

                      </div>
                  
                      <!--color picker end-->


          <!--color picker start-->
                      <div class="form-group ">

                        <div class="col-sm-9 float-r">
                        <button type="submit" class="btn btn-primary "><span class="icon_lightbulb_alt"></span>{{ __('اضف الحدث') }} </button>
                        </div>

                      </div>
                  
                      <!--color picker end-->

                      </form>


                  </div>

                </section>

        <!--                <section class="panel">
                  <header class="panel-heading">
                    تعديل الملاحظات الخاصة بالأجندة المدرسية
                  </header>
                     <div class="panel-body">      

                    <form class="form-horizontal rtl " method="POST" action="{{ route('edit_note_calender') }}">
                      @csrf
                        <div class="form-group ">
                        <div class="col-sm-9 offset-sm-3 float-r">
                        <label class="control-label">تعديل الملاحظات الخاصة بالأجندة المدرسية</label>
                          <br>
                          <textarea name="articales_description" type="text" rows="9" class="form-input form-control">
                            {{ $articale->articales_description }}</textarea>
                        </div>

                      </div>

                      <div class="form-group ">

                        <div class="col-sm-9 float-r">
                        <button type="submit" class="btn btn-primary "><span class="icon_lightbulb_alt"></span>{{ __('تعديل الملاحظات') }} </button>
                        </div>

                      </div>
                  
                      </form>

                  </div>
</section>
           -->
        </div>

       </section>
   </section>

        <!-- project team & activity end -->
            @endsection

