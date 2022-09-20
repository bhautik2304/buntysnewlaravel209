<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{count,pages};
class adminpagemanage extends Controller
{
    //
    public function index()
    {
        # code...
        $data=["totaleusers"=>count::count()];
        // dd($data);
        return view('admin.dasbord',['data'=>$data]);
    }

    public function Gallery()
    {
        # code...
        // $data=["totaleusers"=>count::count()];
        // dd($data);
        return view('admin.gallary');
    }

    public function Review()
    {
        # code...
        // $data=["totaleusers"=>count::count()];
        // dd($data);
        return view('admin.gallary');
    }

    public function Page()
    {
        return view('admin.page');
    }

    public function Pagedelate($id)
    {
        pages::find($id)->delete();
        return redirect()->back();
    }

    public function Pageedite($id)
    {
        # code...
        return view('admin.crud.editepage',['data'=>pages::find($id)]);
    }

    public function Galleryedite()
    {
        # code...
        // $data=["totaleusers"=>count::count()];
        // dd($data);
        return view('admin.gallary');
    }

    public function setting()
    {
        # code...
        return view('admin.setting');
    }

    public function blog()
    {
        # code...
        return view('admin.blog');
    }

    public function newblog()
    {
        # code...
        return view('admin.crud.newblog');
    }

    public function blogedite()
    {
        # code...
        return view('admin.crud.editepost');
    }

    public function blogdelate()
    {
        # code...
        // return view('admin.');
    }

    public function newuser()
    {
        # code...
        return view('admin.crud.newuser');
    }

    public function useredite()
    {
        # code...
        return view('admin.crud.editeuser');
    }

    public function userdelate()
    {
        # code...
        return view('admin.dasbord');
    }

    public function users()
    {
        # code...
        return view('admin.users');
    }

    public function newnotyfication()
    {
        # code...
        return view('admin.crud.newnotyfication');
    }

    public function notyficationedite()
    {
        # code...
        return view('admin.crud.editenotyfication');
    }

    public function notyficationdelate()
    {
        # code...
        return view('admin.dasbord');
    }

    public function notyfication()
    {
        # code...
        return view('admin.notyfication');
    }

    public function rewiev()
    {
        # code...
        return view('admin.dasbord');
    }

    public function delaterewiev()
    {
        # code...
        return view('admin.dasbord');
    }

    public function blogpost()
    {
        # code...
        return view('admin.blogpost');
    }

    public function leads()
    {
        # code...
        return view('admin.leads');
    }

    public function promotion()
    {
        # code...
        return view('admin.promotion');
    }

    public function banner()
    {
        # code...
        return view('admin.banner');
    }

    public function newbanner()
    {
        # code...
        return view('admin.crud.newbanner');
    }

    public function banneredite()
    {
        # code...
        return view('admin.crud.editebanner');
    }

    public function bannerdelate(){

    }
}
