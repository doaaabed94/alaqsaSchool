<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/send', 'Web\WebController@contact_send')->name('contact');



Route::get('/problem', function () {
    return view('problem');
});

/////////////////////////////////////// who-we-are
 

Route::get('/who-we-are', 'Web\WebController@show_who_we_are');

Route::get('/about-us', 'Web\WebController@show_manager');
Route::get('/calender', 'Web\WebController@Chartjs');


Route::get('/word2', function () {
    return view('who-we-are.word-2');
});

Route::get('/admission', function () {
    return view('admission.admission');
});

Route::get('/admission/application-form', function () {
    return view('admission.application-form');
});

Route::get('/admission/documents', function () {
    return view('admission.documents');
});
Route::get('/admission/age-acceptance', function () {
    return view('admission.age-acceptance');
});

Route::get('/admission/roles', function () {
    return view('admission.roles');
});

////////////////////////////////////////
Route::get('/news', function () {
    return view('news.all-news');
});
Route::get('/news/single-page', function () {
    return view('news.single-news');
});
////////////////////////////////////////////

Route::get('/activity', function () {
    return view('activity.activity');
});

Route::get('/activity/activity-single', function () {
    return view('activity.single-activity');
});

Route::get('/gallery', function () {
    return view('gallery');
});



Route::get('/library', function () {
    return view('library');
});

Route::group(['middleware' => 'auth'], function () { 
Route::get('/admin', function () {
    return view('dashboard.index');
});

////// first Group //////
Route::get('/admin/who-we-are', 'Admin\AdminController@show_edit_who');
Route::get('/admin/school-manager-word', 'Admin\AdminController@show_edit_manager');
Route::get('/admin/trustees-word', 'Admin\AdminController@show_edit_trustees');
Route::post('/admin/who-we-are/edit', 'Admin\AdminController@edit_who')->name('edit_who');
Route::post('/admin/school-manager-word/edit', 'Admin\AdminController@edit_manager');
Route::post('/admin/trustees-word/edit', 'Admin\AdminController@edit_trustees');

////// second Group //////


Route::get('/admin/news', 'Admin\AdminController@show_edit_news');
Route::post('/admin/news/edit', 'Admin\AdminController@edit_news');

////// third Group //////

Route::get('/admin/news', 'Admin\AdminController@show_news');
Route::get('/admin/news/edit', 'Admin\AdminController@show_edit_news');
Route::get('/admin/news/add', 'Admin\AdminController@show_add_news');
Route::post('/admin/news/delete', 'Admin\AdminController@delete_news');
Route::post('/admin/news/add', 'Admin\AdminController@add_news');
Route::post('/admin/news/edit', 'Admin\AdminController@edit_news');

////// fourth Group //////

Route::get('/admin\Activity', 'Admin\AdminController@show_activity');
Route::get('/admin\Activity/edit', 'Admin\AdminController@show_edit_activity');
Route::get('/admin\Activity/add', 'Admin\AdminController@show_add_activity');
Route::post('/admin\Activity/delete', 'Admin\AdminController@delete_activity');
Route::post('/admin\Activity/add', 'Admin\AdminController@add_activity');
Route::post('/admin\Activity/edit', 'Admin\AdminController@edit_activity');

/////////// fifth Group /////

Route::get('/admin/library', 'Admin\AdminController@show_library');
Route::get('/admin/library/edit', 'Admin\AdminController@show_edit_library');
Route::get('/admin/library/add', 'Admin\AdminController@show_add_library');
Route::post('/admin/library/delete', 'Admin\AdminController@delete_library')->name('delete_library');
Route::post('/admin/library/add', 'Admin\AdminController@add_library')->name('add_library');
Route::post('/admin/library/edit', 'Admin\AdminController@edit_library')->name('edit_library');


Route::get('/admin/type-librar', 'Admin\AdminController@show_type_librar');
Route::get('/admin/type-librar/edit', 'Admin\AdminController@show_edit_type_librar');
Route::get('/admin/type-librar/add', 'Admin\AdminController@show_add_type_librar');
Route::post('/admin/type-librar/delete', 'Admin\AdminController@delete_type_librar')->name('delete_type_librar');
Route::post('/admin/type-librar/add', 'Admin\AdminController@add_type_librar')->name('add_type_librar');
Route::post('/admin/type-librar/edit', 'Admin\AdminController@edit_type_librar')->name('edit_type_librar');



////////////// SIXTH Group /////////////



Route::get('/admin/facilities', 'Admin\AdminController@show_facilities');
Route::get('/admin/facilities/edit', 'Admin\AdminController@show_edit_facilities');
Route::get('/admin/facilities/add', 'Admin\AdminController@show_add_facilities');
Route::post('/admin/facilities/delete', 'Admin\AdminController@delete_facilities')->name('delete_facilities');
Route::post('/admin/facilities/add', 'Admin\AdminController@add_facilities')->name('add_facilities');
Route::post('/admin/facilities/edit', 'Admin\AdminController@edit_facilities')->name('edit_facilities');

Route::get('/admin/gallery', 'Admin\AdminController@show_gallery');
Route::get('/admin/gallery/edit', 'Admin\AdminController@show_edit_gallery');
Route::get('/admin/gallery/add', 'Admin\AdminController@show_add_gallery');
Route::post('/admin/gallery/delete', 'Admin\AdminController@delete_gallery')->name('delete_gallery');
Route::post('/admin/gallery/add', 'Admin\AdminController@add_gallery')->name('add_gallery');
Route::post('/admin/gallery/edit', 'Admin\AdminController@edit_gallery')->name('edit_gallery');


//////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/admin/calender', 'Admin\CalendarController@show_calender')->name('calender');
Route::get('/admin/calender/add', 'Admin\CalendarController@show_add_calender')->name('show_add_calender');

Route::post('/admin/calender/delete', 'Admin\CalendarController@delete_calender')->name('delete_calender');

Route::post('/admin/calender/add', 'Admin\CalendarController@add_calender')->name('add_calender');

Route::post('/admin/calender-note/edit', 'Admin\CalendarController@show_edit_note_calender')->name('show_edit_note_calender');

Route::post('/admin/calender/edit_note', 'Admin\CalendarController@edit_note_calender')->name('edit_note_calender');
Route::post('/admin/calender/edit', 'Admin\CalendarController@edit_calender')->name('edit_calender');


//////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/admin/messages', 'Admin\AdminController@show_messages');
Route::get('/admin/problem_messages', 'Admin\AdminController@show_problem_messages');


Route::get('/test', 
 ['as' => 'test', 'uses' =>'Admin\CalendarController@test']
);

////////////// SIXTH Group /////////////

Route::get('/admin/Admission', 'Admin\ArticalesController@show_admission');
Route::post('/admin/Admission/edit', 'Admin\AdminController@edit_admission');

Route::get('/admin/documents', 'Admin\ArticalesController@show_documents');
Route::post('/admin/documents/edit', 'Admin\AdminController@edit_documents');


Route::get('/admin/Age-acceptance', 'Admin\ArticalesController@show_age_acceptance');
Route::post('/admin/Age-acceptance/edit', 'Admin\AdminController@edit_age_acceptance');

Route::get('/admin/registration-dates', 'Admin\ArticalesController@show_registration_dates');
Route::post('/admin/registration-dates/edit', 'Admin\AdminController@edit_registration_dates');

Route::get('/admin/students-affairs', 'Admin\ArticalesController@show_students_affairs');
Route::post('/admin/students-affairs/edit', 'Admin\AdminController@edit_students-affairs');

});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/register', 'Auth\LoginController@login');

?>
