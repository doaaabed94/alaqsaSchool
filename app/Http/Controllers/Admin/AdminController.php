<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Articale;
use App\Activity;
use App\Facilities;
use App\Gallery;
use App\Library;
use App\News;
use App\Calender;

class AdminController extends Controller
{
    public function show_edit_who() {
        $data=Articale::where('articale_type',"=", "about_school")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }


     public function show_edit_manager() {
        $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }


     public function show_edit_trustees() {
                  $data=Articale::where('articale_type',"=", "trustees_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }


     public function edit_who(Request $request) {
             return $request;
    }

 

     public function edit_manager() {
             return view('basic');
    }

    public function edit_trustees() {
             return view('basic');
    }
///////////////////////////////////////////Clender////////////////////////////////////////////////////////////

    public function show_calender() {

    return view('dashboard.calender.show_edit_calender');
    }

   public function show_edit_calender() {
             return view('basic');
    }

       public function show_add_calender() {
             return view('basic');
    }

       public function delete_facilities() {
             return view('basic');
    }

       public function add_calender() {
             return view('basic');
    }

    public function edit_calender() {
             return view('basic');
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////
}
