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

class CalendarController extends Controller
{

///////////////////////////////////////////Clender////////////////////////////////////////////////////////////

    public function show_calender() {

      $data=Calender::paginate(5)->orderBy('created_at', 'desc');

    $articale=Articale::where('articale_type',"=", "calender_notes")->first();

    return view('dashboard.calender.show_edit_calender' , ['data'=> $data, 'articale'=>$articale]);
    }

   public function show_edit_note_calender (Request $request) {
        $articale=Articale::where('articale_type',"=", "calender_notes")->first();
        if($request->has('calender_id')){
        $calendar = Calender::find($request->input('calender_id')); 
       // $calendar['start']=$calendar['start']->format('Y-m-d');
        }
        else{
             $calendar='';
        }
        return view('dashboard.calender.show_edit_note_calender', ['articale'=>$articale , 'data'=>$calendar]);
    }

       public function show_add_calender() {
        $articale=Articale::where('articale_type',"=", "calender_notes")->first();
             return view('dashboard.calender.add_edit_calender', ['articale'=>$articale]);
    }

       public function delete_calender(Request $request) {
       $calendar = Calender::find($request->input('calender_id'));
      $calendar->delete();
        return redirect()->route('calender');
      
    }

       public function add_calender(Request $request) {
        $calender = new Calender;

        $calender->title = $request->input('title');
        $calender->start = $request->input('start');
        $calender->end = $request->input('end');
        $calender->color = $request->input('color');
        $calender->save();

        return redirect()->route('calender');
    }
  public function edit_note_calender(Request $request) {
        
     //   $articale = Articale::where('articale_type',"=", "calender_notes")->first();
      //  $articale->articales_description = $request->input('articales_description');
     //   $articale->save();
        return "dddone";
    }

    public function edit_calender(Request $request) {

        $calender = Calender::where("calender_id", "=", $request->input('calender_id'))->first();
        $calender->title = $request->input('title');
        $calender->start = $request->input('start');
        $calender->end = $request->input('end');
        $calender->color = $request->input('color');
             $calender->save();
          return redirect()->route('calender');
    }



    public function test(Request $request) {
    $articale = Articale::where('articale_type',"=", "calender_notes")->first();
        $articale->articales_description = $request->input('ddd');
        $articale->save();
          return redirect()->route('calender');
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////
}
