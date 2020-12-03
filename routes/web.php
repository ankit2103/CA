<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\login;


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
//User Interface
Route::get('/', function () {return view('index');});//Index Page
Route::get('/enquiry', function () {return view('enquiry');});//Enquiry Page
Route::post('/submit', 'Controller@store');//Enquiry Data Store
Route::get('/blog', function () {return view('blog');});//Blogs Page
Route::get('/newsletter', function () {return view('newsletter');});//News Letter Page
Route::get('/contact_us', function () {return view('contact_us');});//Contact Us Page
Route::get('/login', function () {return view('adminlogin');});//login Page
Route::get('/feedback_form', function () {return view('feedback');});//Feedback  PAge
Route::get('/acts', function () {return view('act');});//Acts Page
Route::post('/feedback_form', 'Controller@feedback');//Feedback Data Store
Route::post('/login', 'dashboard@login');//Admin Login




Route::middleware(['login'])->group(function () {
//Admin Dashboard
Route::get('/dashboard', function () {return view('dashboard.dashboard ');})->name('dashboard');//Dashboard Main Page
Route::get('/client', function () {return view('dashboard.all_clients');});//All Clients Details
Route::post('/delete/{id}','dashboard@delete');//Delete Client
Route::get('/accounting_dashboard', function () {return view('dashboard.accounting_dashboard');});//Accounting Service Page
Route::get('/audit_dashboard', function () {return view('dashboard.audit_dashboard');});//Audit Service Page
Route::get('/epf_dashboard', function () {return view('dashboard.epf_dashboard');});//EPF Service Page
Route::get('/esic_dashboard', function () {return view('dashboard.esic_dashboard');});//ESIC Service Page
Route::get('/gst_dashboard', function () {return view('dashboard.gst_dashboard');});//GST Service Page
Route::get('/income_tax_dashboard', function () {return view('dashboard.income_tax_dashboard');});//Income Tax Service Page
Route::get('/ngo_dashboard', function () {return view('dashboard.ngo_dashboard');});//NGO Service Page
Route::get('/cooperates_dashboard', function () {return view('dashboard.cooperates_dashboard');});//Cooperates Service Page
Route::get('/project_dashboard', function () {return view('dashboard.pf');});//pf Service Page
Route::get('/blogs_dashboard', function () {return view('dashboard.blogs_dashboard');});//Post Blog Page
Route::get('/newsletter_dashboard', function () {return view('dashboard.newsletter_dashboard');});//News Letter Post Page
Route::get('/latest_news', function () {return view('dashboard.latest_news');});//Latest News Page
Route::get('/feedback', function () {return view('dashboard.feedback_dashboard');});//feedback Post Page

//Controller
Route::post('/blog_post','dashboard@blog');//Post Blog Controller
Route::post('/newsletter_post','dashboard@newsletter');//Post NewsLetter Controller
Route::post('/news_post','dashboard@news');//Post NewsLetter Controller
//edit
Route::post('/edit_newsletter_post/{id}','dashboard@edit_newsletter_post');//Edit Newsletter
Route::post('/edit_blog/{id}','dashboard@edit_blog');//Edit Blog
Route::post('/edit_news/{id}','dashboard@edit_news');//Edit Blog


//Delete
Route::get('/delete_client/{id}','dashboard@client_delete');//Delete Client
Route::get('/delete_blog/{id}','dashboard@blog_delete');//Delete Blog
Route::get('/delete_newsletter/{id}','dashboard@newsletter_delete');//Delete NewsLetter
Route::get('/delete_feedback/{id}','dashboard@delete_feedback');//Delete feedback
Route::get('/delete_latestnews/{id}','dashboard@delete_latestnews');//Delete feedback


});


Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to("/login");
});

