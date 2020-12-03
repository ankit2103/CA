<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Input;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\client;
use App\blog;
use App\news;
use DB;
use App\news_letter;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class dashboard extends Controller
{


    //login
    protected function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');
        $request->session()->put('data',$request->input());
        if ($name ==  'ankit' & $password == '123456' ){
            return Redirect::route('dashboard');
        }
        else{
            echo "Incorrect password";
        }
    }
    protected function blog(Request $request)
    {
        $file = $request->file('image');
        $destinationPath = 'blogs/';
        
        if($file == NUll)
        {  
            blog::create([
                'name' => $request['name'],
                'blog_name' => $request['blog_name'],
                'content1' => $request['content1'],
                'date' => $request['date'],
                'content2' => $request['content2'],]);
            DB::disconnect('mysql');
            return redirect()->back();    
        }
        else{
            $originalFile = $file->getClientOriginalName();
            $image= $file->move($destinationPath,$originalFile);
            blog::create([
                'name' => $request['name'],
                'blog_name' => $request['blog_name'],
                'content1' => $request['content1'],
                'image'=> $originalFile,
                'content2' => $request['content2'],
                'date' => $request['date']]);
            DB::disconnect('mysql');
            return redirect()->back();
    }
    }
    protected function newsletter(Request $request)
    {
        $input = $request->all();
        news_letter::create($input);
        return redirect()->back();
    }
    protected function news(Request $request)
    {
        $input = $request->all();
        news::create($input);
        return redirect()->back();
    }




    //EDIT 

      public function edit_newsletter_post(Request $request,$id) {
      $title = $request->input('title');
      $description = $request->input('description');
      DB::table('newsletter')->where('id', $id)->update([
                'title' => $title,
                'description'=> $description
            ]);   
            return redirect()->back();      
   }
    protected function edit_blog(Request $request,$id)
    {
        $file = $request->file('image');
        $destinationPath = 'blogs/';
        
        if($file == NUll)
        {  
            $name = $request->input('name');
            $blog_name = $request->input('blog_name');
            $content = $request->input('content');
            DB::table('blog')->where('id', $id)->update([
                'name' => $name,
                'blog_name'=> $blog_name,
                'content'=>$content
            ]);   
            return redirect()->back();
        }
        else{
            $originalFile = $file->getClientOriginalName();
            $image= $file->move($destinationPath,$originalFile);
            $name = $request->input('name');
            $blog_name = $request->input('blog_name');
            $content = $request->input('content');
            DB::table('blog')->where('id', $id)->update([
                'name' => $name,
                'blog_name'=> $blog_name,
                'content'=>$content,
                'image'=> $originalFile
            ]);   
            return redirect()->back();
        }
    }



     public function edit_news(Request $request,$id) {
      $news_title = $request->input('news_title');
      $news_description = $request->input('news_description');
      $date = $request->input('date');      
      DB::table('news')->where('id', $id)->update([
                'news_title' => $news_title,
                'news_description'=> $news_description,
                'date'=> $date
            ]);   
            return redirect()->back();      
   }

    //DELETE
    public function client_delete($id) {
    	DB::delete('delete from client where id = ?',[$id]);
    	return redirect()->back();
    }
    
    public function delete_latestnews($id) {
        DB::delete('delete from news where id = ?',[$id]);
        return redirect()->back();
    }
    public function delete_feedback($id) {
        DB::delete('delete from feedback where id = ?',[$id]);
        return redirect()->back();
    }
    public function blog_delete($id) {
        $data = blog::find($id);
        $image_path = public_path().'/blogs/'.$data->image;
        unlink($image_path);
         DB::delete('delete from blog where id = ?',[$id]);
    	return redirect()->back();
    }
    public function newsletter_delete($id) {
    	DB::delete('delete from news where id = ?',[$id]);
    	return redirect()->back();
    }
}
