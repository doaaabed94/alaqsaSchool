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

        <div class="col-lg-12 rtl">
            <h3 class="page-header rtl"><i class="fa fa-list-alt"></i>الأجندة المدرسية</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/admin">صفحة لوحة التحكم الرئيسية</a></li>
              <li><i class="fa fa-desktop"></i>إضافة الحدث في الأجندة المدرسية</li>
            </ol>
          </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-danger " href="{{ route('show_add_calender') }}">إضافة  حدث جديد</a>
            <br>
           <br>
        </div>

            <div class="col-lg-5 rtl">
                        <section class="panel">
                  <header class="panel-heading">
                   تعديل الملاحظات الخاصة بالأجندة المدرسية
                  </header>
                     <div class="panel-body">      

                    <form class="form-horizontal rtl ">
                 
                       <!--date picker start-->
                        <div class="form-group ">
                         <label class="control-label">تعديل الملاحظات الخاصة بالأجندة المدرسية</label>

                        <div class="col-sm-12 float-r">
                          <br>
                           <div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                           {!! $articale->articales_description !!}
                            </div>

                        </div>

                      </div>

                      <div class="form-group ">

                        <div class="col-sm-9 float-r">
                        <button type="button" class="btn btn-primary " id="edit_note"><span class="icon_lightbulb_alt"></span>{{ __('تعديل الملاحظات') }} </button>
                        </div>

                      </div>
                  
                      <!--color picker end-->

                      </form>


                  </div>
</section>
</div>
       <div class="col-lg-7 rtl">
        
            <div class="panel panel-default">

              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>عرض الأجندة المدرسية</strong></h2>
                <div class="panel-actions">
                  <a href="#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                  <a href="#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                  <a href="#" class="btn-close"><i class="fa fa-times"></i></a>
                </div>

              </div>

              <div class="panel-body">

                <table class="table bootstrap-datatable countries rtl">
                  <thead>
                    <tr>
                      <th></th>
                      <th>اسم الحدث</th>
                      <th>تاريخ البداية</th>
                      <th>تاريخ النهاية</th>
                      <th>لون الحدث</th>
                      <th> تعديل الحدث </th>
                      <th> حذف </th>
                    </tr>
                  </thead>

                  <tbody>
                                  @foreach($data as $calender)

                                        <tr class="odd gradeX">
                                          <td> </td>
                                            <td>{{$calender->title}}</td>                                         
                                            <td>{{$calender->start}}</td>
                                            <td>{{$calender->end}}</td>
                                            <td>{{$calender->color}}</td>
                                     <td> 
                                      <form method="POST" action="{{ route('show_edit_note_calender') }}">@csrf
                              <input type="hidden" value="{{$calender->calender_id}}" name="calender_id" id="calender_id" > <button type="submit" class="btn btn-primary">{{ __('تعديل') }} </button></form></td>
                                            <td> 
<a data-toggle="modal" data-id="{{$calender->calender_id}}" title="Add this item" class="open-calenderDeleteDialog btn btn-danger " href="#calenderDeleteDialog">حذف</a> </td>
                                          
                                        </tr>

                                   @endforeach


             
                  </tbody>
                </table>
                {{$data->links()}}
              </div>

            </div>

          </div>
        </div>
       </section>
   </section>

        <!-- project team & activity end -->
            @endsection

            @section('js')
          <script>
$(document).ready(function(){

 $('.open-calenderDeleteDialog').click(function(e){
  e.preventDefault();
  var _self = $(this);
  var rents_id = _self.data('id');
  $("#rents_id").val(rents_id);
$(window).load(function() {
  $('#calenderDeleteDialog').modal('show'); 
});
})


// Toolbar configuration generated automatically by the editor based on config.toolbarGroups.




  });
</script>




   @endsection


 
<!--
  <div class="col-lg-5 rtl">
     
            <div class="panel panel-default">

              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong> ملاحظات حول الأجندة المدرسية </strong></h2>

                   <div class="panel-actions">
                  <a href="#" class="btn-setting">
                    <form method="POST" action="{{ route('show_edit_note_calender') }}">
                      @csrf
                      <input type="hidden" value="" name="articale_id" id="{{$articale->articale_id}}" >
                      <button type="submit" class="btn btn-primary">{{ __('تعديل') }} </button>
                    </form>
                  </a>
       
                </div>

                

              </div>

              <div class="panel-body">
                <p class="p-notes">
{!! $articale->articales_description !!}
           </p>
              </div>

            </div>

          </div>
-->