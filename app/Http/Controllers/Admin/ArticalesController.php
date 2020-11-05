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

class ArticalesController extends Controller
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
                  $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }
   public function show_admission() {
                  $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }
       public function show_documents() {
                  $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }
     public function show_age_acceptance() {
                  $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }
   public function show_registration_dates() {
                  $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }
 public function show_students_affairs() {
                  $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('dashboard.who-we-are.edit_who', ['data'=> $data]);
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////
}
