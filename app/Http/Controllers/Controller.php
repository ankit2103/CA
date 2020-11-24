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
use App\feedback;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function store(Request $request)
	{
        $input = $request->all();
        $services = $input['services'];
        $input['services'] = implode(',', $services);      
        client::create($input);
        return redirect()->back();
    }
    protected function feedback(Request $request)
      { 
    
        $input = $request->all();
        feedback::create($input);
        return redirect()->back();
    }
}

