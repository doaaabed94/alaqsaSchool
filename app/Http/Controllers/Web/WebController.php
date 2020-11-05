<?php
namespace App\Http\Controllers\Web;

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


class WebController extends Controller
{
    public function show_who_we_are() {
        $data=Articale::where('articale_type',"=", "about_school")->first();
        $vision=Articale::where('articale_type',"=", "vision")->first();

        return view('who-we-are.who-we-are', ['data'=> $data , 'vision'=>$vision]);
    }

	public function show_manager() {
        $data=Articale::where('articale_type',"=", "manager_word")->first();
        return view('who-we-are.manager-word', ['data'=> $data]);
    }
        

	public function Chartjs(){
	     $articale=Articale::where('articale_type',"=", "calender_notes")->first();

	        $Events=Calender::get();
	        return view('calender',['editable'=>false, 'Events' => $Events , 'articale'=>$articale]);


	}

	public function contact_send(){

	       
	        return "contact_send";


	}


}
