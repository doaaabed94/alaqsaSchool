@extends('dashboard.master')
@section('content')

    <section id="main-content">
      <section class="wrapper rtl">

           <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header rtl"><i class="fa fa-list-alt"></i>   تعديل {{$data->articales_title}}</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/admin">صفحة لوحة التحكم الرئيسية</a></li>
              <li><i class="fa fa-desktop"></i>{{$data->articales_title}}</li>
            </ol>
          </div>
        </div>


        <div class="row">
    <div class="col-lg-3">
    </div>

        <div class="col-lg-9 rtl">
                <section class="panel">
                  <header class="panel-heading">
                    تعديل {{$data->articales_title}}
                  </header>
                <div class="panel-body">    
                  <form class="form-horizontal" method="POST" action="{{ route('edit_who') }}">
                         @csrf
                     <div class="form-group ">
                        <div class="col-sm-9 offset-sm-3 float-r">
                        <label class="control-label col-sm-4">العنوان </label>
                          <input name="title" type="text" class="form-input form-control" value="{{$data->articales_title}}">
                        </div>
                      </div>


                          <div class="form-group">
                <section class="panel">
                  <header class="panel-heading">
                    تعديل النص
                  </header>
                  <div class="panel-body">
                   <div class="form-group ">
                            <div class="col-md-12">
                        <div id="editor" class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
                          {!! $data->articales_description !!}
                            </div>

                              </div>
                            </div>

                         <div class="form-group ">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="edit-text">
                                    {{ __('اضف خبر جديدة') }}
                                </button>
                            </div>
                        </div>
                  </div>


                  

                </section>
              </div>


               
                </form>
              </div>
            </section>

          </div>
        </div>
        <!-- Basic Forms & Horizontal Forms-->

         

      </section>

    </section>
    <!--main content end-->

    @endsection


@section('js')

    @endsection
