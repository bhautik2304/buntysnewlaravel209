<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{count,pages};

class pagemanagementcontoller extends Controller
{
    //
    public function index(Request $req)
    {
        # code...
        if ($req->session()->has('count')) {
            # code...
            if(!$req->session()->has('count')){
                $refrense=$req->server('HTTP_REFERER');
                // dd($refrense);
                $count=new count;
                $count->platform_url=$refrense;
                $count->save();
                $req->session()->push('count', true);
                return view('index');
            }
        }else{
            if(!$req->session()->has('count')){
                $refrense=$req->server('HTTP_REFERER');
                // dd($refrense);
                $count=new count;
                $count->platform_url="Google";
                $count->save();
                $req->session()->push('count', true);
                return view('index');
            }
        }
        return view('index');
    }

    public function remove(Request $req)
    {
        # code...
        $req->session()->flush();
        return redirect()->back();
    }

    public function Servicepage($slug)
    {
        # code...
        return view('service',["data"=>pages::where('slug',$slug)->get()->toArray()]);
    }
}
